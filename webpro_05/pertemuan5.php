<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5</title>
    <style>
        /* Reset & global */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Form container */
form {
    background-color: #ffffff;
    padding: 30px 40px;
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

/* Label */
label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333333;
}

/* Input */
input[type="number"],
input[type="text"] {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 20px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    transition: 0.3s;
}

input[type="number"]:focus,
input[type="text"]:focus {
    border-color: #007ACC;
    outline: none;
}

/* Tombol Submit */
input[type="submit"] {
    width: 100%;
    background-color: #007ACC;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #005f99;
}

    </style>
</head>
<body>
    <form action="latihan5.php" method="post">
        <label for="nim">Masukkan NIM:</label>
        <input type="number" id="nim" name="nim" placeholder="Masukkan NIM Anda" required>
        
        <br>
        <label for="nama">Masukan NAMA: </label>
        <input type="text" id="nama" name="nama" placeholder="Masukan NAMA Anda" required>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>