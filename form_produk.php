<?php
// NOMOR 5, 6, DAN 7

$nama = "";
$harga = "";

$errorNama = "";
$errorHarga = "";
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mengambil data
    $nama = trim($_POST["nama"] ?? "");
    $harga = trim($_POST["harga"] ?? "");

    // NOMOR 6: VALIDASI NAMA
    if ($nama == "") {
        $errorNama = "Nama produk wajib diisi!";
    }

    // NOMOR 6: VALIDASI HARGA
    if ($harga == "" || !is_numeric($harga) || $harga <= 0) {
        $errorHarga = "Harga harus berupa angka lebih dari 0!";
    }

    // NOMOR 7: PESAN BERHASIL
    if ($errorNama == "" && $errorHarga == "") {
        $pesan = "Produk " .
        htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') .
        " berhasil ditambahkan!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Produk</title>
</head>

<body>

    <h2>FORM TAMBAH PRODUK</h2>

    <?php if ($pesan != "") { ?>
        <p style="color:green;">
            <?php echo $pesan; ?>
        </p>
    <?php } ?>

    <form method="POST" action="">

        <label>Nama Produk:</label><br>

        <input type="text" name="nama"
        value="<?php echo htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'); ?>">

        <span style="color:red;">
            <?php echo $errorNama; ?>
        </span>

        <br><br>

        <label>Harga Produk:</label><br>

        <input type="number" name="harga"
        value="<?php echo htmlspecialchars($harga, ENT_QUOTES, 'UTF-8'); ?>">

        <span style="color:red;">
            <?php echo $errorHarga; ?>
        </span>

        <br><br>

        <button type="submit" name="simpan">
            SIMPAN
        </button>

    </form>

</body>
</html>