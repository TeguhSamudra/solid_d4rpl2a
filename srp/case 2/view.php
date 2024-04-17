<?php
include_once "mahasiswa.php";

class MahasiswaView {
    public function showMahasiswa(Mahasiswa $mhs): void {
        echo "NIM: " . $mhs->getNim() . "<br>";
        echo "Nama: " . $mhs->getNama() . "<br>";
    }
}
?>
