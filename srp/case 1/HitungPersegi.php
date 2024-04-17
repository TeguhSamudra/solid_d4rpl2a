<?php
include_once "Persegi.php";

class PenghitungPersegi{
    public function hitungLuas(Persegi $persegi) : int{
        $sisi = $persegi->getSisi();
        return $sisi * $sisi;
    }
}

?>