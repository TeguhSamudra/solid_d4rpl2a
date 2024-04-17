<?php
include_once "kendaraanBensin.php";

class Mobil implements KendaraanBensin {
    public function menggunakanBBM() :void{
        echo "Menggunakan Bensin";
    }
}

?>