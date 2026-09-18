<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $totalNilaiStok = $this->hitungTotalNilaiStok($products);

        return view('products.index', compact('products', 'totalNilaiStok'));
    }

    private function hitungTotalNilaiStok($products)
    {
        return $products->sum(fn ($product) => $product->harga * $product->stok);
    }
}
