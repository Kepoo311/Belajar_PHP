<?php
$masiss = [
    ["nis" => "8897", "nama" => "Andra", "jurusan" => "Teknik Informatika", "email" => "Kepo@gmail.com", "foto" => "andra.png"],
    ["nis" => "131", "nama" => "Goni", "jurusan" => "Teknik Industri", "email" => "goni@gmail.com", "foto" => "denis.png"],
    ["nis" => "2313", "nama" => "Rafi", "jurusan" => "Ilmu komputer", "email" => "rafi@gmail.com", "foto" => "paksi.png"]
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daptar Masis</h1>

    <ul>
        <?php foreach ($masiss as $m): ?>
            <li>
                <a
                    href="latihan2.php?nama=<?= $m["nama"]; ?>&nis=<?php echo $m["nis"]; ?>&jurusan=<?php echo $m["jurusan"]; ?>&email=<?php echo $m["email"]; ?>&foto=<?php echo $m["foto"]; ?>">
                    <?php echo $m["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>