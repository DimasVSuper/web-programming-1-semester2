<?php
include 'logika.php'; // Pastikan logika.php berisi data atau fungsi yang diperlukan

// Data struk
$struk = [
    [
        'kode_barang' => 'BRG001',
        'nama_barang' => 'Sabun Mandi',
        'jumlah_beli' => 2,
        'harga_barang' => 15000,
        'total_bayar' => 30000
    ],
];

// Ambil input uang bayar dari form
$uang_bayar = $_POST['uang_bayar'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Alfamart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .struk-item {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .struk-item:hover {
            background-color: #f1f1f1;
        }
        .struk-item h3 {
            margin: 0 0 10px;
            color: #007bff;
        }
        .struk-item p {
            margin: 5px 0;
        }
        .form-input {
            margin-top: 10px;
        }
        .form-input input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-input button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-input button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Struk Pembayaran Alfamart</h1>

    <div class="struk-list">
        <?php foreach ($struk as $item): 
            $kode = $item['kode_barang'];
            $input_bayar = $uang_bayar[$kode] ?? '';
            $kembalian = is_numeric($input_bayar) ? $input_bayar - $item['total_bayar'] : null;
        ?>
        <div class="struk-item">
            <h3>Kode Barang: <?= $kode ?></h3>
            <p><strong>Nama Barang:</strong> <?= $item['nama_barang'] ?></p>
            <p><strong>Jumlah Beli:</strong> <?= $item['jumlah_beli'] ?></p>
            <p><strong>Harga Barang:</strong> Rp <?= number_format($item['harga_barang'], 0, ',', '.') ?></p>
            <p><strong>Total Bayar:</strong> Rp <?= number_format($item['total_bayar'], 0, ',', '.') ?></p>

            <!-- Form -->
            <div class="form-input">
                <form method="POST">
                    <label for="uang_bayar_<?= $kode ?>">Masukkan Uang Bayar:</label>
                    <input 
                        type="number" 
                        id="uang_bayar_<?= $kode ?>" 
                        name="uang_bayar[<?= $kode ?>]" 
                        value="<?= htmlspecialchars($input_bayar) ?>" 
                        required
                    >
                    <button type="submit">Kirim</button>
                </form>
            </div>

            <?php if ($kembalian !== null): ?>
                <p><strong>Uang Kembali:</strong> Rp <?= number_format($kembalian, 0, ',', '.') ?></p>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>