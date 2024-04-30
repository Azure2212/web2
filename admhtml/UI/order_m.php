<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn đặt hàng</title>
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
                    <h3 class="main-title">Danh Sách Đơn Đặt Hàng</h3>
                </div>
                <div class="table-action">
                    <div class="gr-btn2">
                        <button class="btn-title"><i class="fa-solid fa-search"></i></button>
                    </div>
                    <div class="gr-btn1">
                        <a class="btn-title" href="create_order_form.php">Tạo đơn hàng</a>
                    </div>
                </div>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Ngày lập</th>
                            <th>Tên đơn</th>
                            <th>Số lượng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tình trạng</th>
                            <th style="width: 20px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024-04-28</td>
                            <td>DASAD</td>
                            <td>12</td>
                            <td>09775305884</td>
                            <td>Q1</td>
                            <td>Chưa hoàn tất</td>
                            <td>
                                <div class="dropdown">
                                    <button><i class="fas fa-edit"></i></button>
                                    <div class="dropdown-item">
                                        <a>Xóa</a>
                                        <a href="create_order_form.php">Sửa</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <ul class="pagination">
                <li><a href="#">
                        << /a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">></a></li>
            </ul>
        </div>
    </div>
</body>

</html>