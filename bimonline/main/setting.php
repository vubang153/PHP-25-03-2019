<style type="text/css" media="screen">
	.sub-title {
		font-size: 15px;
	}
	.main-title {
		font-size: 20px;
	}
	.main-name {
		font-weight: bold;
		color: black;
	}
	table th {
		padding: 0;
	    background: #fafafa;
	    color: #757575;
	    text-align: left;
	    font-weight: 400;
	    border: 1px solid #eff0f5;
	}
	#wrapper {
		width: 1366px;
		height: auto;
		min-height: 600px;
		background: #F9F8F8;
		margin-top: 10px;
		color: #424242;
	}
	#wrapper-title {
		font-weight: bold;
		font-size: 30px;
		padding: 10px;
		width: 100%;
	}
	.table-col {
		width: 98%;
		height: 200px;
		margin: auto;
	}
	.table {
		background: white;
		height: 200px;
		float: left;
		border: 1px solid #F5F5F5;
		border-radius: 1px;
	}
	#table-1-col-1 {
		width: 32.8%;
	}
	#table-1-col-2 {
		width: 33%;
		margin-left: 10px;
	}
	#table-1-col-3 {
		width: 33%;
		border-left: none;

	}
	#table-1-col-3 p {
		margin-top: 20px;
	}
	p {
		margin-top: 10px;
		margin-left: 20px;

	}
	.table-col-2 {
		width: 100%;
		margin-top: 20px;
		height: auto;
		min-height: 200px;
		background: white;
		padding: 10px;
	}
</style>
<?php
include("connect.php");
include("header.php");
$sqlSearchId = "select ma_kh from khachhang where ten_dang_nhap ='$username'";
$recordset =mysqli_query($con,$sqlSearchId);
$ketqua= mysqli_fetch_assoc($recordset);
$ketqua = $ketqua["ma_kh"];
$sql = "SELECT ho_va_ten,email,so_dien_thoai,dia_chi
FROM khachhang where ma_kh = '$ketqua'"; 
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$sql2 = "select ma_dh,ngay_dat,tong_tien from dondathang where ma_kh='$ketqua'";
$result2 = mysqli_query($con,$sql2);
?>
<div id="wrapper">
	<div>
		<p id="wrapper-title">Quản lý tài khoản</p>
	</div>
	<div class="table-col">
		<div class="table" id="table-1-col-1">
			<p class="main-title">Thông tin cá nhân</p>
			<p><?php echo $row["ho_va_ten"]?></p>
			<p><?php echo $row["email"]?></p>
		</div>
		<div class="table" id="table-1-col-2">
			<p class="main-title">Số địa chỉ</p>
			<p class="sub-title">Địa chỉ nhận hàng mặc định</p>
			<p class="main-name"><?php echo $row["ho_va_ten"]?></p>
			<p><?php echo $row["dia_chi"]?></p>
			<p>(+ 84)<?php echo $row["so_dien_thoai"]?></p>
		</div>
		<div class="table" id="table-1-col-3">
			<p class="sub-title">Địa chỉ thanh toán mặc định</p>
			<p class="main-name" id="main-name-3"><?php echo $row["ho_va_ten"]?></p>
			<p><?php echo $row["dia_chi"]?></p>
			<p>(+ 84)<?php echo $row["so_dien_thoai"]?></p>
		</div>
	</div>
	<div class="table-col">
		<table class="table-col-2">
			<tr>
				<td>Đơn hàng gần đây</td>
			</tr>
			<tr>
				<th>Mã đơn hàng #</th>
				<th>Ngày đặt</th>
				<th>Tổng tiền</th>
			</tr>
	<?php
		while ($row2 = mysqli_fetch_assoc($result2)) { ?>
			<tr>
				<td><?php echo $row2["ma_dh"]?>
				</td>
				<td><?php echo $row2["ngay_dat"]?>
				</td>
				<td><?php echo number_format($row2["tong_tien"])?>
				</td>
			</tr>
				<?php
				}
			?>
		</table>
	</div>
</div>