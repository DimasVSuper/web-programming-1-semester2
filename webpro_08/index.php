<!-- filepath: c:\xampp\htdocs\webpro8\index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelajaran Perulangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        main {
            padding: 20px;
        }
        section {
            margin-bottom: 30px;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #007bff;
        }
        pre {
            background: #f4f4f9;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Pembelajaran Perulangan (Looping)</h1>
    </header>
    <main>
        <!-- For Loop -->
        <section>
            <h2>For Loop</h2>
            <p>Perulangan yang digunakan untuk mengulang blok kode dengan batas yang jelas.</p>
            <pre>
&lt;?php
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i &lt;br&gt;";
}
?&gt;
            </pre>
            <p><strong>Output:</strong></p>
            <pre>
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i <br>";
}
?>
            </pre>
        </section>

        <!-- While Loop -->
        <section>
            <h2>While Loop</h2>
            <p>Perulangan yang akan terus berjalan selama kondisi bernilai <code>true</code>.</p>
            <pre>
&lt;?php
$i = 1;
while ($i <= 5) {
    echo "Perulangan ke-$i &lt;br&gt;";
    $i++;
}
?&gt;
            </pre>
            <p><strong>Output:</strong></p>
            <pre>
<?php
$i = 1;
while ($i <= 5) {
    echo "Perulangan ke-$i <br>";
    $i++;
}
?>
            </pre>
        </section>

        <!-- Do While Loop -->
        <section>
            <h2>Do While Loop</h2>
            <p>Perulangan yang akan dijalankan minimal satu kali sebelum kondisi dicek.</p>
            <pre>
&lt;?php
$i = 1;
do {
    echo "Perulangan ke-$i &lt;br&gt;";
    $i++;
} while ($i <= 5);
?&gt;
            </pre>
            <p><strong>Output:</strong></p>
            <pre>
<?php
$i = 1;
do {
    echo "Perulangan ke-$i <br>";
    $i++;
} while ($i <= 5);
?>
            </pre>
        </section>

        <!-- Foreach Loop -->
        <section>
            <h2>Foreach Loop</h2>
            <p>Perulangan yang digunakan untuk mengiterasi elemen dalam array.</p>
            <pre>
&lt;?php
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $item) {
    echo "Buah: $item &lt;br&gt;";
}
?&gt;
            </pre>
            <p><strong>Output:</strong></p>
            <pre>
<?php
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $item) {
    echo "Buah: $item <br>";
}
?>
            </pre>
        </section>
    </main>
</body>
</html>