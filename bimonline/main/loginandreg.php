<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
<script type="text/javascript">
	function checkform() {
	var accountName = document.forms['form1'].accountName.value;	
	if(accountName == '') {
		alert('Vui lòng nhập tài khoản');	
		document.forms['form1'].accountName.focus();
		return;
	}
	
	var password = document.forms['form1'].password.value;	
	if(password == '') {
		alert('Vui lòng nhập mật khẩu');	
		document.forms['form1'].password.focus();
		return;
	}

	document.forms['form1'].action = 'loginProcess.php';
	document.forms['form1'].submit();
}
</script>
<?php
include("header.php");
$error ="";
if (isset($_GET["error"])) {
	$error = $_GET["error"];
}
?>
<style type="text/css">
	#wrapperLogin {
	width: 1366px;
	height: 400px;
	background-color: #FAF9F9;
	float: left;
}
#wrapperFormLogin {
	width: 60%;
	height: 90%;
	position: relative;
	top: 17px;
	left: 280px;
	background: #fff;
}
#tableFormLogin {
	padding: 30px;
	margin-left: 30px;
	height: 250px;
	width: 600px;
}
input {
	border-color: #ddd;
	width: 300px;
	height: 40px;
	box-sizing: border-box;
	border: 1px solid #ddd;
	border-style: dotted;
}
</style>
</head>
<body>
	<div id="wrapperLogin">
		<div id="wrapperFormLogin">
			<div style="width: 100%;height: 20%;font-size: 22px;font-weight: 400; color: black;background-color:#FAF9F9;">Chào mừng đến với Bimonline. Đăng nhập ngay !
			</div>
			<div id="formLogin">
				<form method="post" accept-charset="utf-8" name="form1">
					<table id="tableFormLogin" style="color: #757575">
						<tr>
							<td>Số điện thoại hoặc email*</td>
						</tr>
						<tr>
							<td><input type="text" name="accountName" value="" placeholder="Vui lòng nhập số điện thoại hoặc email của bạn"<?php if ($error == "errorfailed") {
							echo "style='border-color:red;'";
							}?>></td>
						</tr>
						<tr style="line-height: 30px;">
							<td>Mật khẩu*</td>
						</tr>
						<tr>
							<td>
							<input type="password" name="password" value="" placeholder="Vui lòng nhập mật khẩu của bạn" <?php if ($error == "errorfailed") {
							echo "style='border-color:red;'";
							}?>>
							</td>
						</tr>
						<?php if ($error =="errorfailed") {
	echo "<tr>
								<td style ='color:red;font-size:15px;'> *Sai tài khoản hoặc mật khẩu</td>
									</tr>";
}?>
						<tr>
							<td><input type="button" name="submitForm" value="ĐĂNG NHẬP" style="background-color:pink;font-weight: bold;" onClick="checkform()"><a href="registerForm.php"><input type="button" name="register" value="ĐĂNG KÍ" style="font-weight: bold;background-color: #58D3F7"></a></td>
						</tr>
						
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php include("footer.php");?>