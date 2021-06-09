<meta charset="utf-8">
<?php
include("connect.php");
$updateMaBim = $_POST['txtMaLoaiBim'];
$updateMaLoai = $_POST['txtTenLoaiBim'];
$sql = "update loai_bim set ma_loai = '$updateMaBim', ten_loai ='$updateMaLoai' where ma_loai = $updateMaBim";
mysqli_query($con, $sql);
header("location: DanhSachSanPham.php");
?>