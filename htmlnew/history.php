<?php
require_once("library.php");
$conn = ConnectDB();

$result = $conn->query("select * from bill where userId ='".$_SESSION['khachhang']['id']."'");
$sum = 0;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="../css/giohang1.css">
    <link rel="StyleSheet" href="../css/history.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i&display=swap">


    <title>sản phẩm</title>
    <script>
        function validateForm() {
            var u = document.getElementById("nvn").value;
            if (u.trim() == "") {
                alert("xin vui lòng hãy nhập gì đó!");
                return false;
            }


            return true;
        }

        function validateForm1() {
            var u1 = document.getElementById("texta").value;
            var u2 = document.getElementById("textb").value;
            var u3 = document.getElementById("textc").value;
            if (u1.trim() == "" || u2.trim() == "" || u3.trim() == "") {
                alert("xin vui lòng nhập đầy đủ thông tin ở bên dưới !");
                return false;
            }


            return true;
        }
    </script>
</head>

<body>
    <form action="" method="get" name="frm1" onsubmit="return validateForm()">
        <div class="menutren">
            <ul class="menungang">
                <li class="a2"><a href=""><img class="a5" src="../image/icon1.png" alt="erro"> SVT@gmail.com</a> </li>
                <li class="a1"><a class="hi" href=""><img class="a5-1" src="../image/icon2.png" alt=""> 0941235169</a> </li>
                <li class="p1"><a href="daily.php">Hệ thống phân phối </a> </li>
                <li class="p2"><a href="giohang.php"> <img class="a5-2" src="../image/cart-73-24.png" alt="">Giỏ Hàng </a> </li>
            </ul>

        </div>
        <div class="sidebar">
            <div class="logo"> <a href="../htmlnew/nhap.php"> <img class="aa" src="../image/ganmac.jpg" alt=""></a></div>
            <nav>
                <ul>
                    <li> <a href="../htmlnew/gioithieu.php" class="b1">Giới thiệu</a>
                    </li>

                    <li><a href="../htmlnew/sanpham.php?productType=All&page=1" class="b2">Sản Phẩm</a>
                        <ul class="cap_2">

                            <li> <a href="../htmlnew/sanpham.php?productType=phone&page=1"> Phone</a> </li>
                            <li> <a href="../htmlnew/sanpham.php?productType=laptop&page=1"> Latop</a> </li>
                            <li> <a href="../htmlnew/sanpham.php?productType=watch&page=1"> Watch</a> </li>
                            <li> <a href="../htmlnew/sanpham.php?productType=headphone&page=1"> HeadPhone</a> </li>


                        </ul>
                    </li>

                    <li><a href="../htmlnew/tuyendung.php">Tuyển Dụng</a></li>
                    <li><a href="../htmlnew/tintuc.php">Tin Tức</a></li>

                    <li> <input type="text" class="a6" placeholder=" <?php if (isset($_GET["nvn"])) {
                                                                            if (strlen(str_replace(" ", "", $_GET["nvn"])) == 0)
                                                                                echo "bạn chưa nhập gì cả!";
                                                                            else
                                                                                findSomeThing($_GET["nvn"]);
                                                                        } else echo "Bạn tìm gì?"; ?>" name="nvn" id="nvn" style="height: 30px; padding-top: 5px; border:none;width:auto;"><input type="submit" name="find" value="" class="b21" /></li>
                    <input type="hidden" name="productType" value="find" />
                    <input type="hidden" name="page" value="1" />

                </ul>
            </nav>
        </div>
    </form>

    <div class="main-content">
        <form class="product" action="order_m.php" method="get" enctype="multipart/form-data">
            <!-- Table ne -->

            <div class="table--wrapper">
                <div class="table-title">
                    <div class="table-header">
                        <h3 class="main-title">Danh Sách Đơn Đặt Hàng</h3>
                    </div>
                    <div class="table-action">
                      
                        <!-- <div class="gr-btn1">
                            <a class="btn-title" href="detail_order_form.php">Tạo đơn hàng</a>
                        </div> -->
                    </div>
                </div>

            

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Ngày lập</th>
                                <th>Số lượng</th>
                                <th>Tên Khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Tình trạng</th>
                                <th>Ngày cập nhất cuối cùng</th>
                                <th style="width: 20px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row['date'] ?></td>
                                    <td><?= $row['soluong'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['phone'] ?></td>
                                    <td><?= $row['address'] ?></td>
                                    <td><?= mapping_Status($row['status']) ?></td>
                                    <td><?= $row['lastDateUpdated'] ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button><i class="fas fa-edit"></i></button>
                                            <div class="dropdown-item">
                                                <a href="detail_order_form.php?mabill=<?= $row['id'] ?>">Xem chi tiết</a>
                                                <a href="thaotacorder.php?loaithaotacorder=cancel&mabill=<?= $row['id'] ?>">Hủy</a>
                                                <a href="thaotacorder.php?loaithaotacorder=done&mabill=<?= $row['id'] ?>">Hoàn thành</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </form>
    </div>
   
    </form>




    <br><br><br><br><br><br>



    </div>

    <!-- endgiohang -->



    <table style="width: 100%;background-color:rgba(0,0,0,0.8);">
        <tr>
            <td class="a1112">THÔNG TIN SINH VIÊN TECHNOLOGY </td>

            <td class="a1113">HƯỚNG DẪN CHUNG</td>

            <td class="a1112">HỖ TRỢ KHÁCH HÀNG</td>

            <td class="a1113">TSOCIAL </td>

        </tr>

        <tr>
            <td class="a111"><a href="">Giới thiệu công ty</a></td>
            <td class="a112"><a href="">Giao hàng - Đổi trả</a></td>

            <td class="a111">Gọi mua hàng:<a href="" class="cuoi"> 0901083627</a> (Miễn Phí)</td>
            <td rowspan="2">
                <a href=""> <img src="../image/aaa.jpg" alt="" class="a13"></a>
                <a href=""> <img src="../image/zalo.jfif" alt="" class="a13"></a>
                <a href=""><img src="../image/z3065110575113_cbb8e61010a4ed39f408fc1a754fb038.jpg" alt="" class="a13"></a>

            </td>
        </tr>

        <tr>
            <td class="a111"><a href=""> Hệ thống showroom, đại lý </a></td>

            <td class="a112"><a href="">Hướng dẫn mua hàng</a></td>

            <td class="a111">Khiếu nại, Bảo hành:<a href="" class="cuoi"> 0901083627</a></td>
        </tr>

        <tr>
            <td class="a111"><a href="">Liên Hệ / Góp Ý</a> </td>

            <td class="a112"><a href="">Thanh toán và bảo mật</a></td>

            <td class="a111">Thời gian phục vụ: 8h-22h</td>

            <td class="a1114">HỆ THỐNG WEBSITE </td>
        </tr>

        <tr>

            <td class="a111"><a href="">Mua trả góp</a></td>

            <td class="a112"><a href="">Chính sách bảo hành</a></td>
            <td class="a111">Email: svt@gmail.vn</td>
            <td> </td>
        </tr>

        <tr>
            <td class="a111"><a href="">Chương trình Khách hàng thân thiết</a> </td>

            <td class="a112"><a href="">Bảo trì sản phẩm</a></td>

            <td> </td>

            <td class="a112"><a href="">SVT Shop</a></td>
        </tr>

        <tr>
            <td class="a111"><A href="">Điều khoản sử dụng website</A> </td>

            <td class="a112"><A href="">Kích hoạt bảo hành</A></td>
            <td> </td>

            <td class="a112"><a href="">Sinh Viên Technology</a></td>
        </tr>
        <tr>
            <td class="a111"><a href="tuyendung.php">Tuyển dụng</a></td>
            <td> </td>
            <td> </td>
            <td class="a112"><a href="">SVT Hồ Chí Minh</a></td>
        </tr>

        <tr class="a15">
            <td><br><br></td>
            <td><br><br></td>
            <td><br><br></td>
            <td><br><br></td>

        </tr>

        <tr>
            <td colspan="2" class="a16"> CÔNG TY CỔ PHẦN TM-DV-SVT </td>
            <td></td>
            <td class="a20">CÁCH THỨC THANH TOÁN</td>
        </tr>

        <tr>

        </tr>
        <tr>
            <td> </td>
            <td>

            </td>
            <td>
                <a href=""> <img src="https://vietthuong.vn/assets/frontend/images/thanhtoan.png" alt=""></a>
            <td><br></td>

            </td>
        </tr>
        <tr>
            <td class="a1115"> Địa chỉ: 89 Trần Đình Xu, Q1, TP.HCM </td>
        </tr>

        <tr>
            <td class="a1115"> Điện thoại: <a class="a1-1">09412355169</a></td>
        </tr>
        <tr>
            <td class="a1115"> Hotline: <a class="a1-1">0785073528</a></td>
        </tr>
        <tr>
            <td class="a1119"> Email: svt@gmail.com</td>
        </tr>

    </table>
    </footer>
    <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</button>
</body>
<script>
    var mybutton = document.getElementById("myBtn");

    window.onscroll = function() {
        scrollFunction()
    }; /* function trong function*/

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script src="../js/link.js"></script>
<script src="../js/giohang.js"></script>

</html>


<style>
    .filter-content {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .filter-content label {
        margin-right: 10px;
    }

    .filter-content input[type="date"] {
        padding: 8px 12px;
        margin-right: 10px;
        /* Add margin between inputs */
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .filter-content input[type="date"]:hover {
        border-color: #aaa;
    }

    .filter-content input[type="date"]:focus {
        border-color: #007bff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .filter-content select {
        width: 150px;
        padding: 8px 12px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .filter-content select:hover {
        border-color: #aaa;
    }

    .filter-content select:focus {
        border-color: #007bff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
</style>