<?php
include_once "sosmed.php";
include_once "vgm.php";
include_once "pmm.php";
include_once "whatsapp.php";
include_once "instagram.php";

$whatsapp = new WhatsApp();
$instagram = new Instagram();

echo "Menggunakan WhatsApp: <br>";
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();

echo "<br>Menggunakan Instagram: <br>";
$instagram->chat();
$instagram->sendPhotosAndVideos();
$instagram->publishPost();

?>
