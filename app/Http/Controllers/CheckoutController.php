<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Resources\Preference\Item;
use MercadoPago\MercadoPagoConfig;
class CheckoutController extends Controller
{
    public function form()
    {
        $cart = session('cart', []);
        return view('checkout', compact('cart'));
    }

    public function process(Request $request)
    {
        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()->route('carrito')->with('error', 'Tu carrito está vacío.');
        }

        $data = $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_phone' => 'nullable',
            'address' => 'required',
            'commune' => 'required',
        ]);

        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);

        $order = Order::create(array_merge($data, ['total' => $total]));

        foreach ($cart as $item) {
            $order->items()->create([
                'product_name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Compra realizada con éxito');
    }

    public function redirectToMercadoPago(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'address' => 'required',
            'commune' => 'required',
        ]);
    
        $cart = session('cart', []);
        if (!$cart) {
            return redirect()->route('carrito')->with('error', 'Tu carrito está vacío');
        }
    
        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
    
        // Guardar orden en estado pendiente
        $order = \App\Models\Order::create([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'address' => $request->address,
            'commune' => $request->commune,
            'total' => $total,
            'status' => 'pendiente',
        ]);
    
        foreach ($cart as $item) {
            $order->items()->create([
                'product_name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
            ]);
        }
    
        // Configurar Mercado Pago SDK 3.x
        MercadoPagoConfig::setAccessToken(config('services.mercadopago.token'));
    
        $items = [];
        foreach ($cart as $item) {
            $mpItem = new Item();
            $mpItem->title = $item['name'];
            $mpItem->quantity = $item['quantity'];
            $mpItem->unit_price = (float) $item['price'];
            $items[] = $mpItem;
        }
    
        $client = new PreferenceClient();
    
        $preference = $client->create([
            "items" => $items,
            "back_urls" => [
                "success" => route('checkout.success'),
                "failure" => route('checkout.failure'),
                "pending" => route('checkout.pending'),
            ],
            "auto_return" => "approved",
        ]);
    
        return redirect($preference->init_point);
    }
}
