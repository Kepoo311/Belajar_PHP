<?php
// TODO: BUILT IN FUNCT (fungsi yang di sediakan oleh php)
// *? Fungsi yang berhubungan dengan waktu

//* menampilkan tanggal
echo date("l,d-M-Y");
echo "<br>";

//* time
// unix timestamp
echo time();
echo "<br>";

//* mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// mktime(jam,menit,detik,bulan,tanggal,tahun)
echo mktime(0,0,0,5, 1, 2007);
echo "<br>";
// Melihat hari pada tanggal itu
echo date("l", mktime(0,0,0,5, 1, 2007));
echo "<br>";

//* strtotime
// merubah tanggal menjadi detik
echo strtotime("01 may 2007");
echo "<br>";

// *? fungsi yang berhubungan dengan string
// strlen() untuk mendapatkan panajng string
$test = "Kepo Ganteng";
echo strlen($test); // output : 12
echo "<br>";

//strcmp()
// untuk membandingkan string
// * Returns -1 if string1 is less than string2; 1 if string1 is greater than string2, and 0 if they are equal.
$kata1 = "kepo";
$kata2 = "kepo2";
echo strcmp($kata1, $kata2); // return -1 (not equal)
echo "<br>";

// explode()
// memecah string menjadi array
// explode(pemisah katanya, string yang mau di explode)
$katakata = "kepo suka kamu";
$pisahin = explode(" ", $katakata);
echo $pisahin[0]; // output kepo

echo "<br>";

$katakata1 = "kepo:suka kamu";
$pisahin1 = explode(":", $katakata1);
echo $pisahin1[1]; // output suka kamu
echo "<br>";
// htmlspecialchars()
// merubah character special menjadi html

// *? fungsi yang berhungan dengna utility
// var_dump()
// menampilkan informasi tambahan, berupa tipedata dan panjang nya
$kataku = "string dong";
echo var_dump($kataku); // output string(11) "string dong"
echo"<br>";

// isset()
// berstatus true jika variable tidak bernilai null
$sgh = "apa tah";
if (isset($sgh)) {
    echo "di print karna var tidak null";
}
$sgh1 = null;
if (isset($sgh1)) {
    echo "tidak di print karna var null";
}
echo "<br>";

// empty()
// untuk menentukan apa var kosong/tidak
$emti = 0;
if (empty($emti)) {
    echo"di print karna var bernilai 0 / kosong / tidak di set";
}

// die()
// untuk menstop program

// sleep()
// untuk mendelay program

// todo User-defined Funct (fungsi yang di buat oleh kita sendiri)
?>

<h1>Pertuman 4</h1>
<p>function 1!</p>