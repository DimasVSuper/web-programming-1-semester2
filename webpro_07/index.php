<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus</title>
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
        }
        h1 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        td, th {
            padding: 10px;
            border: 1px solid #ddd; /* Menambahkan garis pada tabel */
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
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <main>
        <h1>Rumus Persegi Panjang dan Segitiga</h1>
        <form action="proses.php" method="post">
            <table>
                <tr>
                    <td><label for="nilai1">Nilai 1:</label></td>
                    <td><input type="number" id="nilai1" name="nilai1" placeholder="Masukkan Nilai 1" required></td>
                </tr>
                <tr>
                    <td><label for="nilai2">Nilai 2:</label></td>
                    <td><input type="number" id="nilai2" name="nilai2" placeholder="Masukkan Nilai 2" required></td>
                </tr>
                <tr>
                    <td>Pilih Rumus:</td>
                    <td>
                        <label><input type="radio" name="rumus" value="segitiga" required> Segitiga</label><br>
                        <label><input type="radio" name="rumus" value="persegi_panjang" required> Persegi Panjang</label>
                    </td>
                </tr>
            </table>
            <button type="submit">Hitung</button>
        </form>
    </main>
</body>
</html>