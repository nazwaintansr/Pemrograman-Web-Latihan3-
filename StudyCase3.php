<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Sistem Pencatatan Data Penjualan </h2>
<hr>
<h2>[Form Input untuk Data Penjualan] </h2>
<?php

$transaksi = [
    [
        "nama_produk" => "Produk A",
        "harga_per_produk" => 10000,
        "jumlah_terjual" => 5
    ],
    [
        "nama_produk" => "Produk B",
        "harga_per_produk" => 7500,
        "jumlah_terjual" => 10
    ],
    [
        "nama_produk" => "Produk C",
        "harga_per_produk" => 12000,
        "jumlah_terjual" => 8
    ]
];


function hitungTotalPerProduk($harga, $jumlah) {
    return $harga * $jumlah;
}


function hitungTotalPenjualan($transaksi) {
    $total = 0;
    foreach ($transaksi as $item) {
        $total += hitungTotalPerProduk($item["harga_per_produk"], $item["jumlah_terjual"]);
    }
    return $total;
}


echo "<h2>Laporan Penjualan:</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Harga Per Produk</th><th>Jumlah Terjual</th><th>Total</th></tr>";

$total_jumlah_terjual = 0;
foreach ($transaksi as $item) {
    $total_per_produk = hitungTotalPerProduk($item["harga_per_produk"], $item["jumlah_terjual"]);
    $total_jumlah_terjual += $item["jumlah_terjual"];
    echo "<tr>
        <td>{$item['nama_produk']}</td>
        <td>{$item['harga_per_produk']}</td>
        <td>{$item['jumlah_terjual']}</td>
        <td>{$total_per_produk}</td>
    </tr>";
}

$total_penjualan = hitungTotalPenjualan($transaksi);
echo "<tr>
    <td colspan='2'><strong>Total Penjualan</strong></td>
    <td><strong>{$total_jumlah_terjual}</strong></td>
    <td><strong>{$total_penjualan}</strong></td>
</tr>";
echo "</table>";
?>

</body>
</html>
