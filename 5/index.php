<?php 
//* Array
//Variable yang bisa di isi banyak nilai

//? cara buat array
$nama = ["kepo", "kepo2", "kepo3"];

//? 3 cara menampilkan semua data dalam array

var_dump($nama);
echo"<br>";

print_r($nama);
echo"<br>";

for ($i = 0; $i < count($nama); $i++){
    echo $nama[$i]."<br>";
}

//? Menampilan satu value saja
echo $nama[0]; 
?>

<h1>ARRAY aja</h1>