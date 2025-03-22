<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
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
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea, select {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }
        textarea {
            resize: none;
            height: 100px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .radio-group {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <main>
        <h1>Formulir</h1>
        <form action="proses.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" placeholder="Masukkan alamat Anda" required></textarea>

            <label for="tempatlahir">Tempat Lahir:</label>
            <input type="text" id="tempatlahir" name="tempatlahir" placeholder="Masukkan tempat lahir Anda" required>

            <label for="tanggallahir">Tanggal Lahir:</label>
            <input type="date" id="tanggallahir" name="tanggallahir" required>

            <label>Gender:</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="Laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="gender" value="Perempuan" required> Perempuan</label>
            </div>

            <label for="pendidikan">Pendidikan:</label>
            <select id="pendidikan" name="pendidikan" required>
                <option value="">-- Pilih Pendidikan --</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="Diploma">Diploma</option>
                <option value="Sarjana">Sarjana</option>
                <option value="Magister">Magister</option>
                <option value="Doktor">Doktor</option>
            </select>

            <button type="submit">Kirim</button>
        </form>
    </main>
</body>
</html>