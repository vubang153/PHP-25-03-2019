<?php
include("connect.php");
$maLoai = $_POST['maLoai'];
$tenBim = $_POST['tenBim'];
$giaBim = $_POST['giaBim'];
$productDescribe = $_POST['productDescribe'];
$anh_san_pham = $_FILES['anh-san-pham']['name'];
echo $anh_san_pham; 
        if (isset($_FILES['anh-san-pham']))
        {
            if ($_FILES['anh-san-pham']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }
            else{
                move_uploaded_file($_FILES['anh-san-pham']['tmp_name'], '../upload/'.$_FILES['anh-san-pham']['name']);
                echo 'File Uploaded';
            }
        }
$sql = "insert into bim(ma_loai,ten_bim,gia,mo_ta,hinh_anh) values('$maLoai', '$tenBim', '$giaBim', '$productDescribe','$anh_san_pham')";
mysqli_query($con, $sql);
mysqli_close($con);
header("location: ThemMoiBim.php");

?>