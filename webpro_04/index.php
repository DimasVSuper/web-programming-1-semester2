<?php
    include 'logika.php'; // Tambahkan titik koma
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "$teks1 $teks2"; ?></h1>
    <h1>Panjang sisi kubus = <?php echo $sisi; ?></h1>
    <h1>Volume kubus = <?php echo volumekubus($sisi); ?></h1>
</body>
</html>