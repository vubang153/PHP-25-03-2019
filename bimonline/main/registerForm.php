<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng kí</title>
	<link rel="stylesheet" type="text/css" href="logandreg.css">
<script type="text/javascript">
	function checkform() {
	var user_accountName = document.forms['form1'].user_accountName.value;	
	if(user_accountName == '') {
		alert('Vui lòng nhập tài khoản');	
		document.forms['form1'].user_accountName.focus();
		return;
	}
	
	var user_firstName = document.forms['form1'].user_firstName.value;	
	if(user_firstName == '') {
		alert('Vui lòng nhập họ tên');	
		document.forms['form1'].user_firstName.focus();
		return;
	}
	
	var user_phoneNumber = document.forms['form1'].user_phoneNumber.value;	
	if(user_phoneNumber == '') {
		alert('Vui lòng nhập số điện thoại');	
		document.forms['form1'].user_phoneNumber.focus();
		return;
	}
	var user_email = document.forms['form1'].user_email.value;	
	if(user_email == '') {
		alert('Vui lòng nhập email');	
		document.forms['form1'].user_email.focus();
		return;
	}

	document.forms['form1'].action = 'registerProcess.php';
	document.forms['form1'].submit();
}
</script>
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
	padding: 15px;
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
<?php
include("header.php");
$error ="";
if (isset($_GET["error"])) {
	$error = $_GET["error"];
}
?>
</head>
<body>
	<div id="wrapperLogin">
		<div id="wrapperFormLogin">
			<div style="width: 100%;height: 20%;font-size: 22px;font-weight: 400; color: black;background-color:#FAF9F9;">Tạo tài khoản Bimonline !
			</div>
			<div id="formLogin">
				<form method="post" accept-charset="utf-8" name="form1">
					<table id="tableFormLogin" style="color: #757575">
						<tr>
							<td>Tên đăng nhập*</td>
							<td>Tên*</td>
						</tr>
						<tr>
							<td><input type="text" name="user_accountName" value="" placeholder="Vui lòng nhập tài khoản"  <?php if ($error=="registerfailed") {
								echo "style='border-color:red;'";
							}?>><?php if ($error=="registerfailed") {
								echo "<p style='color: red;font-size: 13px;''>Tài khoản đã tồn tại !</p></td>";
							}
							?>
							<td>
								<input type="text" name="user_firstName" value="" placeholder="Họ tên">
							</td>
						</tr>
						<tr style="line-height: 30px;">
							<td>Mật khẩu*</td>
							<td>Email *</td>
						</tr>
						<tr>
							<td>
								<input type="password" name="user_password" placeholder="Vui lòng nhập mật khẩu của bạn">
							</td>
							<td>
								<input type="email" name="user_email">
							</td>

						</tr>
						<tr>
							<td>Địa chỉ</td>
							<td>Số điện thoại</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="user_address">
							</td>
							<td><input type="number" name="user_phoneNumber"></td>
						</tr>
						<tr>
							<td>Ngày sinh
							</td>
							<td><input type="button" name="register" value="ĐĂNG KÍ" style="font-weight: bold;background-color: #58D3F7" onclick="checkform()">
							</td>
						</tr>
						<tr>
							<td>
								<select name="thangsinh" placeholder="Tháng">
									<option value="1">Tháng Một</option>
									<option value="2">Tháng Hai</option>
									<option value="3">Tháng Ba</option>
									<option value="4">Tháng Tư</option>
									<option value="5">Tháng Năm</option>
									<option value="6">Tháng Sáu</option>
									<option value="7">Tháng Bảy</option>
									<option value="8">Tháng Tám</option>
									<option value="9">Tháng Chín</option>
									<option value="10">Tháng Mười</option>
									<option value="11">Tháng Mười Một</option>
									<option value="12">Tháng Mười Hai</option>
								</select>
								<select name="ngaysinh">
									<?php for ($i=1; $i<32 ; $i++) { 
										echo "<option value='$i'>$i</option>";
									}?>
								</select>
								<select name="namsinh">
									<?php for ($i=1970; $i<2016 ; $i++) { 
										echo "<option value='$i'>$i</option>";
									}?>
								</select>
							</td>
						</tr>
						<tr>
							
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php include("footer.php")?>