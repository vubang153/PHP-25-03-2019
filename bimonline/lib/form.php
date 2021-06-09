<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo send email</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="NewEmail.php">
<table width="531" border="0">
<tr>
<td colspan="2" align="center"><strong>Gửi email</strong></td>
</tr>
<tr>
<td>Địa chỉ người gửi: </td>
<td><input name="txtFrom" type="text" id="txtFrom" value="hungcuong1306@gmail.com" size="40" /></td>
</tr>
<tr>
<td width="141">Địa chỉ người nhận</td>
<td width="243"><input name="txtTo" type="text" id="txtTo" value="hungcuong1306test@gmail.com" size="40" /></td>
</tr>
<tr>
<td>Tiêu đề thư</td>
<td><input name="txtSubject" type="text" id="txtSubject" value="Chúc mừng bạn" size="40" /></td>
</tr>
<tr>
<td>Nội dung thư</td>
<td><textarea name="txtContent" id="txtContent" cols="45" rows="5">Bạn sẽ có một căn biệt thự tại Hồ Tây !</textarea></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="button" id="button" value="Gửi mail" /></td>
</tr>
</table>
</form>
</body>
</html>
