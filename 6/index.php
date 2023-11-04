<h1>Associative array</h1>

<?php
$masiss = [
["nis" => "8897","nama" => "Andra","jurusan" => "Teknik Informatika","email" => "Kepo@gmail.com","foto" => "andra.png"], 
["nis" => "131","nama" => "Goni","jurusan" => "Teknik Industri","email" => "goni@gmail.com","foto" => "denis.png"], 
["nis" => "2313","nama" => "Rafi","jurusan" => "Ilmu komputer","email" => "rafi@gmail.com","foto" => "paksi.png"]
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
                <img src="imek/<?= $m["foto"] ?>" alt="">
            </li>
            <li>
                <?php echo $m["nis"]; ?>
            </li>
            <li>
                <?php echo $m["nama"]; ?>
            </li>
            <li>
                <?php echo $m["jurusan"]; ?>
            </li>
            <li>
                <?php echo $m["email"]; ?>
        </li>
        <br>
        <?php endforeach; ?>
    </ul>
</body>

</html>