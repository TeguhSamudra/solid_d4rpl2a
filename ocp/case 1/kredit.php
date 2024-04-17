<?php
include_once "TipePembayaran.php";

class Kredit implements TipePembayaran{
    public function memprosesPembayaran(): void{
        echo "Pembayaran dengan Kredit diproses. \n";
    }
}
?>