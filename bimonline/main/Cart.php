<script type="text/javascript" charset="utf-8" async defer>
	function prepare() {
		alert("Bạn cần đăng nhập trước khi đặt hàng");
		window.location="../main/loginandreg.php";
	}
	function submitForm() {
		document.forms['form1'].action = 'payment.php';
		document.forms['form1'].submit();
	}
</script>
<style type="text/css" media="screen">
	#wrapper-shopping-cart {
		width: 1366px;
		background: #FAF9F9;
		height: 900px;
	}
	td.left {
		width: 60%;
		height: 40px;
		text-align: left;
	}
	#table-shopping-cart {
		width: 90%;
		height: 800px;
		margin: auto;
		text-align: center;
		background: white;
		position: relative;
		top: 30px;
	}
	td input {
		margin: auto;
	}
	table td {
		height: 50px;
	}
	td img {
		width: 100px;
		height: 100px;
	}

</style>
<?php
include_once("header.php");
include_once("connect.php");
$state = 1;
$total = 0;
$state = 0;
	if (isset($_SESSION["cart"])) {
		foreach ($_SESSION["cart"] as $k => $v) {
			if (isset($k)) {
				$state = 2;
			}
			$item[] = $k;
	}
}
	if ($state != 2) {
		echo "<div style='width:90%;height:auto;background:white;'>
	<div style='width: 1366px;height: 400px;background:#FAF8F8'>
		<div style='width: 40%;margin: auto;position: relative;top: 100px;'>
			<h2>Hiện tại không có sản phẩm nào trong giỏ hàng
		</h2>
			<a href='../index.php'>
				<button type='button' style='line-height: 30px;position: relative;left:30%;top:20px;background:#FC5D26;border: 1px solid red;color: white;'>Tiếp tục mua sắm
				</button>
			</a>
		</div>
		
	</div>
</div>";
	}
	else {
		echo "<form name='form1' action=payment.php method=post>";
		$list = $_SESSION['cart'];

	$str = implode(",", $item);
	$sql = "select * from bim where ma_bim in ($str)";
	$query = mysqli_query($con,$sql);
?>
<div id="wrapper-shopping-cart">
	<table id="table-shopping-cart">
	<tr style="height: 30px;">
		<th>Sản phẩm</th>
		<th>Hãng sản xuất</th>
		<th>Đơn giá</th>
		<th>Số lượng</th>
		<th>Thao tác</th>
		<th>Tổng</th>
	</tr>
<?php

while ($row = mysqli_fetch_assoc($query)) {
	if (isset($row["ma_loai"])) {
		if ($row["ma_loai"] == 1) {
			$row["ma_loai"] = "Huggies";
		}
		elseif ($row["ma_loai"] == 2) {
			$row["ma_loai"] = "Goon";
		}
		elseif ($row["ma_loai"] == 3) {
			$row["ma_loai"] = "Merries";
		}
		elseif ($row["ma_loai"] == 4) {
			$row["ma_loai"] = "Bobbby";
		}
		elseif ($row["ma_loai"] == 5) {
			$row["ma_loai"] = "Pampers";
		}
}
?>
	<tr>
		<td style="text-align: left;">
		<img src="../upload/<?php echo $row["hinh_anh"];?>">
		<?php echo $row["ten_bim"]; ?>
		</td>
		<?php
			echo '<td>'.$row["ma_loai"].'</td>';
			echo '<td>'.number_format($row["gia"]). ' đ</td>';
		?>
		<td><input type="number" min=1 max=100 name=qty[<?php echo $row['ma_bim'];?>] size=5 value=<?php echo $_SESSION['cart'][$row['ma_bim']];?>></td>
		<td><a href="DeleteCart.php?productid=<?php echo $row['ma_bim'];?>"><img style="width: 30px;height: 25px;" src="../img/waste.jpg" alt=""></a></td>
		<td><?php echo $_SESSION['cart'][$row['ma_bim']] *$row['gia']; ?> đ</td>
	</tr>

	<?php
	$total+=$_SESSION['cart'][$row['ma_bim']]*$row['gia'];
	$_SESSION["totalprice"] = $total;
}
?>
	<tr>
		<td colspan="5">
			<input type="button" name="btnsubmit" onclick="<?php if(isset($_SESSION["username"])) {
				echo 'submitForm()';}
				else {
					echo 'prepare()';}?>" value="ĐẶT HÀNG" style="float: right; width: 150px;height: 30px; color: white;border: 1px solid ; background: #FB5116; border-color: red;">	
			<b style="float: right; margin-right: 50px;">TỔNG TIỀN HÀNG: <?php echo number_format($total,0);?> đ</b>
		</td>
	</tr>
	</table>
	</div>
<?php
}
?>

<?php include_once("footer.php");