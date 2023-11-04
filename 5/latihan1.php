<?php
$angka = [1,2,3,4,5,6,7,8];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .kotak {
        width: 100px;
        height: 100px;
        background-color: salmon;
        text-align: center;
        margin: 3px;
        border: 1px;
        float: left;
        line-height: 100px;
        font-size: 80px;
    }

    .clear{
        clear: both;
    }
    </style>
</head>

<body>
    <?php for($i = 0; $i < count($angka); $i++): ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach($angka as $a): ?>
    <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>
</body>

</html>