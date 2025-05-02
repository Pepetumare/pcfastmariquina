<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteRequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'service' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        Quote::create($request->all());

        return redirect()->back()->with('success', 'Tu solicitud fue enviada con éxito. Te contactaremos pronto.');
    }
}
