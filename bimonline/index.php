<title>Trang chủ</title>
<?php include_once("main/header.php");
include("../bimonline/main/connect.php");
if (isset($_GET["type"])) {
	$type = $_GET["type"];
	$sql = "select * from bim where ma_loai = '$type'";
	$result = mysqli_query($con,$sql);
	$total_records = mysqli_num_rows($result);
	if (isset($_GET["page"])) {
	        	$current_page  = $_GET["page"];
	        }	
	        else {
	        	$current_page = 1;
	        }
	         $limit = 8;
	 
	        $total_page = ceil($total_records / $limit);
	 
	        if ($current_page > $total_page){
	            $current_page = $total_page;
	        }
	        else if ($current_page < 1){
	            $current_page = 1;
	        }
	 
	        $start = ($current_page - 1) * $limit;
	 
	        $result = mysqli_query($con, "SELECT * FROM bim where ma_loai = '$type' LIMIT $start, $limit");

	}
	elseif(isset($_GET["keyword"])) {
		$keyword = $_GET["keyword"];
		$sql = "select * from bim where ten_bim like '%$keyword%'";
		$result = mysqli_query($con,$sql);
		$total_records = mysqli_num_rows($result);
		if ($total_records ==0) {
			echo "<div style='width: 1366px;height: 100px;background: #F7F7F7;'>
  <p style='text-align: center;font-size:40px;margin-top:10px;'>Tìm kiếm không có kết quả</p>
</div>
<div style='width: 1366px;height: 300px;background: #F7F7F7;'>
  <p style='text-align: center;font-weight:normal;'>Xin lỗi chúng tôi không tìm được kết quả phù hợp với tìm kiếm của bạn</p>
  <div class='fas fa-search' style='font-size: 100px;color: pink;margin-left:642px;margin-top:50px;'>
    
  </div>
</div>";
			include("../bimonline/main/footer.php");
			return;
		}
		if (isset($_GET["page"])) {
		        	$current_page  = $_GET["page"];
		        }	
		        else {
		        	$current_page = 1;
		        }
		         $limit = 8;
		 
		        $total_page = ceil($total_records / $limit);
		 
		        if ($current_page > $total_page){
		            $current_page = $total_page;
		        }
		        else if ($current_page < 1){
		            $current_page = 1;
		        }
		 
		        $start = ($current_page - 1) * $limit;
		 
		        $result = mysqli_query($con, "SELECT * FROM bim where ten_bim like '%$keyword%' LIMIT $start, $limit");
	}

else {
	$sql = "select * from bim";
	$result = mysqli_query($con,$sql);
	$total_records = mysqli_num_rows($result);
	if (isset($_GET["page"])) {
	        	$current_page  = $_GET["page"];
	        }	
	        else {
	        	$current_page = 1;
	        }
	         $limit = 8;
	 
	        $total_page = ceil($total_records / $limit);
	 
	        if ($current_page > $total_page){
	            $current_page = $total_page;
	        }
	        else if ($current_page < 1){
	            $current_page = 1;
	        }
	 
	        $start = ($current_page - 1) * $limit;
	 
	        $result = mysqli_query($con, "SELECT * FROM bim LIMIT $start, $limit");
}
	
?>
<style type="text/css">
	#wrapper-index {
		height: auto;
		width: 1100px;
		background: red;
		margin: auto;
		margin-top: 10px;
	}
	#sidebar-index {
		width: 200px;
		height: 253px;
		float: left;
		border-bottom: 1px solid #E7E5E5
	}
	#sidebar-index li {
		list-style-type: none;
		font-size: 14px;
		line-height: 30px;
	}
	#sidebar-index ul {
		margin-left: 12px;
	}
	#banner-index {
		width: 900px;
		height: 245px;
		float: right;
	}
	#content-index {
		width: 900px;
		height: auto;
		float: right;
		margin-top: 10px;
	}
	.product-info {
		width: 217px;
		height: 327px;
		border: 1px solid #ECECEC;
		margin-left: 4px;
		margin-top: 10px;
		float: left;
	}
	.product-info img {
		width: 217px;
		height: 225px;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
	.product-info div {
		font-size: 15px;
		margin-top: 15px;
		margin-left: 10px;
	}
	.product-info span {
		font-size: 20px;
		margin-left: 10px;
		color: #ef5b88;
	}
	a {
		text-decoration: none;
		color: black
	}
	a:hover {
		color: #8a5d3b;
	}
	.pagination {
		background: #EEE;
		position: relative;
		left: 740px;
		font-weight: bold;
		border: 1px solid #AAAAAA;
		border-radius: 3px;
	}
	.pagination a {
		background: #EEE;
		border: 1px solid #AAAAAA;

	}
</style>
<div style="width: 100%;height: 100%;background: white;border-top: 2px solid #E1DFDF;margin-top: 10px;">
	<div id="wrapper-index">
		<div id="sidebar-index">
			<div>DANH MỤC</div>
			<i class="fas fa-chevron-right" style="font-size: 15px; padding-top: 16px;"></i>   Bỉm và tã giấy

			<ul>
				<li><a href="index.php?type=4">Bỉm Bobby - Tã Bobby</a></li>
				<li><a href="index.php?type=1">Bỉm Huggies - Tã Huggies</a></li>
				<li><a href="index.php?type=2">Bỉm Goon - Tã Goon</a></li>
				<li><a href="index.php?type=5">Bỉm Pampers - Tã Pampers</a></li>
				<li><a href="index.php?type=3">Bỉm Merries - Tã Merries</a></li>				
			</ul>
		</div>
		<div id="banner-index">
			<img style="width: 900px;
		height: 245px;" src="https://media.bibomart.net/u/bbm/banner/2019/03/01/23/01/940x250_1.png">
		</div>
		<div id="content-index">
            <?php
            if (isset($_GET["keyword"])) {
            	echo "<div>
				<p>".$total_records." mặt hàng được tìm thấy với từ khoá ".$_GET['keyword']."
				</p>
				</div>";
			}
            while ($row = mysqli_fetch_assoc($result)) {

            	?><div class="product-info">
            	<img src="../bimonline/upload/<?php echo $row['hinh_anh'];?>">
            	<div><a href="./main/ProductInfo.php?id=<?php echo $row['ma_bim'];?>" style="color: black;"><?php
                echo $row['ten_bim'];?>
                 </a></div>
                 <span><?php echo number_format($row['gia']);?>  đ</span>
            	</div>
            <?php
            }
            ?>
            <span class="pagination">
	           	<?php 
	 
	            if ($current_page > 1 && $total_page > 1){
	                echo '<a href="index.php?page='.($current_page-1).'"> < Trang trước   </a>';
	            }
	 
	            for ($i = 1; $i <= $total_page; $i++){
	                if ($i == $current_page){
	                    echo '<span class="demo">'   .$i.  '</span>';
	                }
	                else{
	                    echo '<a href="index.php?page='.$i.'">'.$i.'</a>';
	                }
	            }
	 
	            if ($current_page < $total_page && $total_page > 1){
	                echo '<a href="index.php?page='.($current_page+1).'">  Trang sau >   </a> ';
	            }
	           	?>
			</span>
        </div>
		</div>
	
    </div>
        
</div>
<?php include("../bimonline/main/footer.php"); ?>