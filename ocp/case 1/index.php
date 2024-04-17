<?php
include_once "customerPay.php";
include_once "debit.php";
include_once "kredit.php";
include_once "cash.php";

$payment = new PembayaranCustomer();
$debit = new Debit();
$kredit = new Kredit();
$cash = new Cash();

$payment->menerimaPembayaran($debit);
$payment->menerimaPembayaran($kredit);
$payment->menerimaPembayaran($cash);
?>