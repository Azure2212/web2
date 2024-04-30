<?php
require_once('../../htmlnew/library.php');

$isEditFlag = false;
$row ='';
if(isset($_REQUEST['typePage']) && $_REQUEST['typePage'] =='chinhsuasp'){
    $conn = connectDB();
    $isEditFlag = true;
    $result = $conn->query(sprintf("select * from sanpham where masp ='%s'",$_REQUEST['idsp']));
    $row=$result->fetch_assoc();

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
             <?php if($isEditFlag == true ){echo '<h2>Chỉnh sửa sản phẩm</h2>'; } else echo '<h2>Tạo sản phẩm</h2>'; ?>
             
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
            <h2>Thông Tin Sản Phẩm <?= $row['MALSP'] ?></h2>
            <form action="thaotacsanpham.php" class="product-form" method="post" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="product-name">Tên Sản Phẩm</label>
                    <input type="text" id="product-name" name="product-name" placeholder="Tên sản phẩm" value="<?= $row['tensp'] ?>" required>
                </div>
                <div class="input-group">
                    <label for="pre-price">Giá vốn</label>
                    <input type="number" id="pre-price" name="pre-price" placeholder="Giá vốn" step="10000" value="<?= $row['giavon'] ?>" required>
                </div>
                <div class="input-group">
                    <label for="price">Giá</label>
                    <input type="number" id="price" name="price" placeholder="Giá sản phẩm" step="10000" value="<?= $row['gia'] ?>" required>
                </div>
                <div class="input-group">
                    <label for="discount">Giảm Giá</label>
                    <input type="number" id="discount" name="discount" placeholder="Giá được giảm" step="10000" value="<?= $row['giamgia'] ?>" required>
                </div>
                <div class="input-group">
                    <label for="date-up">Ngày sản xuất</label>
                    <input type="date" id="date-up" name="date-up" placeholder="Ngày sản xuất" value="<?= $row['ngaysx'] ?>" required>
                </div>
             
                <div class="input-group">
                    <label for="product-type">Loại sản phẩm</label>
                    <select id="product-type" name="product-type">
                        <?php
                         $loaisp = ['Điện thoại', "Laptop", "Đồng Hồ đeo tay","Tai nghe"];
                         $MALSP = ['00001', '00002', '00003', '00004'];
                        for($i= 0;$i<count($loaisp);$i++){
                           
                            if($row['MALSP'] == $MALSP[$i]){
                                echo " <option  selected>".$loaisp[$i]."</option> ";
                            }else{
                                echo " <option >".$loaisp[$i]."</option> ";
                            }
                        } 
                        ?>
                    </select>
                </div>
                <div class="input-group">
                    <label for="image">Hình ảnh</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" <?php if($isEditFlag!=true) echo 'required' ?> >
                   
                </div>
               
                <button type="submit"> <?php if($isEditFlag==true) echo 'Sửa Sản Phẩm'; else echo 'Tạo Sản Phẩm' ?></button>
                <input type="hidden" name="loaithaotacsanpham" value="<?php if($isEditFlag==true)echo 'sua'; else echo 'them' ?>">
                <input type="hidden" name="idsp" value="<?php if($isEditFlag==true)echo $row['masp']; else echo '' ?>">
            </form>
        </div>
    </div>
</body>

</html>