<?php
$commentContent = $_POST["comment-content"];
$username = $_GET["user"];
$ma_bim = $_GET["ma_bim"];
include("connect.php");
$sql = "select ma_kh from khachhang where ten_dang_nhap ='$username'";
$result = mysqli_query($con,$sql);
$row =mysqli_fetch_assoc($result);
$user_id = $row["ma_kh"];
mysqli_query($con,"insert into binh_luan(comment_content,ma_bim,ma_kh) values('$commentContent','$ma_bim','$user_id')");
header("location: http://localhost/bimonline/main/ProductInfo.php?id=$ma_bim")
?>