<h1>ARRAY aja</h1>

<?php 
//* Array
//Variable yang bisa di isi banyak nilai

//? cara buat array
$nama = ["kepo", "kepo2", "kepo3"];

//? 3 cara menampilkan semua data dalam array
echo "<h1>Menampilkan array dengan var_dump</h1>";
var_dump($nama);
echo"<br>";

echo "<h1>Menampilkan array dengan print_r</h1>";
print_r($nama);
echo"<br>";

echo "<h1>Menampilkan array dengan for loop</h1>";
for ($i = 0; $i < count($nama); $i++){
    echo $nama[$i]."<br>";
}

echo "<h1>Menampilkan array dengan foreach loop</h1>";
foreach ($nama as $k => $v) {
    echo $k."<br>";
}
//? Menampilan satu value saja
echo "<h1>Menampilkan 1 value dari array</h1>";
echo $nama[0]; 

//* Menambahkan value
echo "<h1>Menampilkan array dengan data yang di tambahkan</h1>";
$nama[] = "rafi";
for ($i = 0; $i < count($nama); $i++){
    echo $nama[$i]."<br>";
}
?>