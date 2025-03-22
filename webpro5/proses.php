<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="form">
    <h1>DATA ANDA SEDANG DI PROSES</h1> <br>
    <h2>Nama: <?php echo htmlspecialchars($_POST['nama']); ?></h2> 
    <h2>Email: <?php echo htmlspecialchars($_POST['email']); ?></h2> 
    <h2>Keluhan: <?php echo nl2br(htmlspecialchars($_POST['keluhan'])); ?></h2>
    <a href="index.php"><button class="Reinput">Input data lagi</button></a>
    </main>
</body>
</html>