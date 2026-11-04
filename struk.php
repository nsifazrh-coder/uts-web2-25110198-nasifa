$keranjang = [
    [
        "nama" => "Kopi Susu",
        "harga" => 18000,
        "jumlah" => 2
    ],
    [
        "nama" => "Teh Manis",
        "harga" => 8000,
        "jumlah" => 3
    ],
    [
        "nama" => "Roti Bakar",
        "harga" => 15000,
        "jumlah" => 1
    ]
];
function hitungSubtotal(int $harga, int $jumlah): int {
    return $harga * $jumlah;
}
function formatRupiah(int $angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}
$total = 0;

foreach ($keranjang as $produk) {
    $subtotal = hitungSubtotal(
        $produk['harga'],
        $produk['jumlah']
    );

    $total += $subtotal;
}