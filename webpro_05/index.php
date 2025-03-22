<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Saran Anda Sangat Penting bagi Kami!</h1>
        <form action="proses.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

            <label for="keluhan">Keluhan:</label>
            <textarea id="keluhan" name="keluhan" placeholder="Tulis keluhan Anda di sini..." required></textarea>

            <button type="submit">Kirim</button>
        </form>
    </main>
</body>
</html>