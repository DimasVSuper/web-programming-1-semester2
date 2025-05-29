<?php
// Memeriksa apakah request menggunakan metode POST dan input 'ulang' dikirim dengan nilai 'Y'
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ulang']) && strtoupper($_POST['ulang']) === 'Y') {
    // Mengarahkan pengguna kembali ke halaman form pendaftaran
    header("Location: /webpro_06quizA/view/quiz_A_19240384.php");
    exit; // Menghentikan eksekusi script setelah redirect
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> <!-- Menentukan karakter encoding halaman -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur tampilan responsif -->
    <title>Form Pendaftaran Mahasiswa Baru 2025 - UBSI Cengkareng</title> <!-- Judul halaman -->
    <link rel="stylesheet" href="/webpro_06quizA/style/quiz_A.css"> <!-- Menyertakan file CSS untuk styling -->
</head>
<body>
    <h2>Form Pendaftaran Mahasiswa Baru 2025<br>UBSI Cengkareng</h2> <!-- Judul form -->
    <form action="view/quiz_AA_19240384.php" method="post"> <!-- Form untuk mengirim data ke halaman lain -->
        <label for="nik" class="required">Input NIK:</label><br> <!-- Label untuk input NIK -->
        <input type="text" id="nik" name="nik" pattern="\d+" title="Hanya boleh memasukkan angka" required><br> <!-- Input NIK dengan validasi angka -->

        <label for="nama" class="required">Input Nama:</label><br> <!-- Label untuk input Nama -->
        <input type="text" id="nama" name="nama" required><br> <!-- Input Nama -->

        <label for="alamat" class="required">Input Alamat:</label><br> <!-- Label untuk input Alamat -->
        <input type="text" id="alamat" name="alamat" required><br> <!-- Input Alamat -->

        <label class="required">Jenis Kelamin:</label><br> <!-- Label untuk input Jenis Kelamin -->
        <div class="radio-group"> <!-- Grup radio button untuk memilih jenis kelamin -->
            <input type="radio" id="laki" name="jenis_kelamin" value="Laki-Laki" required> <!-- Pilihan Laki-Laki -->
            <label for="laki">Laki-Laki</label>

            <input type="radio" id="perempuan" name="jenis_kelamin" value="Wanita"> <!-- Pilihan Wanita -->
            <label for="perempuan">Wanita</label>
        </div>
        <label for="tgl_lahir" class="required">Input Tgl Lahir:</label><br> <!-- Label untuk input Tanggal Lahir -->
        <input type="date" id="tgl_lahir" name="tgl_lahir" required><br> <!-- Input Tanggal Lahir -->

        <label for="prodi" class="required">Input Program Studi:</label><br> <!-- Label untuk input Program Studi -->
        <select name="prodi" id="prodi" required> <!-- Dropdown untuk memilih Program Studi -->
            <option value="" disabled selected>--Pilih Program Studi--</option> <!-- Placeholder dropdown -->
            <option value="10">Informatika</option> <!-- Pilihan Informatika -->
            <option value="11">Akuntansi</option> <!-- Pilihan Akuntansi -->
            <option value="12">Sistem Informasi</option> <!-- Pilihan Sistem Informasi -->
            <option value="13">Manajemen</option> <!-- Pilihan Manajemen -->
            <option value="14">Public Relation</option> <!-- Pilihan Public Relation -->
        </select><br><br>

        <input type="submit" value="Kirim"> <!-- Tombol untuk mengirim form -->
    </form>
    <p class="catatan">* Kolom dengan tulisan merah wajib diisi.</p> <!-- Catatan untuk pengguna -->
</body>
</html>
