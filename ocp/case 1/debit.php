<?php
include_once "TipePembayaran.php";

class Debit implements TipePembayaran{
    public function memprosesPembayaran(): void{
        echo "Pembayaran dengan Debit diproses. \n";
    }
}
?>