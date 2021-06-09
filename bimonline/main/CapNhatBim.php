<html lang="en">
<head>
<?php
include("connect.php");
session_start();
$updateId=0;
    if (isset($_GET["update"])) {
        $updateId = $_GET["update"];
    }
    $update_Sql = "select * from bim where ma_bim ='$updateId'";
    $recordset2 = mysqli_query($con,$update_Sql);
    $row_update= mysqli_fetch_assoc($recordset2);
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

    <title>Quản lý/ Cập nhật</title>
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
                          Quản lý/ Cập nhật
                        </h1>
                    </div>
                </div>
            </div>
        <div>
            <div id="table_2">
        <form name="form1" method="post" action="UpdateBimProcess.php" accept-charset="utf-8" >
          <table border="0" style="margin:auto; height: 250px;" >
              <input name="updateMaBim" type="hidden" value="<?php echo $row_update['ma_bim']; ?>" required>
            <tr>
              <th>Mã loại</th>
              <td><input name="updateMaLoai" type="text" value="<?php echo $row_update['ma_loai']; ?>" required></td>
            </tr>
            <tr>
              <th>Tên bỉm</th>
              <td><input name="updateTenBim" type="text" value="<?php echo $row_update['ten_bim']; ?>" required></td>
            </tr>
            <tr>
              <th>Giá</th>
              <td><input type="text" name="updateGia" value="<?php echo $row_update['gia']; ?>" required></td>
            </tr>
            <tr>
              <th>Mô tả</th>
              <td><input type="text" name="updateMoTa" value="<?php echo $row_update['mo_ta']; ?>" required></td>
            </tr>
            <tr>
              <th>Trạng thái</th>
              <td><input type="text" name="updateTrangThai" value="<?php echo $row_update['trang_thai']; ?>"required></td>
            </tr>
            <tr>
              <td colspan="2" align="center">
              <input type="submit" name="submit" value="Cập nhật"required>
              <input type="reset" name="button2" value="Nhập lại">
              </td>
            </tr>
          </table>
        </form>
    </div>
        </div>
        <style>
            #table_2{
                margin: auto;
            }
        </style>
</body>