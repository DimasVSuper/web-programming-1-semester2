<!-- filepath: c:\xampp\htdocs\webpro_05\proses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            background: #fff;
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
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Field</th>
            <th>Data</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo htmlspecialchars($_POST['nama']); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($_POST['email']); ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo htmlspecialchars($_POST['gender']); ?></td>
        </tr>
        <tr>
            <td>Komentar</td>
            <td><?php echo nl2br(htmlspecialchars($_POST['komentar'])); ?></td>
        </tr>
    </table>
</body>
</html>