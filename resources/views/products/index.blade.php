<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Product Information System</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .stok-kritis { background-color: #ffe6e6; color: #d32f2f; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Daftar Produk</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Nama</th><th>Kategori</th><th>Harga</th><th>Stok</th><th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr class="{{ $product->stok < 3 ? 'stok-kritis' : '' }}">
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->nama }}</td>
                    <td>{{ $product->kategori }}</td>
                    <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                    <td>{{ $product->stok }}</td>
                    <td>{{ $product->deskripsi }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Belum ada data produk. Silakan tambahkan data di database.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <h3>Total Nilai Stok Gudang: Rp {{ number_format($totalNilaiStok, 0, ',', '.') }}</h3>
</body>
</html>