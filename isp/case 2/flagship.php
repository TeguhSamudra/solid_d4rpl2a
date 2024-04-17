<?php
include_once "cetak.php";
include_once "scan.php";
include_once "fax.php";

class PrinterFlagship implements FiturCetak, FiturScan, FiturFax {
    public function terimaCetak(): void{
        echo "Cetak <br>";
    }
    public function scanKertas(): void{
        echo "Scaning <br>";
    }
    public function terimaFax(): void{
        echo "Kirim Dokumen <br>";
    }

}

?>