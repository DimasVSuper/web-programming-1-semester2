<?php
    include 'variable.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 02</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <li>Nama: <?php echo $datadimas['name']; ?></li>
        <li>NIM: <?php echo $datadimas['NIM']; ?></li>
        <li>Alamat: <?php echo $datadimas['Alamat']; ?></li>
        <li>TTL: <?php echo $datadimas['TTL']; ?></li>
        <li>Telp: <?php echo $datadimas['Telp']; ?></li>
    </ul>
</body>
</html>