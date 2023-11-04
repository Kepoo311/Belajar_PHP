<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<!-- check jika data nama sudah di input -->
<?php if(isset($_POST["nama"])): ?>
    <h1>Halo <?= $_POST["nama"]; ?>
    </h1>
<?php endif; ?>

    <!-- data yang di input akan di kirim ke halaman ini  -->
    <form action="" method="post">
        input oii
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Submit!</button>
    </form>

    <!-- data yang di inputkan di kirim ke latihan4.php -->
    <form action="latihan4.php" method="post">
        input oii
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Submit!</button>
    </form>
</body>

</html>