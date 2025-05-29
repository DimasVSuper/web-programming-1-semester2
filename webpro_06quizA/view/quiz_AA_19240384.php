<?php
require_once '../controllers/PendaftaranHandler.php'; // Memanggil handler untuk memproses data pendaftaran
require_once '../models/Pendaftaran.php'; // Memanggil model Pendaftaran untuk memvalidasi dan menyimpan data
require_once '../database/database.php'; // Memanggil koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Memeriksa apakah request menggunakan metode POST
    try {
        // Buat instance dari class Pendaftaran untuk memproses data dari form
        $pendaftaran = new Pendaftaran($_POST);

        // Proses pendaftaran menggunakan handler
        $handler = new PendaftaranHandler($conn);
        $message = $handler->prosesPendaftaran($_POST); // Menyimpan data ke database

        echo $message; // Menampilkan pesan sukses atau error
    } catch (Exception $e) {
        die($e->getMessage()); // Menampilkan pesan error jika terjadi exception
    }
} else {
    echo "Halaman ini hanya dapat diakses melalui metode POST."; // Menampilkan pesan jika request bukan POST
    exit; // Menghentikan eksekusi script
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> <!-- Menentukan karakter encoding halaman -->
    <title>Output Pendaftaran</title> <!-- Judul halaman -->
    <link rel="stylesheet" href="/webpro_06quizA/style/quiz_AA.css"> <!-- Menyertakan file CSS untuk styling -->
</head>
<body>
    <div class="container">
        <h2>***Selamat Datang Di Kampus UBSI Cengkareng***</h2> <!-- Judul halaman -->
        <hr>
        <!-- Menampilkan data pendaftaran -->
        <div class="field"><strong>NIK:</strong> <span class="blue"><?= htmlspecialchars($pendaftaran->nik) ?></span></div> <!-- Menampilkan NIK -->
        <div class="field"><strong>Nama:</strong> <span class="blue"><?= htmlspecialchars($pendaftaran->nama) ?></span></div> <!-- Menampilkan Nama -->
        <div class="field"><strong>Alamat:</strong> <span class="blue"><?= htmlspecialchars($pendaftaran->alamat) ?></span></div> <!-- Menampilkan Alamat -->
        <div class="field"><strong>Jenis Kelamin:</strong> <span class="blue"><?= htmlspecialchars($pendaftaran->jenis_kelamin) ?></span></div> <!-- Menampilkan Jenis Kelamin -->
        <div class="field"><strong>Tanggal Lahir:</strong> <span class="blue"><?= htmlspecialchars($pendaftaran->tgl_lahir) ?></span></div> <!-- Menampilkan Tanggal Lahir -->
        <div class="field"><strong>Program Studi Yang Dipilih:</strong> <span class="blue"><?= htmlspecialchars($pendaftaran->program_studi) ?></span></div> <!-- Menampilkan Program Studi -->

        <!-- Form untuk input ulang -->
        <div class="ulang-form">
            <form method="post" action="/webpro_06quizA/view/quiz_A_19240384.php"> <!-- Mengarahkan ke halaman form -->
                <label>Mau Input Lagi? Ketik <strong>Y</strong> :</label> <!-- Label untuk input ulang -->
                <input type="text" name="ulang" maxlength="1" required> <!-- Input untuk mengetik 'Y' -->
                <button type="submit">Submit</button> <!-- Tombol submit -->
            </form>
        </div>
    </div>
</body>
</html>
