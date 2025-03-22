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
            max-width: 400px;
            text-align: center;
        }
        h1 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        h2 {
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
        <h1>DATA ANDA SEDANG DI PROSES</h1>
        <h2>Nama: <?php echo htmlspecialchars($_POST['nama']); ?></h2>
        <h2>Alamat: <?php echo nl2br(htmlspecialchars($_POST['alamat'])); ?></h2>
        <h2>Tempat Lahir: <?php echo htmlspecialchars($_POST['tempatlahir']); ?></h2>
        <h2>Tanggal Lahir: <?php echo htmlspecialchars($_POST['tanggallahir']); ?></h2>
        <h2>Gender: <?php echo htmlspecialchars($_POST['gender']); ?></h2>
        <h2>Pendidikan: <?php echo htmlspecialchars($_POST['pendidikan']); ?></h2>
        <a href="index.php"><button>Kembali ke Form</button></a>
    </main>
</body>
</html>