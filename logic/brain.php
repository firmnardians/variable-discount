<?php 
$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$countProduct = $_POST['countProduct'];

// Change discount price & percent
$disc = 10000;
$percent = 20;
// Change discount price & percent

$sumPrice = $productPrice * $countProduct;
$countDiscount = ($sumPrice * $percent) / 100;
$cheap = $sumPrice - $countDiscount;

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;

}
?>