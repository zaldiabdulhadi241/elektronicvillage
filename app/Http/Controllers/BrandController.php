<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $data = Brand::latest()->get();
        return view('admin.brands.index', [
            'brands' => $data,
        ]);
    }

    public function tambah()
    {
        return view('admin.brands.tambah');
    }
    public function store(Request $request)
    {
    }
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit');
    }
    public function update(Brand $brand, Request $request)
    {
    }
    public function delete(Brand $brand)
    {
    }
}
