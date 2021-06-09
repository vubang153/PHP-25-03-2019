<?php
include_once("connect.php");
$id = $_GET["id"];
$sql = "select * from bim where ma_bim ='$id'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$sql2 = "select comment_content,ma_bim,ma_kh from binh_luan where ma_bim ='$id'";
$result2 =mysqli_query($con,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$kh =$row2["ma_kh"];
$sql3 = "select ten_dang_nhap from khachhang where ma_kh='$kh'";
$result3 =mysqli_query($con,$sql3);
$row3 = mysqli_fetch_assoc($result3);
include("header.php");
?>
<title><?php echo $row["ten_bim"];?></title>
<style type="text/css" media="screen">
	#wrapper-productInfo {
		width: 1366px;
		height: 1200px;
		background: #F9F8F8;
	}
	#wrapper-inside {
		width: 85%;
		height: 550px;
		background: white;
		margin: auto;
		top: 30px;
		position: relative;
	}
	#wrapper-inside-sub {
		width: 98%;
		height: 80px;
		position: relative;
		top: 30px;
	}
	#image-item {
		width: 37%;
		height: 450px;
		float: left;
		display: block;
		margin-left: 2.54729768920745% 
	}
	#option-menu {
		width: 58%;
		margin-left: 2.45270231079255%;
		height: 450px;
		float: right;
		color: #353535;
	}
	.list-option div {
		width: 100%;
		height:10%;
		font-family: Helvetica;
		margin-top: 1px;
	}
	#product-title {
		font-size: 20px;
	}
	#quantity {
		width: 100px;
		height: 30px;
		font-size: 20px;
		color: red;
		text-align: center;
	}
	input {
		border-style: none;
		background: rgba(208,1,27,.08);
		border: 1px solid red;
		color: red;
	}
	#wrapper-comment {
		width:100%;
		height: auto;
		margin-top: 10px;
		position: relative;
		top: 70px;
		background: white;
		margin:  auto;
	}
	#wrapper-comment-inside {
		width: 95%;
		top: 25px;
		position: relative;
		margin: auto;
		height: 100px;
	}
	.account-comment {
		border-bottom: 1px solid rgba(0,0,0,.09);
	}
</style>
<div id="wrapper-productInfo">
	<div id="wrapper-inside">
		<div id="wrapper-inside-sub">
			<div id="image-item">
				<img src="../upload/bobby1.jpg" style="width: 416px;height: 450px;">
			</div>
			<div id="option-menu">
				<nav class="list-option">
					<div id="item-name"><i class="fas fa-baby" style="font-size: 25px;border-radius: 5px;color: pink;"></i>
						<span id="product-title">     <?php echo $row["ten_bim"];?>
							
						</span>
					</div>
					<div id="price" style="background:#FAF9F9;">
						<span style="color: #ef5b88; font-size: 30px;margin-left: 10px;"><?php echo $row["gia"];?> đ
						</span>	
					</div>
					<div style="height: 70%;padding: 3px;">
						<span id="mo_ta"><h3>ĐẶC ĐIỂM NỔI BẬT CỦA SẢN PHẨM:</h3><span><?php echo $row['mo_ta'];?></span></span>
					</div>
					<form action="AddToCart.php?id=<?php echo $row["ma_bim"];?>" method="post" accept-charset="utf-8">
						<table style="width: 100%;">
							<tr>
								<td>Số lượng:   
								<input type="number" name="quantity" min="1" max=10 id="quantity">
								</td>
							</tr>
							<tr>
								<td2>
									<input type="submit" name="addtocart" value="Thêm vào giỏ hàng" style="width: 130px;height: 50px;">
								</td>
							</tr>
						</table>
					</form>	
					</div>
				</nav>
			</div>
		</div>
		<div id="wrapper-comment">
			<div id="wrapper-comment-inside">
				<p>Các bình luận về sản phẩm này</p>
				<form action="AddNewComment.php?user=<?php echo $username?>&&ma_bim=<?php echo $id?>" method="post" accept-charset="utf-8">
					<table>
						<tr>
							<td>
								<textarea name="comment-content" rows="6" cols="50" required minlength="10">
								</textarea>
							</td>
							<td>
								<input type="submit" name="" value="BÌNH LUẬN" style="width: 130px;height: 50px;">
							</td>
						</tr>
						<tr style="line-height: 30px;">
							<td colspan="2" class="account-comment">
								<div style="font-size:20px;color: #000000;font-weight: 30px;">vubang153</div>
								<div>
									Giao hàng nhanh,
									 sản phẩm giống hình
								</div>
								<div style="font-size: 10px;">12-2-2019</div>
							</td>
						</tr>
						<?php
							while ($row2 = mysqli_fetch_assoc($result2)) {
								echo "<tr style='line-height:30px;'>
									<td colspan='2' class='account-comment'>
										<div style='font-size:20px;color: #000000';font-weight:bold;>".$row3['ten_dang_nhap']."</div>
										<div>".$row2['comment_content']."</div>
										<div style='font-size: 10px;'>12-2-2019</div>
									</td>
									</tr>";
							}
						?>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once("footer.php")?>
