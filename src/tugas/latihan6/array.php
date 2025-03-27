<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP: Array Mahasiswa & Buah</title>
    <style>
        body {
            background: #f5f5f5;
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 600px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }
        h1, h2 {
            text-align: center;
        }
        ul {
            list-style: inside disc;
            padding-left: 0;
        }
        .highlight {
            color: #d50000; /* Merah untuk penekanan */
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Latihan PHP: Array Mahasiswa & Buah</h1>
    
    <!-- 1. Menyimpan nama mahasiswa dan menampilkan -->
    <?php
    // Array nama mahasiswa
    $mahasiswa = ["Andi", "Budi", "Citra", "Dewi", "Erwin"];
    ?>
    <h2>Daftar Nama Mahasiswa</h2>
    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li><?php echo $mhs; ?></li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <!-- 2. Mencari nama buah yang dimulai dengan huruf tertentu (misalnya 'A') -->
    <?php
    // Array nama buah
    $buah = ["Apel", "Anggur", "Alpukat", "Pisang", "Mangga", "Jeruk", "Aprikot"];
    
    // Huruf yang ingin dicari
    $hurufCari = "A";
    
    // Filter buah yang diawali huruf 'A' (tidak case-sensitive)
    $buahDenganA = [];
    foreach ($buah as $b) {
        // Gunakan strcasecmp atau strtolower untuk pencocokan case-insensitive
        if (stripos($b, $hurufCari) === 0) {
            $buahDenganA[] = $b;
        }
    }
    ?>
    <h2>Nama Buah yang Dimulai dengan Huruf "<?php echo $hurufCari; ?>"</h2>
    <?php if (!empty($buahDenganA)): ?>
        <ul>
            <?php foreach ($buahDenganA as $item): ?>
                <li><span class="highlight"><?php echo $item; ?></span></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Tidak ada buah yang dimulai dengan huruf "<?php echo $hurufCari; ?>".</p>
    <?php endif; ?>
</div>
</body>
</html>
