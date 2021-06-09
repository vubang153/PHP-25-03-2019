<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	    <meta http-equiv="refresh" content="3;url=loginandreg.php">

	<title>Đăng ký thành công</title>
	<style type="text/css" media="screen">
		* {
			margin:  0px;
			font-family: Roboto;
		}
		#wrapper {
			width: 1366px;
			height: 768px;
			background: #fce8f1;
		}
		#wrapperForm {
			width: 60%;
			height: 30%;
			background: white;
			top: 40px;
			margin: auto;
			position: relative;
		}
		#titleForm {
			width: 100%;
			height: 15%;
			background: #58D3F7;
			font-weight: bold;
			color: white;
		}
		#contentForm {
			width: 100%;
			height: 85%;
			text-align: center;
			padding: 20px;
		}
		a:hover {
			color: red;
		}


	</style>
</head>
<body>
	<div id="wrapper">
		<div id="wrapperForm">
			<div id="titleForm"><p style="padding: 6px;">Đang chuyển hướng...</p>
			</div>
			<div id="contentForm">
				<p style="font-weight: bold;">Bạn đã đăng kí thành công, <?php echo $_GET["user"]?></p>
				<a href="loginandreg.php" style="line-height: 30px; font-size:15px; text-decoration: none;">Nhấn vào đây nếu trình duyệt không tự chuyển hướng</a>
			</div>
		</div>
	</div>
</body>
</html>