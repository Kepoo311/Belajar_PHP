<?php 
//** Sintax Php

// * Standard Output
// *? echo,print
// *? print_r
// *? var_dump

//* Macam Macam Penulisan Php
// *? PHP di dalam HTML (reccomend)
// *? HTML di dalam PHP (not reccomend)

// * Variable Dan Tipe Data

// * Variable
// * Tidak boleh di awali oleh angka
$nama = "Kepodev";

// * Operator
// *? Aritmatika

// *? Penggabung String / concat (.)
// * Contoh
$depan = "Aku";
$blkg = "Kamu";
echo $depan . " Dan " . $blkg;

// * Assigment
// =, -=, +=, *=, /=, %=, .=

// * Perbandingan
// <, >, <=, >=, ==

// * Identitas
// ===, !==

// * Logika
// &&, ||, !

?>
<!-- PHP Di dalam HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Halo World</h1>
    <?php echo "Hello HTML From PHP"; ?>

    <!-- HTML dalam PHP -->
    <?php echo "<h1>Hello Php From HTML</h1>"; ?>

    <!-- pemanggilan variable -->
    <?php echo $nama;?>
</body>

</html>