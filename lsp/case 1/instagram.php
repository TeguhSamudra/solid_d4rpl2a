<?php
include_once "pmm.php";

class Instagram implements PostMediaManager {
    public function chat() {
        echo "Ping <br>";
    }

    public function sendPhotosAndVideos() {
        echo "Unggah foto dan video <br>";
    }

    public function publishPost() {
        echo "Unggah <br>";
    }
}
?>
