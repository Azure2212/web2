<?php
require_once('../../htmlnew/library.php');

$connDB = connectDB();
#cho phân trang
$productAmount = $connDB->query("select count(*) as total from sanpham where trangthai = 1");
$productAmount = $productAmount->fetch_assoc()["total"];
$productPerPage = 20;
$totalPage = Ceil($productAmount / $productPerPage);

$sql = getAllProductQuery($_REQUEST['page'],$productPerPage);

$result = $connDB->query($sql);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Quản Trị Viên</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i&display=swap">
</head>

<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="index.php">
                    <i class="fas fa-tachometer-alt">
                        <span>Trang chủ </span>
                    </i>
                </a>
            </li>
            <li>
                <a href="product_m.php?page=1">
                    <i class="fas fa-box">
                        <span>Quản Lý Sản Phẩm </span>
                    </i>
                </a>
            </li>
            <li>
                <a href="order_m.php?page=1">
                    <i class="fas fa-tag">
                        <span>Quản Lý Đơn Hàng </span>
                    </i>
                </a>
            </li>
            <li>
                <a href="report_m.php">
                    <i class="fas fa-chart-area">
                        <span>Báo cáo </span>
                    </i>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class="fas fa-sign-out">
                        <span>Đăng xuất</span>
                    </i>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header-wrapper">
            <div class="header-title">
                <span>Danh mục</span>
                <h2>Quản lý đơn đặt hàng</h2>
            </div>
            <div class="user-info">
                <div class="search-box">
                    <i class="fa-solid fa-search">
                    </i>
                    <input type="text" placeholder="Search" />
                </div>
                <div class="dropdown">
                    <img src="assets/10_NMT.jpg" style="width: 50px; height: 50px;">
                    <div class="dropdown-item">
                        <!-- Nội dung của dropdown ở đây -->
                        <a href="login.php">Đăng nhập</a>
                        <a href="#">Tài Khoản</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table ne -->
        <div class="table--wrapper">
            <div class="table-title">
                <div class="table-header">
                    <h3 class="main-title">Danh Sách Sản Phẩm</h3>
                </div>
                <div class="table-action">
                    <div class="gr-btn2">
                        <button class="btn-title"><i class="fa-solid fa-search"></i></button>
                    </div>
                    <div class="gr-btn1">
                        <a class="btn-title" href="create_product_form.php">Tạo sản phẩm</a>
                    </div>
                </div>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 100px;">Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá vốn</th>
                            <th>Giá bán</th>
                            <th>Giá giảm</th>
                            <th>Loại</th>
                            <th style="width: 20px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><img src="<?= $row['image'] ?>" style="width: 40px; height: 40px;"></td>
                                <td><?= $row['tensp'] ?></td>
                                <td><?= $row['giavon'] ?></td>
                                <td><?= $row['gia'] ?></td>
                                <td><?= $row['giamgia'] ?></td>
                                <td><?= TypeProduct($row['MALSP']) ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button><i class="fas fa-edit"></i></button>
                                        <div class="dropdown-item">
                                            <a href="thaotacsanpham.php?loaithaotacsanpham=xoa&idsp=<?= $row['masp'] ?>">Xóa</a>
                                            <a href="create_product_form.php?typePage=chinhsuasp&idsp=<?= $row['masp'] ?>">Sửa</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>

            <ul class="pagination">
                <li><a href='product_m.php?page=1'><<</a></li>
                <?php 
                    if($_REQUEST['page']!= 1) 
                        echo sprintf("<li><a href='product_m.php?page=%d'><</a></li>",$_REQUEST['page']-1);
                    else 
                        echo "<li><a href='#'><</a></li>";    
                ?>
                <li><a href="#"><?= $_REQUEST['page'].'/'.$totalPage  ?></a></li>
                <?php 
                    if($_REQUEST['page'] != $totalPage) 
                        echo sprintf("<li><a href='product_m.php?page=%d'>></a></li>",$_REQUEST['page']+1);
                    else 
                        echo "<li><a href='#'>></a></li>";           
                ?>
                <li><a href='product_m.php?page=<?=$totalPage?>'>>></a></li>
            
            </ul>
        </div>
    </div>
</body>

</html>