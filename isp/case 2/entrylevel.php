<?php
include_once "cetak.php";

class PrinterEntryLevel implements FiturCetak {
    public function terimaCetak(): void{
        echo "Cetak <br>";
    }

}

?>