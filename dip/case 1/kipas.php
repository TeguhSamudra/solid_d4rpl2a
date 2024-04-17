<?php
include_once "Elektronik.php";

class KipasAngin implements BarangElektronik{
    public function beroperasi(): void{
        echo "berputar";
    }
    public function berhenti(): void{
        echo "berhenti berputar";
    }
}
?>