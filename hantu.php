<?php
// Load file XML
$xml = simplexml_load_file("data_hantu.xml") or die("Gagal membuka file XML!");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Hantu Nusantara</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #1c1c1c;
            color: #fff;
            text-align: center;
        }
        h1 {
            color: #ff4444;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background: #2b2b2b;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #444;
        }
        th {
            background: #ff4444;
            color: white;
        }
        tr:hover {
            background: #333;
        }
    </style>
</head>
<body>
    <h1>👻 Data Hantu Nusantara & Dunia 👻</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Jenis</th>
            <th>Kisah</th>
        </tr>
        <?php foreach ($xml->hantu as $h): ?>
        <tr>
            <td><?= $h['id']; ?></td>
            <td><?= $h->nama; ?></td>
            <td><?= $h->asal; ?></td>
            <td><?= $h->jenis; ?></td>
            <td><?= $h->kisah; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
