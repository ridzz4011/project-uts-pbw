<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan 4</title>
</head>
<body>
    <h1>Latihan 4</h1>

    <p><b>Nama:</b> Farid Noer Hakim</p>
    <p><b>NPM:</b> 2310631170081</p>
    <p><b>Kelas:</b> 4C Informatika</p>
    
    <!-- 1. Variabel Integer -->
    <h2>1. Variabel Integer</h2>
    <?php
    $integerVar = 20;
    echo "Nilai dari variabel integer adalah: " . $integerVar;
    ?>

    <!-- 2. Variabel Float -->
    <h2>2. Variabel Float</h2>
    <?php
    $floatVar = 3.14;
    echo "Nilai dari variabel float adalah: " . $floatVar;
    ?>

    <!-- 3. Variabel String -->
    <h2>3. Variabel String</h2>
    <?php
    $stringVar = "Pemrograman Web";
    echo "Nilai dari variabel string adalah: " . $stringVar;
    ?>

    <!-- 4. Variabel Boolean -->
    <h2>4. Variabel Boolean</h2>
    <?php
    $booleanVar = true;
    // Jika langsung dicetak, TRUE akan muncul sebagai "1" dan FALSE akan kosong.
    // Untuk menampilkannya sebagai kata "true" / "false", kita bisa gunakan ternary:
    echo "Nilai dari variabel boolean adalah: " . ($booleanVar ? "true" : "false");
    ?>

    <!-- 5. Array -->
    <h2>5. Array</h2>
    <?php
    $namaArray = ["cecep", "asep", "dudu"];
    echo "Nama pertama dari array adalah: " . $namaArray[0];
    ?>

    <!-- 6. Class dan Objek -->
    <h2>6. Class dan Objek</h2>
    <?php
    class Mobil {
        public $merk;
        public $tahun;
    }

    // Membuat objek dari class Mobil
    $mobilSaya = new Mobil();
    $mobilSaya->merk = "Toyota";
    $mobilSaya->tahun = 2021;

    // Menampilkan property merk dan tahun
    echo "Merk mobil: " . $mobilSaya->merk . "<br>";
    echo "Tahun mobil: " . $mobilSaya->tahun;
    ?>
</body>
</html>
