<?php
    include 'logika.php'; // Tambahkan titik koma
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        h1 {
            font-size: 24px;
            color: #007bff;
            margin: 10px 0;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo "$teks1 $teks2"; ?></h1>
        <h1>Panjang sisi kubus = <?php echo $sisi; ?></h1>
        <h1>Volume kubus = <?php echo volumekubus($sisi); ?></h1>
    </div>
</body>
</html>