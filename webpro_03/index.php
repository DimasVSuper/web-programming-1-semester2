<?php
    include 'variable.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 02</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        /* Styling untuk header pertama */
        .header-pertama {
            text-align: center;
            color: red;
            background-color: black;
            padding: 10px;
        }
        /* Styling untuk header kedua */
        .header-kedua {
            text-align: center;
            color: yellow;
            padding: 10px;
        }
    </style>
</head>
<body>
    <!-- <h1>Data Mahasiswa</h1>
    <table>
        <tr>
            <th>Field</th>
            <th>Data</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $datadimas['name']; ?></td>
        </tr> 
        <tr>
            <td>NIM</td>
            <td><?php echo $datadimas['NIM']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $datadimas['Alamat']; ?></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td><?php echo $datadimas['TTL']; ?></td>
        </tr>
        <tr>
            <td>Telp</td>
            <td><?php echo $datadimas['Telp']; ?></td>
        </tr>
    </table> -->
    <div class="header-pertama">
        <h1>Selamat hari raya idul fitri</h1>
    </div>
    <div class="header-kedua">
        <h1>Mohon maaf lahir dan batin</h1>
    </div>

    </div>
    <!-- <h1>Data Penjualan Mobil</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Merk Mobil</th>
            <th>Model</th>
            <th>Harga</th>
            <th>Jumlah Terjual</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Toyota</td>
            <td>Avanza</td>
            <td>Rp 200,000,000</td>
            <td>150</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Honda</td>
            <td>Brio</td>
            <td>Rp 180,000,000</td>
            <td>200</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Mitsubishi</td>
            <td>Xpander</td>
            <td>Rp 250,000,000</td>
            <td>120</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Suzuki</td>
            <td>Ertiga</td>
            <td>Rp 210,000,000</td>
            <td>100</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Daihatsu</td>
            <td>Sigra</td>
            <td>Rp 150,000,000</td>
            <td>180</td>
        </tr>
    </table> -->
    <h1>Data</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Tiket Kereta</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Azini</td>
            <td>KAI01</td>
            <td>jakarta</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Lisna</td>
            <td>KAI02</td>
            <td>Tangerang</td>
        </tr>
    </table>
</body>
</html>