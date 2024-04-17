<?php
include_once "Elektronik.php";

class Lampu implements BarangElektronik{
    public function beroperasi(): void{
        echo "Menyala";
    }
    public function berhenti(): void{
        echo "Padam";
    }
}
?>