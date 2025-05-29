<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5</title>
</head>
<body>
    <?php  
        // Tampilkan data yang diterima dari pertemuan5.php
        echo "<h1>Data yang Diterima:</h1>";
        echo "<p>NIM: " . htmlspecialchars($_POST["nim"] ?? "Data tidak ada" ) . "</p>";
        echo "<p>NAMA: " . htmlspecialchars($_POST["nama"] ??  "Data tidak ada") . "</p>";
    ?>
</body>
</html>