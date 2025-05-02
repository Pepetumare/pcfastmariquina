<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use MercadoPago\SDK;
use MercadoPago\Payment;

class MercadoPagoWebhookController extends Controller
{
    public function handle(Request $request)
    {
        if ($request->type !== 'payment') {
            return response()->json(['status' => 'ignored']);
        }
    
        \MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));
    
        $paymentId = $request->data['id'];
        $payment = \MercadoPago\Payment::find_by_id($paymentId);
    
        // Buscar la orden por correo o por otros datos
        $email = $payment->payer->email;
        $amount = $payment->transaction_amount;
    
        // Buscar la última orden pendiente de ese cliente
        $order = \App\Models\Order::where('customer_email', $email)
            ->where('status', 'pendiente')
            ->orderBy('created_at', 'desc')
            ->first();
    
        if ($order) {
            $order->update([
                'payment_id' => $paymentId,
                'status' => $payment->status, // 'approved', 'rejected', etc.
            ]);
    
            \Log::info("Orden #{$order->id} actualizada con pago #$paymentId");
        } else {
            \Log::warning("No se encontró orden pendiente para $email con monto $amount");
        }
    
        return response()->json(['status' => 'received']);
    }
    
}
