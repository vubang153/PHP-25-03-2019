<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Thống kê</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/plugins/morris.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style type="text/css">
        * {
            font-family: Roboto;
            font-size: 13px;
            margin:0px;
        }
        body {
            width: 800px;
            height: 1000px;
       }
       th {
        background: green;
       }
       p {
        font-weight: bold;
       }
    </style>
<?php
session_start();
$month = "";
$year = "";
if (isset($_POST["submit"] )) {
    $month = $_POST["month"];
    $year = $_POST["year"];
    $sql2 = "select * from dondathang where year(ngay_dat) ={$year} and month(ngay_dat) = {$month}";
}
else {
    $sql2 = "select * from dondathang";
}
$sql = "select * from dondathang";
include("../main/connect.php");
$result2 = mysqli_query($con,$sql2);
$numRow = mysqli_num_rows($result2);
?>
</head>
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
       <div id="page-wrapper" style="width: 100%;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" align="center">
                          Thống Kê
                        </h1>
                    </div>
                </div>
            </div>
        <div>
        <head>
    
</head>
</body>
    <div style="width: 1000px;margin-left: 10px;height: auto;" >
        <form action="ThongKe.php" method="POST" accept-charset="utf-8">
            <table >
                <tr>
                    <td><p>Thống kê theo tháng </p>
                    </td>
                    <td>
                    <select name="month">
                        <?php
                        for ($i=1; $i < 31 ; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <select name="year">
                        <?php
                        for ($i=1990; $i < 2020 ; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    </td>
                    <td><input style="background:green;border-style: none;color: white;" type="submit" name="submit" value="Tìm kiếm"></td>
                </tr>
            </table>
        </form>
        <?php if ($numRow ==0) {
            echo "<p>Không tìm thấy dữ liệu</p>";
        }
            else {
                echo "<p>Có $numRow đơn hàng</p>    ";
}
?>
        <table style="width: 100%;  " border="1" class="table">
        <?php  if ($numRow > 0) { ?>
        <tr>
            <th>MÃ ĐƠN HÀNG</th>
            <th>MÃ KHÁCH HÀNG</th>
            <th>NGÀY ĐẶT</th>
            <th>TỔNG TIỀN</th>
            <th>ĐỊA CHỈ NHẬN HÀNG</th>
            <th>TRẠNG THÁI</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result2) ) {
            ?>
            <tr>
                <td><?php echo $row["ma_dh"]?>
                </td>
                <td><?php echo $row["ma_kh"]?>
                </td>
                <td><?php echo $row["ngay_dat"]?>
                </td>
                <td><?php echo $row["tong_tien"]?>
                </td>
                <td><?php echo $row["noi_giao"]?>
                </td>
                <td><?php echo $row["trang_thai"]?>
                </td>
            </tr>
        <?php
        }
        ?>
        </table>
    <?php } ?>
        </table>
    </div>
</body>
</html>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>
</body>

</html>
