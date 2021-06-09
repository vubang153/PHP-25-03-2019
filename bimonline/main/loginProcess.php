<?php
include("connect.php");
session_start();
$username = $_POST["accountName"];
$password = $_POST["password"];
$sql = "select * from khachhang where ten_dang_nhap ='".$username."' and mat_khau = '".$password."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$_SESSION["makhachhang"] = $row["ma_kh"];
$rowNumber = mysqli_num_rows($result);
$sql2 = "select * from admin where ten_dn ='".$username."' and mat_khau = '".$password."'";
$result2 = mysqli_query($con,$sql2);
$rowNumber2 = mysqli_num_rows($result2);
if ($rowNumber2 > 0) {
	$_SESSION["admin_username"] = $username;
	header("location: DanhSachBim.php");
}
elseif ($rowNumber > 0) {
	$_SESSION["username"] = $username;
	header("location: http://localhost/bimonline/index.php");
}
else {
	header("location: loginandreg.php?error=errorfailed");
}

?>