<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Pastikan model Product di-import

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Data 1 (Stok aman)
        Product::create([
            'nama' => 'Laptop ASUS ROG',
            'kategori' => 'Elektronik',
            'harga' => 25000000,
            'stok' => 5,
            'deskripsi' => 'Laptop gaming spesifikasi tinggi.'
        ]);

        // Data 2 (Stok kritis, akan dites warnanya menjadi merah)
        Product::create([
            'nama' => 'Mouse Logitech Wireless',
            'kategori' => 'Aksesoris',
            'harga' => 150000,
            'stok' => 2, 
            'deskripsi' => 'Mouse tanpa kabel yang nyaman.'
        ]);

        // Data 3 (Stok aman)
        Product::create([
            'nama' => 'Monitor Samsung 24 Inch',
            'kategori' => 'Elektronik',
            'harga' => 2100000,
            'stok' => 10,
            'deskripsi' => 'Monitor LED resolusi 1080p.'
        ]);
    }
}