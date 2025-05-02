<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Visual: solo devuelve la vista
        return view('admin.products.index');
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store()
    {
        // Por ahora no hace nada
        return redirect()->route('admin.products.index')->with('success', 'Producto creado (modo visual)');
    }

    public function edit($id)
    {
        return view('admin.products.edit', compact('id'));
    }

    public function update($id)
    {
        return redirect()->route('admin.products.index')->with('success', 'Producto actualizado (modo visual)');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.products.index')->with('success', 'Producto eliminado (modo visual)');
    }
}
