<?php
include_once("connect.php");	
session_start();
$orderdate = "CURDATE()";
$email = $_POST["order_email"];
$orderdatephp = date('Y-m-d H:i:s');
$tennguoinhan = $_POST["ten_nguoi_nhan"];
$sodienthoai = $_POST["order_phone_number"];
$diachi = $_POST["order_address"];
$makhachhang = $_SESSION["makhachhang"];
$totalprice = $_SESSION["totalprice"];
$status = 0;
$sql = "insert into dondathang(ma_kh,ngay_dat,noi_giao,trang_thai,tong_tien) values('$makhachhang',$orderdate,'$diachi','$status','$totalprice')";
mysqli_query($con,$sql);
$lastid = mysqli_insert_id($con);
foreach ($_SESSION["cart"] as $k => $v) {
	$ma_bim = $k;
	$quantity = $v;
	$result = mysqli_query($con,"select gia from bim where ma_bim = '$ma_bim'");
	$row = mysqli_fetch_array($result);
	$price = $row["gia"];
	$sqldetail = "insert into ct_dondathang(ma_dh,ma_bim,gia_tien,sl_dat) values('$lastid','$k','$price','$v')";
	mysqli_query($con,$sqldetail);
}
require '../lib/PHPMailerAutoload.php'; //add file trong thu vien

//lay cac gia tri tu form len
$from = "vubang151@gmail.com";
$to = $email;
$subject = "Bimonline Delivery's";
$body ="<div style='width: 100%;height: 30px;'>
	<font color='red'>Xin chào ! Bạn đã đặt hàng ở Bimonline</font>
</div>
<table border='1' style='width: 600px;height: 300px;border-collapse: collapse;text-align: left;'>
	<tr>
		<th>Mã đơn hàng</th>
		<td>".$lastid."</td>
	</tr>
	<tr>
		<th>Trạng thái đơn hàng</th>
		<td>Chưa giao</td>
	</tr>
	<tr>	
		<th>Tên người nhận</th>
		<td>".$tennguoinhan."</td>
	</tr>
	<tr>
		<th>Thời gian đặt</th>
		<td>".date('Y-m-d H:i:s')."</td>
	</tr>
	<tr>
		<th>Số điện thoại</th>
		<td>".$sodienthoai."</td>
	</tr>
	<tr>
		<th>Địa chỉ</th>
		<td>".$diachi."</td>
	</tr>
	<tr>
		<th>Tổng tiền</th>
		<td>".$totalprice."</td>
	</tr>
</table>
";

$mail = new PHPMailer();
$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);

//thiet lap cac tham so de gui mail
$mail->Username = "vubang151@gmail.com";
$mail->Password = "01658095491";
$mail->SetFrom($from);
$mail->Subject = $subject;
$mail->Body =$body;
$mail->AddAddress($to);

//gui email
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent";
}
header("location: PaymentSucess.php?orderid=$lastid&&totalprice=$totalprice&&email=$email");





?>
