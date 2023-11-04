<?php 
//cek apakah user bawa data nama
if (!isset($_GET["nama"]) ) {
    // jika tidak redirect ke latihan.php
    header("Location: latihan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>masis detail</h1>

    <ul>
        <li>
            <img src="imek/<?= $_GET["foto"] ?>" alt="">
        </li>
        <li>
            <?= $_GET["nis"] ?>
        </li>
        <li>
        <?= $_GET["nama"] ?>
        </li>
        <li>
        <?= $_GET["jurusan"] ?>
        </li>
        <li>
        <?= $_GET["email"] ?>
        </li>
    </ul>
    <a href="latihan.php">back</a>
</body>
</html>