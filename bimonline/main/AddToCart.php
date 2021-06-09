<?php
session_start();
$id = $_GET["id"];
$quantity =  0 ;
$soluong  = $_POST["quantity"];
if (isset($_SESSION['cart'][$id])) {
	$quantity = $_SESSION["cart"][$id]+ $soluong;
}
else {
	$quantity  =$soluong;
}
$_SESSION["cart"][$id] = $quantity;
header("location: http://localhost/bimonline/main/Cart.php");


?>