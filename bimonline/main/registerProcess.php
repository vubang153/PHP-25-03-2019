<?php
include("connect.php");
$user_accountName = $_POST["user_accountName"];
echo $user_accountName;
$user_firstName = $_POST["user_firstName"];
echo $user_firstName;
$user_password = $_POST["user_password"];
echo $user_password;
$thangsinh = $_POST["thangsinh"];
$ngaysinh = $_POST["ngaysinh"];
$namsinh = $_POST["namsinh"];
$gioitinh = 1;
$diachi = $_POST["user_address"];
$user_phoneNumber = $_POST["user_phoneNumber"];
$user_email = $_POST["user_email"];
$select_sql = "select * from khachhang where ten_dang_nhap ='".$user_accountName."'";
$result = mysqli_query($con,$select_sql);
$rowNumber = mysqli_num_rows($result);

if ($rowNumber > 0) {
	header("location: registerForm.php?error=registerfailed");
}
else {
	$insert_sql = "insert into khachhang(ten_dang_nhap,mat_khau,ho_va_ten,thang_sinh,ngay_sinh,nam_sinh,gioi_tinh,so_dien_thoai,email,dia_chi) values('$user_accountName','$user_password','$user_firstName','$thangsinh','$ngaysinh','$namsinh','$gioitinh','$user_phoneNumber','$user_email','$diachi')";
	mysqli_query($con,$insert_sql);
	header("location: registerSuccess.php?user=$user_accountName");
}

?>