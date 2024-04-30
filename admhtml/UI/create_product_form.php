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
            <h2>Thông Tin Sản Phẩm</h2>
            <form class="product-form" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="product-name">Tên Sản Phẩm</label>
                    <input type="text" id="product-name" name="product-name" placeholder="Tên sản phẩm" required>
                </div>
                <div class="input-group">
                    <label for="price">Giá</label>
                    <input type="number" id="price" name="price" placeholder="Giá sản phẩm" step="10000" required>
                </div>
                <div class="input-group">
                    <label for="discount">Giảm Giá</label>
                    <input type="number" id="discount" name="discount" placeholder="Giá được giảm" step="10000" required>
                </div>
                <div class="input-group">
                    <label for="date-up">Ngày sản xuất</label>
                    <input type="date" id="date-up" name="date-up" placeholder="Ngày sản xuất" required>
                </div>
                <div class="input-group">
                    <label for="image">Hình ảnh</label>
                    <input type="file" id="image" name="image" accept="image/*" required>
                </div>
                <div class="input-group">
                    <label for="product-type">Loại sản phẩm</label>
                    <select id="product-type" name="product-type">
                        <option value="option1">Sản phẩm xxxx</option>
                        <option value="option2">Sản phẩm xxxxdefe</option>
                        <option value="option3">Sản phẩm xxxxferf78e</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="pre-price">Giá vốn</label>
                    <input type="number" id="pre-price" name="pre-price" placeholder="Giá vốn" step="10000" required>
                </div>
                <button type="submit">Tạo Sản Phẩm</button>
            </form>
        </div>
    </div>
</body>

</html>