<?php
include_once "dbmsconnect.php";
include_once "dbms.php";
include_once "mysql.php";
include_once "mongodb.php";

$mysql = new MySQL();
$mongodb = new MongoDB();

$dbmsConnection = new DBMSConnection();
$dbmsConnection->connect($mysql);
$dbmsConnection->connect($mongodb);
?>
