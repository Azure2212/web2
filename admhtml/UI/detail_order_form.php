<?php 
require_once("../../htmlnew/library.php");
if(!isset($_SESSION['userInfor'])) {
    header("location: login.php");
}
$connectDB = ConnectDB();

$bill = $connectDB->query("select * from bill where id ='".$_REQUEST['mabill']."'");
$bill = $bill->fetch_assoc();

$details = $connectDB->query("select * from chitietbill where mabill ='".$_REQUEST['mabill']."'");

$sp = $connectDB->query("select * from sanpham");
$sanpham = array();
while($row = $sp->fetch_assoc()){
    $sanpham[$row['masp']] = $row;
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
                        <a href="login.php">Đăng nhập</a>
                        <a href="#">Tài Khoản</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="form-wrapper">
        <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Chi tiết đơn hàng</h5>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                    <span class="cart-price cart-header cart-column">Giá</span>
                    <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                </div>
            </div>
                <div class="cart-items">
                    
                    <!-- php cho nay -->
                    
                    <?php 
                   while($row = $details->fetch_assoc()){
                            
                        $rowSP= $sanpham[$row['MASP']];
                        $sum =0;
                           ?>
                            
                            <div class="cart-row">
                                <div class="cart-item cart-column">
                                    <img class="cart-item-image" src="<?=$rowSP['image'] ?>" width="100" height="100">
                                    <span class="cart-item-title"><?=$rowSP['tensp']?></span>
                                </div>
                                <span class="cart-price cart-column"><?php if($rowSP['gia']==$rowSP['giamgia']){ $sum=$sum+$rowSP["gia"]*($row['soluong']); echo $rowSP['gia'];} else{$sum=$sum+$rowSP["giamgia"]*($row['soluong']); echo $rowSP['giamgia'];} ?></span>
                                <div class="cart-quantity cart-column">
                                    <input class="cart-quantity-input" type="text"  value="<?php echo $rowSP["gia"]*($row['soluong']); ?>">
                    
                                </div>
                            </div>
                        <?php } ?>
                    <?php  $connectDB->close(); ?>

                    
                    
                </div>
         <form action="thaotacmua.php" method="post" onsubmit="return validateForm1()">
                <div class="cart-total">
                    <strong class="cart-total-title">Tổng Cộng:</strong>
                    <span class="cart-total-price"><?=$sum?>USD</span>
                </div>
        
           
          
            <input type="hidden" name="mua" value="1">
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary order">Thanh Toán</button>
            </div>
            </div>
            <?php if(isset($_REQUEST['done'])){ 
                echo "<br>";
                if($_REQUEST['done']==1){
                    echo "<b><i style='color:red;font-size:25px;margin-left:35%;font-weight;text-shadow:2px 2px 2px orange;'>cảm ơn quý khách đã mua hàng tại SVT!</i></b>";
                }
                else if($_REQUEST['done']==2){
                     echo "<b><i style='color:red;font-size:25px;margin-left:40%;font-weight;text-shadow:2px 2px 2px aqua;'>quý khách chưa có gì trong giỏ hàng!</i></b>";
                }

            } ?>
            <br><br><br><br><br><br>
        </div>
    </div>
</body>

</html>