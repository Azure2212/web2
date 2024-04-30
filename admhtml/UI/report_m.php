<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báo cáo thống kê</title>
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
                    <h3 class="main-title">Danh Sách Báo Cáo và Thống Kê</h3>
                </div>
                <div class="table-action">
                    <div class="gr-btn2">
                        <button class="btn-title"><i class="fa-solid fa-search"></i></button>
                    </div>
                    <div class="gr-btn1">
                        <button class="btn-title">Tạo sản phẩm</button>
                    </div>
                </div>
            </div>
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