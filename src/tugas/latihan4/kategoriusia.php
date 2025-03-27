<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP: Kategori Usia & Cek Bilangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 600px;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
        }
        form {
            margin-bottom: 30px;
        }
        label {
            display: inline-block;
            width: 200px;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 200px;
            padding: 5px;
        }
        button {
            margin-top: 10px;
            padding: 8px 16px;
            background: #03a9f4;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0288d1;
        }
        .result {
            margin-top: 15px;
            font-weight: bold;
            color: #333;
        }
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Latihan PHP</h1>
    <h2>1. Menentukan Kategori Usia</h2>
    <form method="POST">
        <label for="umur">Masukkan umur:</label>
        <input type="number" name="umur" id="umur" required>
        <br>
        <button type="submit" name="cek_umur">Cek Kategori</button>
    </form>

    <?php
    // Jika tombol "cek_umur" ditekan
    if (isset($_POST['cek_umur'])) {
        $umur = intval($_POST['umur']);
        $kategori = "";

        if ($umur < 13) {
            $kategori = "Anak";
        } elseif ($umur >= 13 && $umur <= 17) {
            $kategori = "Remaja";
        } else {
            $kategori = "Dewasa";
        }

        echo "<div class='result'>Umur: $umur &mdash; Kategori: <strong>$kategori</strong></div>";
    }
    ?>

    <hr>

    <h2>2. Mengecek Bilangan Positif, Negatif, atau Nol</h2>
    <form method="POST">
        <label for="angka">Masukkan sebuah angka:</label>
        <input type="number" name="angka" id="angka" required>
        <br>
        <button type="submit" name="cek_angka">Cek Bilangan</button>
    </form>

    <?php
    // Jika tombol "cek_angka" ditekan
    if (isset($_POST['cek_angka'])) {
        $angka = floatval($_POST['angka']);
        $hasil = "";

        if ($angka > 0) {
            $hasil = "Positif";
        } elseif ($angka < 0) {
            $hasil = "Negatif";
        } else {
            $hasil = "Nol";
        }

        echo "<div class='result'>Angka: $angka &mdash; Kategori: <strong>$hasil</strong></div>";
    }
    ?>
</div>

</body>
</html>
