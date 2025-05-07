<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Data</title>
    <link rel="stylesheet" href="style.css">
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
            max-width: 500px;
            text-align: center;
        }
        h1 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            text-align: center;
            background-color: #007bff;
            color: white;
            border: 1px solid #ddd;
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
        <h1>DATA ANDA SEDANG DI PROSES</h1>
        <table>
            <tr><th colspan="2">DATA ANDA</th></tr>
            <tr>
                <th>Field</th>
                <th>Data</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo htmlspecialchars($_POST['nama']); ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo nl2br(htmlspecialchars($_POST['alamat'])); ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?php echo htmlspecialchars($_POST['tempatlahir']); ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?php echo htmlspecialchars($_POST['tanggallahir']); ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo htmlspecialchars($_POST['gender']); ?></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td><?php echo htmlspecialchars($_POST['pendidikan']); ?></td>
            </tr>
        </table>
        <a href="index.php"><button>Kembali ke Form</button></a>
    </main>
</body>
</html>