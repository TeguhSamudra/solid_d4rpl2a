<?php
include_once "HitungPersegi.php";

$persegi = new Persegi(4);

$hitung = new PenghitungPersegi();
echo "hasilnya : ". $hitung->hitungLuas($persegi)
?>