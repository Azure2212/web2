<?php
// require_once("../../htmlnew/library.php");
// if(!isset($_SESSION['userInfor'])) {
//     header("location: login.php");
// }
// $connectDB = ConnectDB();

// $bill = $connectDB->query("select * from bill where id ='".$_REQUEST['mabill']."'");
// $bill = $bill->fetch_assoc();

// $details = $connectDB->query("select * from chitietbill where mabill ='".$_REQUEST['mabill']."'");

// $sp = $connectDB->query("select * from sanpham");
// $sanpham = array();
// while($row = $sp->fetch_assoc()){
//     $sanpham[$row['masp']] = $row;
// }


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
                <a href="order_m.php">
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
                <a href="login.php">
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
                <h2>Tạo sản phẩm</h2>
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
                        <!-- <a href="login.php">Đăng nhập</a>
                        <a href="#">Tài Khoản</a> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Form -->


        <!-- -------------------------- -->
        <!-- new Detail  -->
        <div class="form-wrapper">

            <div class="modal-header">
                <h5 class="modal-title">Chi tiết đơn hàng</h5>
            </div>
            <div class="modal-body">
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                    <span class="cart-price cart-header cart-column">Giá</span>
                    <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                    <span class="cart-delete cart-header cart-column"></span>
                </div>
                <div class="cart-items">
                    <div class="cart-row">
                        <div class="cart-item cart-column">
                            <img class="cart-item-image" src="path/to/image.jpg" width="100" height="100">
                            <span class="cart-item-title">Tên sản phẩm 1</span>
                        </div>
                        <span class="cart-price cart-column">100 USD</span>
                        <div class="cart-quantity cart-column">
                            <input class="cart-quantity-input" type="text" value="1">
                        </div>
                        <div class="cart-delete cart-column">
                            <button class="btn btn-danger">Xóa</button>
                        </div>
                    </div>
                    <div class="cart-row">
                        <div class="cart-item cart-column">
                            <img class="cart-item-image" src="path/to/image.jpg" width="100" height="100">
                            <span class="cart-item-title">Tên sản phẩm 2</span>
                        </div>
                        <span class="cart-price cart-column">150 USD</span>
                        <div class="cart-quantity cart-column">
                            <input class="cart-quantity-input" type="text" value="12">
                        </div>
                        <div class="cart-delete cart-column">
                            <button class="btn btn-danger">Xóa</button>
                        </div>
                    </div>
                </div>
                <div class="cart-total">
                    <strong class="cart-total-title">Tổng Cộng:</strong>
                    <span class="cart-total-price">250 USD</span>
                </div>
                <form action="thaotacmua.php" method="post" onsubmit="return validateForm1()">
                    <input type="hidden" name="mua" value="1">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary order">Thanh Toán</button>
                    </div>
                </form>
            </div>
        </div>

        <h1>Gắn lại event PHP cho form mới ở đây, cái cũ ko xài đc :))</h1>
        <h1>Cái cũ trong thư file</h1>
        <h3>detail_old.php</h3>
    </div>
</body>

</div>

</html>


<style>
    .form-wrapper {
        background: #fff;
        margin-top: 1rem;
        border-radius: 10px;
        padding: 2rem;
    }



    .modal-header {
        padding: 10px 0;
        border-bottom: 5px solid #ddd;
    }

    .modal-title {
        margin: 0;
        font-size: 20px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-body {
        padding: 10px 0;
    }

    .cart-row {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
        justify-content: center;
        align-items: center;
    }

    .cart-item {
        flex: 2;
        display: flex;
        align-items: center;
    }

    .cart-price,
    .cart-quantity {
        flex: 1;
        text-align: center;
    }

    .cart-quantity-input {
        text-align: center;
    }

    .cart-item-image {
        margin-right: 10px;
    }

    .cart-total {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
        border-top: 5px solid #ddd;
        padding-top: 10px;
    }

    .cart-total-title {
        font-weight: bold;
    }

    .cart-total-price {
        font-weight: bold;
        color: #555;
    }

    .order {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .order:hover {
        background-color: #0056b3;
    }

    .cart-delete {
        flex: 0.5;
        text-align: center;
    }

    .cart-delete button {
        padding: 5px 10px;
        background-color: #dc3545;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .cart-delete button:hover {
        background-color: #c82333;
    }
</style>