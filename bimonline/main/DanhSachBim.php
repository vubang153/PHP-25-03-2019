<html lang="en">
<head>
<?php 
    session_start();
    include("connect.php");
    $sql = "SELECT ma_bim,ten_loai,ten_bim,hinh_anh,gia,mo_ta 
FROM bim INNER JOIN loai_bim ON bim.ma_loai= loai_bim.ma_loai";
    $recordset = mysqli_query($con, $sql);
?>S  
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
        <div style="overflow: scroll;height: 600px;width: 100%;">
            <table border="1" charset="utf-8" class="table table-striped">
              <thead class="thead-light">
                <tr>
                <th>Mã bỉm</th>
                <th>Mã loại</th>
                <th>Tên bỉm</th>
                <th>Giá</th>
                <th>Mô tả</th>
                <th>Cập nhật</th>
                <th>Xoá sản phẩm</th>
              </tr></thead>
            <?php
            while($row = mysqli_fetch_assoc($recordset)) {
            ?>
                <tr>
                  <td><?php echo $row['ma_bim']; ?></td>
                  <td><?php echo $row['ten_loai']; ?></td>
                  <td><?php echo $row['ten_bim']; ?></td>
                  <td><?php echo number_format($row['gia']); ?> đ</td>     
                  <td><details>
                    <summary>Chi tiết</summary>
                    <?php echo $row["mo_ta"];?>
                    </details></td>          
                  <td><a href="CapNhatBim.php?update=<?php echo $row['ma_bim']; ?>">
                  Cập nhật</a></td>
                  <td><a href="DeleteBimProcess.php?delete=<?php echo $row['ma_bim']; ?>" 
                  onClick="return confirm('Bạn có thực sự muốn xóa ?');">Xóa</a></td>
                </tr>
            <?php
            }
            ?>
            </table>
        </div>
        <style>
            .table{
                border: none;
            }
        </style>
</body>

    