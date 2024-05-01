<?php 
require_once("../../htmlnew/library.php");
if(!isset($_SESSION['userInfor'])) {
    header("location: login.php");
}
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
                <span>Hello</span>
                <h2>Trang chủ</h2>
            </div>
            <div class="user-info">
                <div class="search-box">
                    <i class="fa-solid fa-search">
                    </i>
                    <input type="text" placeholder="Search" />
                </div>
                <div class="dropdown">
                    <img src="<?php echo $_SESSION["userInfor"]["avatar"]; ?>" style="width: 50px; height: 50px;">
                    <div class="dropdown-item">
                        <!-- Nội dung của dropdown ở đây -->
                    </div> 
                </div>
            </div>
        </div>

        <div class="card-container">
            <h3 class="main-title">Doanh thu hôm nay</h3>
            <div class="card-wrapper">
                <div class="payment-card light-red">
                    <div class="card-header">
                        <div class="amount">
                            <span class="title">
                                Tổng doanh thu
                            </span>
                            <span class="amount-value">27.000.000 đ</span>
                        </div>
                        <i class="fas fa-dollar-sign icon"></i>
                    </div>

                    <span class="card-detail">
                        **** **** **** 1620
                    </span>
                </div>

                <div class="payment-card light-purple">
                    <div class="card-header">
                        <div class="amount">
                            <span class="title">
                                Tổng đơn đặt hàng
                            </span>
                            <span class="amount-value">1228</span>
                        </div>
                        <i class="fas fa-list icon dark-purple"></i>
                    </div>

                    <span class="card-detail">
                        **** **** **** 1620
                    </span>
                </div>

                <div class="payment-card light-default-gray">
                    <div class="card-header">
                        <div class="amount">
                            <span class="title">
                                Khách mua hàng
                            </span>
                            <span class="amount-value">569</span>
                        </div>
                        <i class="fas fa-users icon dark-green"></i>
                    </div>

                    <span class="card-detail font-custom">
                        **** **** **** 1620
                    </span>
                </div>

                <div class="payment-card light-default-gray">
                    <div class="card-header">
                        <div class="amount">
                            <span class="title">
                                Hoàn tất thanh toán
                            </span>
                            <span class="amount-value">275</span>
                        </div>
                        <i class="fas fa-solid fa-check icon dark-blue"></i>
                    </div>

                    <span class="card-detail font-custom">
                        **** **** **** 1620
                    </span>
                </div>

                <div class="payment-card light-default-gray">
                    <div class="card-header">
                        <div class="amount">
                            <span class="title">
                                Ai biet
                            </span>
                            <span class="amount-value">0</span>
                        </div>
                        <i class="fas fa-solid fa-house icon"></i>
                    </div>

                    <span class="card-detail font-custom">
                        **** **** **** 0000
                    </span>
                </div>
            </div>
        </div>

        <!-- Table ne -->
        <div class="table--wrapper">
            <h3 class="main-title">Dữ liệu</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Ngày lập</th>
                            <th>Giao dịch</th>
                            <th>Mô tả</th>
                            <th>Tổng tiền</th>
                            <th>Loại</th>
                            <th>Tình trạng</th>
                            <th style="width: 20px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024-04-28</td>
                            <td>Online</td>
                            <td>Đặt hàng trong ngày</td>
                            <td>999.000</td>
                            <td>Bán hàng</td>
                            <td>Chưa hoàn tất</td>
                            <td>
                                <div class="dropdown">
                                    <button><i class="fas fa-edit"></i></button>
                                    <div class="dropdown-item">
                                        <a>Xóa</a>
                                        <a>Sửa</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="7">Tổng cộng: 999.000 đ</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>

</html>