<?php
include_once "persegi.php";
include_once "kubus.php";

echo "Persegi <br>";
$duadimensi = new Persegi2();
$duadimensi->calculateArea();

echo "Kubus <br>";
$tigadimensi = new Kubus();
$tigadimensi->calculateArea();
$tigadimensi->calculateVolume();




?>