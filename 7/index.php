<?php
//* Variable scope / lingkup variable

$x = 20;

function test(){
    global $x; // untuk mengambil variable di luar funct
    echo $x;
}
test();

//* var superglobal
//? $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIES, $_SERVER, $_ENV

?>