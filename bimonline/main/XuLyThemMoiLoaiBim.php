<?php
include("connect.php");
$maLoai = $_POST['maLoaiBim'];
$tenBim = $_POST['tenLoaiBim'];
$sql = "insert into loai_bim(ma_loai,ten_loai) values('$maLoai', N'$tenBim')";
mysqli_query($con, $sql);
mysqli_close($con);
header("location: ThemMoiLoaiBim.php");