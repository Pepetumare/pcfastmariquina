<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderTrackingController extends Controller
{
    public function form()
    {
        return view('seguimiento.form');
    }

    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $orders = Order::where('customer_email', $request->email)->latest()->get();

        return view('seguimiento.resultados', compact('orders'));
    }
}
