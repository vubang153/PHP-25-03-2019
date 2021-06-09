<head>
	<title>Thanh toán đơn hàng</title>
	<?php 
	include("connect.php");
	include_once("header.php");
	$username = $_SESSION["username"];
	$sql = "select * from khachhang where ten_dang_nhap='$username'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	?>
	<style type="text/css" media="screen">
		#wrapper-payment {
			width: 1366px;
			height: 600px;
			background: #F4F4F4;
			color: #575656;	
		}
		.bar-payment {
			border: 1px solid #DDDDDD;
			width: 90%;
			background: white;
			margin: auto;
			position: relative;
			border-radius: 3px;
		}
		#location-bar {
			height: 200px;
			top: 30px;
			
		}
		#payment-method {
			height: 400px;
			top: 40px;
		}
		.bar-payment table {
			margin-top: 10px;
			line-height: 30px;
			margin-left: 20px;
		}
		.bar-payment input {
			width: 300px;
			height: 30px;
		}
		.bar-payment-sub {
			border: 1px solid #DDDDDD;
			width: 100%;
			background: white;
			margin: auto;
			border-radius: 3px;
			height: 100px;
			line-height: 30px;

		}
		.list-location input {
			border-style: none;
		}
	</style>
</head>
<body>
	<form action="PaymentProcess.php" method="POST" accept-charset="utf-8">
		<div id="wrapper-payment">
			<div class="bar-payment" id="location-bar">
				<div class="list-location">
					<i class="fas fa-map-marker-alt" style="font-size: 20px;margin-left: 10px; color: #ef5b88"></i>
					<span style="font-size: 20px;color: #ef5b88">Địa chỉ nhận hàng</span>
					<table>
						<tr>
							<td>Tên người nhận</td>
							<td><input type="text" name="ten_nguoi_nhan" readonly value="<?php echo $row["ho_va_ten"]?>">
							</td>
							<td>
								 Email: <input type="email" name="order_email" readonly value="<?php echo $row["email"]?>">
							</td>

						</tr>
						<tr>
							<td>Số điện thoại</td>
							<td><input type="number" name="order_phone_number" readonly value="<?php echo $row["so_dien_thoai"]?>"></td>
						</tr>
						<tr>
							<td>Địa chỉ nhận hàng</td>
							<td><input type="text" name="order_address" rows="5" cols="50" readonly value="<?php echo $row["dia_chi"]?>">
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="bar-payment" id="payment-method">
				<div class="bar-payment-sub">
					<div style="width: 100%;height: 50%">Phương thức thanh toán:
					</div>
					<div>
					<input type="button" value="Thanh toán khi nhận hàng" style="width: 200px;height: 40px; background:white;border: 1px solid red;color: red;">
					</div>
				</div>
				<div>
					<div class=bar-payment-sub style="height: 150px;">
						<div style="width: 25%;height: 100%;float: right;">
							<div>
							Tổng tiền hàng: <?php echo number_format($_SESSION["totalprice"]) ?> đ
							</div>
							<div>
							Phí vận chuyển: 0 đ
							</div>	
							<div>
							Tổng thanh toán:
							<?php echo number_format($_SESSION["totalprice"])?> đ
							</div>
						</div>
					</div>
					<div style="height: 70px;">
						<input type="submit" name="payment_submit" value="ĐẶT HÀNG" style="height: 50px; float: right;margin-top: 10px;margin-right: 10px;color: red;border: 1px solid red; background: white;">
					</div>
				</div>
			</div>
		</div>
	</form>
</body>