<?php
function greet($nama){
    date_default_timezone_set('Asia/Jakarta');
    if(date("H") < "12"){
        return "$nama, Selamat Pagi";
    } else if(date("H") < "16"){
        return "$nama, Selamat Siang";
    } else {
        return "$nama, Selamat Sore";
    }
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
    <h1>Hello <?= greet("Andraa"); ?></h1>
    <p>Jam : <?php echo date("H:i:s");?> </p>
</body>

</html>