<?php
include_once "vgm.php";

class WhatsApp implements VideoGroupManager {
    public function chat() {
        echo "Halo <br>";
    }

    public function sendPhotosAndVideos() {
        echo "kirim jawaban <br>";
    }

    public function callGroupVideo() {
        echo "Berbunyi kecuali sedang offline <br>";
    }
}

?>
