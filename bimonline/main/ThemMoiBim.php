<html lang="en">
<head>
<?php
include("connect.php");
session_start();
?>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cập nhật loại bỉm</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/plugins/morris.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../main/DanhSachBim.php">Quản lý</a>
            </div>            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>   <?php echo $_SESSION["admin_username"];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">  
                        <li>
                            <a href="logOut.php"><i class="fa fa-fw fa-power-off"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="http://localhost/bimonline/index.php"><i class="fas fa-home"></i> Trang chủ</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fas fa-bars"></i> Quản lý dữ liệu <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="ThemMoiBim.php">Thêm mới bỉm</a>
                            </li>
                            <li>
                                <a href="ThemMoiLoaiBim.php">Thêm mới loại bỉm</a>
                            </li>
                            <li>
                                <a href="DanhSachBim.php">Danh sách bỉm</a>
                            </li>
                            <li>
                                <a href="CapNhatBim.php">Cập nhật bỉm</a>
                            </li>
                            <li>
                                <a href="CapNhatLoaiBim.php">Cập nhật loại bỉm</a>
                            </li>
                            <li>
                                <a href="ThongKe.php">Thống kê đơn hàng</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
       <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          Cập nhật loại bỉm
                        </h1>
                    </div>
                </div>
            </div>
        <div style="margin:auto;">
        <div>
        <form action="XuLyThemMoi.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data" name="form1">
            <table border="1" style="border-collapse: collapse;" width="600" >
                <tr>
                    <th colspan="2" style="text-align: center; height='30px ">THÊM MỚI SẢN PHẨM</th>
                </tr>
                <tr>
                    <th>Mã loại</th>
                    <td ><input type="text" name="maLoai" class="text" required>
                    </td>
                </tr>
                <tr>
                    <th>Tên bỉm</th>
                    <td><input type="text" name="tenBim" class="text" required>
                    </td>
                </tr>
                <tr>
                    <th>Giá</th>
                    <td><input type="number" name="giaBim" class="text" required></td>
                </tr>
                <tr>
                    <th>Mô tả sản phẩm</th>
                    <td><input type="text" required class="text"></td>
                </tr>
                <tr>
                    <th>Ảnh sản phẩm</th>
                    <td><input type="file" name="anh-san-pham" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submitFormThemMoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại"></td>
                </tr>
            </table>
    </form>
    </div>
    <style>
        .text{
            width: 100%;
        }
    </style>
</body>