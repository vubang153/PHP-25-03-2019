<?php
include("connect.php");
$deleteId = $_GET['delete'];
$sql = "delete from bim where ma_bim = $deleteId";
mysqli_query($con, $sql);
header("location:DanhSachBim.php");
?>
