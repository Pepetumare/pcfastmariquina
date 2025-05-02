<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin.banners.index');
    }
    public function create()
    {
        return view('admin.banners.create');
    }
    public function store()
    {
        return redirect()->route('admin.banners.index');
    }
    public function destroy($id)
    {
        return redirect()->route('admin.banners.index');
    }
}
