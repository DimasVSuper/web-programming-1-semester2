<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Data</title>
</head>
<body>
    <h1>DATA ANDA SEDANG DI PROSES</h1>
    <h2>Nama: <?php echo htmlspecialchars($_POST['nama']); ?></h2>
    <h2>Email: <?php echo htmlspecialchars($_POST['email']); ?></h2>
    <h2>Keluhan: <?php echo nl2br(htmlspecialchars($_POST['keluhan'])); ?></h2>
</body>
</html>