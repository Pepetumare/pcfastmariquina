<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function perfil()
    {
        return view('cliente.perfil');
    }

    public function pedidos()
    {
        $orders = Order::where('customer_email', Auth::user()->email)->latest()->get();
        return view('cliente.pedidos', compact('orders'));
    }
}
