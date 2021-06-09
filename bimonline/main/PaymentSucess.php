<?php
include_once("header.php");
?>
<style type="text/css" media="screen">
	#wrapper-payment-success {
		width: 1366px;
		height: auto;
		margin-top: 5px;
		background: #f5f5f5;

	}
	.wrapper-payment-success-sub {
		width: 100%;
		margin: auto;
		background: #white;
		border-radius: 3px;
	}
	#wrapper-payment-success-sub-1 {
		height: 250px;
	}
	#wrapper-payment-success-sub-2 {
		height: 250px;
	}
	.main-style-font {
		color: #FF8C26;
		font-weight: bold;
		font-size: 40px;
	}
	.payment-sucess-content {
		width: 70%;
		height: 100%;
		background: white;
		margin: auto;
		border: 1px solid #FAFAFA;
		border-radius: 3px;
	}
	.payment-sucess-content p {
		text-align: center;
		font-weight: normal;
	}
</style>
<div id="wrapper-payment-success">
	<div class="wrapper-payment-success-sub">
		<div id="wrapper-payment-success-sub-1">
			<div class="payment-sucess-content">
				<p class="main-style-font">
					<i class="fas fa-clock" style="font-size: 60px; margin-top: 18px;">
					</i>
					<span style="margin-left:5px;">Cảm ơn bạn đã mua hàng</span>
				</p>
				<p style="font-size: 13px;">
					Mã đơn hàng của bạn: <?php echo $_GET["orderid"];?>
				</p>
				<p style="font-size: 13px;">Bạn có thể theo dõi đơn hàng của mình tại: <span style="color: #CE0A0A;font-size: 17px;">Tài khoản của tôi -> Đơn hàng của tôi</span></p>
				<p style="font-size: 13;">Bạn có thể theo dõi đơn hàng của bạn tại: <?php echo $_GET["email"];?></p>
			</div>
		</div>
		<div id="wrapper-payment-success-sub-2">
			<div class="payment-sucess-content" style="margin-top: 10px;">
				<p style="font-size: 13px;">Vui lòng chuẩn bị số tiền tương ứng vào ngày nhận hàng</p>
				<p class="main-style-font"><?php echo number_format($_GET["totalprice"])?> đ</p>
			</div>
		</div>
	</div>
</div>
<?php include_once("footer.php");