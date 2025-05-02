<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.services.index');
    }
    public function create()
    {
        return view('admin.services.create');
    }
    public function store()
    {
        return redirect()->route('admin.services.index');
    }
    public function edit($id)
    {
        return view('admin.services.edit', compact('id'));
    }
    public function update($id)
    {
        return redirect()->route('admin.services.index');
    }
    public function destroy($id)
    {
        return redirect()->route('admin.services.index');
    }
}
