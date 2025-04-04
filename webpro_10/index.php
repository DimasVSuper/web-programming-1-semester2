<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Tanggal</title>
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
            flex-direction: column;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #0056b3;
        }
        #hasilTanggal {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
        h1 {
            font-size: 24px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <h1>Menampilkan Tanggal Saat Ini</h1>
    <button onclick="tampilkanTanggal()">Tampilkan Tanggal</button>
    <p id="hasilTanggal"></p>

    <script src="javascript.php"></script>
</body>
</html>
