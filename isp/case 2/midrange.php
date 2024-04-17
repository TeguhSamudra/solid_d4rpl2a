<?php
include_once "cetak.php";
include_once "scan.php";

class PrinterMidRange implements FiturCetak, FiturScan {
    public function terimaCetak(): void{
        echo "Cetak <br>";
    }
    public function scanKertas(): void{
        echo "Scaning <br>";
    }

}

?>