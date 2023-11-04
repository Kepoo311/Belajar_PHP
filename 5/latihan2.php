<?php
$masis = ["8897", "Andra", "Teknik Informatika", "Kepo@gmail.com"];
$masiss = [["8897", "Andra", "Teknik Informatika", "Kepo@gmail.com"], ["8897", "Andra1", "Teknik Informatika", "Kepo@gmail.com"], ["8897", "Andra2", "Teknik Informatika", "Kepo@gmail.com"]];
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
        <?php foreach ($masis as $m): ?>
            <li>
                <?php echo $m; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php foreach ($masiss as $m): ?>
        <ul>
        <?php foreach ($m as $b): ?>
            <li>
                <?php echo $b; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>

</html>