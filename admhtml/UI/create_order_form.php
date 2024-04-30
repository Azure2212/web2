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
                        <a href="login.php">Đăng nhập</a>
                        <a href="#">Tài Khoản</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="form-wrapper">
            <h2>Thông Tin Đơn Đặt Hàng </h2>
            <form class="product-form" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="date-create">Ngày lập</label>
                    <input type="date" id="date-create" name="date-create" placeholder="Ngày lập đơn" required>
                </div>
                <div class="input-group">
                    <label for="order-name">Tên đơn</label>
                    <input type="text" id="order-name" name="order-name" placeholder="Tên đơn hàng" required>
                </div>
                <div class="input-group">
                    <label for="qty">Số lượng</label>
                    <input type="number" id="qty" name="qty" placeholder="Số lượng" step="1" required>
                </div>
                <div class="input-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" id="phone" name="phone" placeholder="+84" required>
                </div>
                <div class="input-group">
                    <label for="status">Tình trạng</label>
                    <select id="status" name="status">
                        <option value="option1">SUCCESS</option>
                        <option value="option2">FAILED</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="address">Địa chỉ</label>
                    <textarea id="address" name="address" placeholder="Địa chỉ nhận hàng" required></textarea>
                </div>
                <button type="submit">Tạo Đơn Hàng</button>
            </form>
        </div>
    </div>
</body>

</html>