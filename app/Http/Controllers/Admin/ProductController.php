<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('pages.admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('pages.admin.product.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        unset($data['_token']);
        Product::insert($data);

        return redirect(route('product.index'))->with('status', 'Produk / Layanan berhasil dibuat');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);

        return view('pages.admin.product.edit', compact('product'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);

        $product = Product::findOrFail($request->id);
        $product->update($data);
        return redirect(route('product.index'))->with('status', 'Produk / Layanan berhasil diperbarui');
    }

    public function delete(Request $request)
    {
        Product::destroy($request->id);

        return redirect(route('product.index'))->with('status', 'Product / Layanan berhasil dihapus');
    }
}
