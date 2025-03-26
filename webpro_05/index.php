<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="style.css">
</head>
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
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    text-align: left;
    font-weight: bold;
    color: #555;
}

input, textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
    width: 100%;
    box-sizing: border-box;
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
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}
</style>
<body>
    <main>
        <h1>Saran Anda Sangat Penting bagi Kami!</h1>
        <form action="proses.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

            <label for="keluhan">Keluhan:</label>
            <textarea id="keluhan" name="keluhan" placeholder="Tulis keluhan Anda di sini..." required></textarea>

            <button type="submit">Kirim</button>
        </form>
    </main>
</body>
</html>