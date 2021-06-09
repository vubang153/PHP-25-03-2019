<meta charset="utf-8">
<?php
include("connect.php");
$updateMaBim = $_POST['updateMaBim'];
$updateMaLoai = $_POST['updateMaLoai'];
$updateTenBim = $_POST['updateTenBim'];
$updateGia = $_POST['updateGia'];
$updateMoTa = $_POST['updateMoTa'];
$updateTrangThai = $_POST['updateTrangThai'];
$sql = "update bim set ma_bim = '$updateMaBim', ma_loai='$updateMaLoai', 
	ten_bim ='$updateTenBim',gia='$updateGia',mo_ta = '$updateMoTa', trang_thai = '$updateTrangThai' where ma_bim = $updateMaBim";
mysqli_query($con, $sql);
header("location: DanhSachBim.php");
?>