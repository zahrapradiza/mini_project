<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function index()
{
    $products = Product::all();
    $totalNilaiStok = $this->hitungTotalNilaiStok($products);

    return view('welcome', compact('products', 'totalNilaiStok'));
}
}
