<?php
include_once "mobil.php";
include_once "mobilListrik.php";

$mobilbbm = new Mobil();
$mobillistrik = new MobilListrik();

echo "Mobil Menggunakan Bensin <br>";
$mobilbbm->menggunakanBBM();

echo "<br>Mobil Menggunakan Listrik <br>";
$mobillistrik->menggunakanBaterai();

?>