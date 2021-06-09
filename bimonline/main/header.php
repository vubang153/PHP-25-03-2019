
<link rel="shortcut icon" type="image/png" href="http://localhost/bimonline/img/bim.ico"/>
<style type="text/css" media="screen">
	* {
		margin:  0px;
		padding: 0px;
		font-family: Roboto;
	}
	#wrapperHeader {
		width: 1366px;
		height: 100px;
		background: red;
	}
	#menuHeader {
		width: 100%;
		height: 20%;
		background: #58D3F5;
	}
	#headerBar {
		width: 100%;
		height: 85%;
		background: #fce8f1;
	}
	#menu-header-content ul {
		list-style-type: none;
	}
	#menu-header-content ul a {
		text-decoration:none;
		width:200px;
		float:right;
		color:#fff;
		line-height:20px;
		text-align:center;
		font-size: 14px;
	}
	#menu-header-content ul a:hover {
		color: #fce8f1;
	}
	#wrapperLogo-search-cart {
		width: 80%;
		height: 50%;
		position: relative;
		left: 100px;
		top: 15px;
	}
	#searchBar {
		position: absolute;
	    width: 55%;
	    height: 100%;
	    padding: 13px 19px;
	    font-size: 14px;
	    line-height: 1;
	    letter-spacing: 0;
	    color: #212121;
	 	border: none;
	    background: #fff;
	    margin-left: 60px;
	}
	button.fa-3x {
		float: right;
		font-size:21px;
		margin-right: 228px;
		background: #8a5d3b;
		border-style: none;
		color: #fce8f1;
		padding: 11px;
	}
	.fa-2x {
		float: right;
		font-size:21px;
		margin-right: -100px;
		background: none;
		border-style: none;
		color: #8a5d3b;
		padding: 6px;
	}
	a {
		text-decoration: none;
	}
	a:hover {
		color:  #fce8f1;
	}
	.dropdown-content {
	  display: none;
	  position: absolute;
	  background-color: #f9f9f9;
	  min-width: 160px;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  z-index: 1;
	}
</style>
<script type="text/javascript" charset="utf-8" async defer>
	function redrectGioHang() {
		window.location="http://localhost/bimonline/main/cart.php";
	}
	function redrectDangKi() {
		alert("Bạn cần đăng nhập trước");
		window.location="http://localhost/bimonline/main/loginandreg.php";
	}
</script>
<?php session_start();
if (isset($_SESSION["username"])) {
	$username = $_SESSION["username"];
}
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<div id="wrapperHeader">
	<div id="menuHeader">
		<div id="menu-header-content">
			<ul>
				<?php
				if(isset($username)) {
					echo "<li>
						<a href='http://localhost/bimonline/main/logOut.php'>ĐĂNG XUẤT
						</a>
						</li>
						<li>
						<a href='http://localhost/bimonline/main/setting.php''>CÀI ĐẶT TÀI KHOẢN
						</a>
						</li>
						<li>
							<a>XIN CHÀO, $username
							</a>
						</li>
					
					";
				}
				else {
					echo "<div>
				<li><a href='http://localhost/bimonline/main/registerForm.php'>ĐĂNG KÍ</a></li></div>
				<div><li><a href='http://localhost/bimonline/main/loginandreg.php'>ĐĂNG NHẬP</a></li></div>
				";
				}
				?>
			</ul>
		</div>
	</div>
	<div id="headerBar">
		<div id="wrapperLogo-search-cart">
			<form action="http://localhost/bimonline/main/SearchByKeyword.php" method="get" accept-charset="utf-8">
			<div class="logo-header">
				<a href="http://localhost/bimonline/index.php">
				<img src="http://localhost/bimonline/img/bim.png" width="15%" height="100%">
				</a>
				<input type="text" name="keyword" value="" placeholder="Bố mẹ tìm kiếm gì cho bé hôm nay ?" id="searchBar">
				<button type="submit" class="fa fas fa-search fa-3x"></button>
				<a class="fa fa-shopping-cart fa-2x" href="http://localhost/bimonline/main/cart.php"></a>
			</form>	
			</div>
		</div>
	</div>
</div>
