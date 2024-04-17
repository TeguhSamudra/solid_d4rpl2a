<?php
include_once "view.php";

$mahasiswa = new Mahasiswa("2205029", "Teguh Samudra SB");
$viewmhs = new MahasiswaView();
echo "Informasi Mahasiswa :";
echo "<br>";
$viewmhs->showMahasiswa($mahasiswa);
?>
