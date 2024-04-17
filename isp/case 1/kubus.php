<?php
include_once "sisi2D.php";
include_once "sisi3D.php";

class Kubus implements Shape2Dimension, Shape3Dimension {
    public function calculateArea(): void{
        echo "Menghitung Area <br>";
    }
    public function calculateVolume(): void{
        echo "Menghitung Volume <br>";
    }
}

?>