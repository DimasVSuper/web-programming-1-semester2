<?php
// Ambil data dari form
$nilai1 = isset($_POST['nilai1']) ? (float) $_POST['nilai1'] : 0;
$nilai2 = isset($_POST['nilai2']) ? (float) $_POST['nilai2'] : 0;
$rumus = isset($_POST['rumus']) ? $_POST['rumus'] : '';

// Hitung hasil berdasarkan rumus yang dipilih
$hasil = 0;
if ($rumus === 'segitiga') {
    $hasil = 0.5 * $nilai1 * $nilai2; // Rumus luas segitiga
} elseif ($rumus === 'persegi_panjang') {
    $hasil = $nilai1 * $nilai2; // Rumus luas persegi panjang
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        main {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h1 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1rem;
            margin-bottom: 10px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <main>
        <h1>Hasil Perhitungan</h1>
        <p><strong>Nilai 1:</strong> <?php echo htmlspecialchars($nilai1); ?></p>
        <p><strong>Nilai 2:</strong> <?php echo htmlspecialchars($nilai2); ?></p>
        <p><strong>Rumus yang Dipilih:</strong> <?php echo htmlspecialchars($rumus === 'segitiga' ? 'Segitiga' : 'Persegi Panjang'); ?></p>
        <p><strong>Hasil:</strong> <?php echo htmlspecialchars($hasil); ?></p>
        <a href="index.php"><button>Kembali ke Form</button></a>
    </main>
</body>
</html>