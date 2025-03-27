<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bilangan Genap & Ganjil Kurang dari 100</title>
    <style>
        body {
            background: #f5f5f5;
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 10px;
        }
        .numbers {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 5px;
            margin-bottom: 20px;
        }
        .numbers span {
            display: inline-block;
            background: #03a9f4;
            color: #fff;
            padding: 5px 8px;
            border-radius: 4px;
        }
        /* Optional styling for smaller screens */
        @media (max-width: 480px) {
            .container {
                width: 90%;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bilangan Genap & Ganjil <br>Kurang dari 100</h1>

        <?php
        $evenNumbers = [];
        $oddNumbers  = [];

        for ($i = 0; $i <= 100; $i++) {
            if ($i % 2 === 0) {
                $evenNumbers[] = $i;
            } else {
                $oddNumbers[] = $i;
            }
        }
        ?>

        <h2>Daftar Bilangan Genap</h2>
        <div class="numbers">
            <?php foreach ($evenNumbers as $num): ?>
                <span><?php echo $num; ?></span>
            <?php endforeach; ?>
        </div>

        <h2>Daftar Bilangan Ganjil</h2>
        <div class="numbers">
            <?php foreach ($oddNumbers as $num): ?>
                <span><?php echo $num; ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
