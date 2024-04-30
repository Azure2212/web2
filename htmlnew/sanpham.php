<?php
require_once('library.php');


$conn = connectDB();

$title="??";
$sql="??";
$count='';
$sql = checkTypeAction($title,$count);
echo 'concho'.$sql;
$number=$conn->query($count);
  
$temp=$number->fetch_assoc();
  // echo ($temp['num']) ;




$result = $conn->query($sql);
$conn->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="../css/sanpham3.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
     /* include '../css/sanpham.css';  */
    </style>
    <title>sản phẩm</title>
    <script>
      function validateForm()  {
             var u = document.getElementById("nvn").value;
             if(u.trim()== "") {
                 alert("xin vui lòng hãy nhập gì đó!");
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
      <li class="a2"><a href=""><img class="a5" src="../image/icon1.png" alt="erro" > SVT@gmail.com</a> </li>
      <li class="a1" ><a  class="hi" href=""><img class="a5-1" src="../image/icon2.png" alt=""> 0941235169</a> </li>
      <li class="p1" ><a href="daily.php" >Hệ thống phân phối </a> </li>
      <li class="p2" ><a href="giohang.php" >  <img class="a5-2" src="../image/cart-73-24.png" alt="">Giỏ Hàng </a> </li>
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
                        
                        
                      </ul></li>
           
                  <li><a href="../htmlnew/tuyendung.php">Tuyển Dụng</a></li>
                  <li><a href="../htmlnew/tintuc.php">Tin Tức</a></li>
                
                  <li> <input type="text"class="a6" placeholder=" <?php if(isset($_GET["nvn"])){
                                                                          if(strlen(str_replace(" ","",$_GET["nvn"]))==0)
                                                                            echo "bạn chưa nhập gì cả!";
                                                                          else echo "Bạn cần tìm gì?";
                                                                          }    
                                                                      
                                                            
                                                                    
                                                                        else echo "Bạn cần tìm gì?"; ?>"
                                                                         name="nvn" id="nvn" style="height: 30px; padding-top: 5px; border:none;width:auto;"><input type="submit" name="find" value=""  class="b21"  /></li>
                  <input type="hidden" name="productType" value="find"/>
                  <input type="hidden" name="page" value="1"/>
                  
                </ul>
          </nav>
      </div>       
                                                                      </form>
           
                  


                 




              
                </ul>
          </nav>
      </div>       
   
     <!-- mainsanpham -->
  

     <br>
     <div class="a10"><a class="a15" href="../htmlnew/nhap.php">Trang chủ </a> > <a class="a15" href="../htmlnew/sanpham.php">Sản Phẩm </a> > <a class="a15" href=""><?php echo $title?> </a>  </div>
     <br>
     <!-- sanpham(dien thoai iphone) -->
     <!-- hang sp 1-->
     <br>
     <h1 class="h1-iphone" id="iphone"><img class="hinh-apple" src="../image/imagesapple.png"> <?php echo $title ?> </h1>
     <br>

<?php

$row=$result->fetch_assoc();
if($row==null){
  // echo "vo day";
  // $tag="Location: sanphamrong.php?&result=sản phẩm này";  
  // #header($tag);
  // header("Location: sanphamrong.php");
  // exit;
  
}



if($row!=null){?>
<div class="sp4444">
       <div class="sp444">
       <div class="sp44">
         <a href="../htmlnew/sanpham1.php?&code=<?= $row['masp'] ?>"><img class="sp44-4" src="<?php echo '../admhtml/'.str_replace('../', '', $row["image"])?>" alt="" width="370px" height="391px">
         </a>
         <div class="sp4-4">
         <h4 class="sp4-1"> <a  class="sp4-1-1" href=""> <?= $row["tensp"] ?></a> </h4>
         <?php if($row['giamgia'] !=$row['gia']){ ?>
             <h4 class="sp4-2">Giá:  <?= $row["giamgia"] ?>USD <del class="c12"> (<?= $row["gia"] ?>USD)</del></h4>
         <?php } else{?>
             <h4 class="sp4-2">Giá:  <?= $row["gia"] ?>USD </h4>
          <?php }?>
                 <a class="c12"><?  $row["ngaysx"] ?></a>
               
            <form action="thaotacmua.php" method="get">
            <div class="tooltip">   <input type="submit" name="n" id="n"  class="m1" value="+">  
            <span class="ambition">thêm vào giỏ hàng </span></div>  
            <input type="hidden" name="code" value="<?=$row['masp']?>">
         </form>
      </div>       
      </div>
<?php } 
?>

<?php
$row=$result->fetch_assoc();
if($row!=null){?>
      <div class="sp44">
      <a href="../htmlnew/sanpham1.php?&code=<?= $row['masp'] ?>"><img class="sp44-4" src="<?php echo '../admhtml/'.str_replace('../', '', $row["image"])?>" alt="" width="370px" height="391px">
         </a>
         <div class="sp4-4">
         <h4 class="sp4-1"> <a  class="sp4-1-1" href=""><?= $row["tensp"] ?></a> </h4>
         <?php if($row['giamgia'] !=$row['gia']){ ?>
             <h4 class="sp4-2">Giá:  <?= $row["giamgia"] ?>USD <del class="c12"> (<?= $row["gia"] ?>USD)</del></h4>
         <?php } else{?>
             <h4 class="sp4-2">Giá:  <?= $row["gia"] ?>USD </h4>
          <?php }?>
                 <a class="c12"><?  $row["ngaysx"] ?></a>
                 <form action="thaotacmua.php" method="get">
            <div class="tooltip">   <input type="submit" name="n" id="n"  class="m1" value="+">  
            <span class="ambition">thêm vào giỏ hàng </span></div>  
            <input type="hidden" name="code" value="<?=$row['masp']?>">
         </form>  
      </div>       
      </div>
<?php } 
?>

<?php
$row=$result->fetch_assoc();
if($row!=null){?>
      <div class="sp44">
      <a href="../htmlnew/sanpham1.php?&code=<?= $row['masp'] ?>"><img class="sp44-4" src="<?php echo '../admhtml/'.str_replace('../', '', $row["image"])?>" alt="" width="370px" height="391px">
         </a>
         <div class="sp4-4">
         <h4 class="sp4-1"> <a  class="sp4-1-1" href=""><?= $row["tensp"] ?></a> </h4>
         <?php if($row['giamgia'] !=$row['gia']){ ?>
             <h4 class="sp4-2">Giá:  <?= $row["giamgia"] ?>USD <del class="c12"> (<?= $row["gia"] ?>USD)</del></h4>
         <?php } else{?>
             <h4 class="sp4-2">Giá:  <?= $row["gia"] ?>USD </h4>
          <?php }?>
                 <a class="c12"> <?  $row["ngaysx"] ?></a>
                 <form action="thaotacmua.php" method="get">
            <div class="tooltip">   <input type="submit" name="n" id="n"  class="m1" value="+">  
            <span class="ambition">thêm vào giỏ hàng </span></div>  
            <input type="hidden" name="code" value="<?=$row['masp']?>">
         </form>
      </div>       
      </div>
      <?php } 
?>
  </div>
</div>
<!-- hang sp 2-->
<div class="sp4444">
       <div class="sp444">
<?php
$row=$result->fetch_assoc();
if($row!=null){?>
       <div class="sp44">
       <a href="../htmlnew/sanpham1.php?&code=<?= $row['masp'] ?>"><img class="sp44-4" src="<?php echo '../admhtml/'.str_replace('../', '', $row["image"])?>" alt="" width="370px" height="391px">
         </a>
         <div class="sp4-4">
         <h4 class="sp4-1"> <a  class="sp4-1-1" href=""><?= $row["tensp"] ?></a> </h4>
         <?php if($row['giamgia'] !=$row['gia']){ ?>
             <h4 class="sp4-2">Giá:  <?= $row["giamgia"] ?>USD <del class="c12"> (<?= $row["gia"] ?>USD)</del></h4>
         <?php } else{?>
             <h4 class="sp4-2">Giá:  <?= $row["gia"] ?>USD </h4>
          <?php }?>
                 <a class="c12"> <?  $row["ngaysx"] ?></a>
                 <form action="thaotacmua.php" method="get">
            <div class="tooltip">   <input type="submit" name="n" id="n"  class="m1" value="+">  
            <span class="ambition">thêm vào giỏ hàng </span></div>  
            <input type="hidden" name="code" value="<?=$row['masp']?>">
         </form>
      </div>       
      </div>
<?php } 
?>

<?php
$row=$result->fetch_assoc();
if($row!=null){?>
      <div class="sp44">
      <a href="../htmlnew/sanpham1.php?&code=<?= $row['masp'] ?>"><img class="sp44-4" src="<?php echo '../admhtml/'.str_replace('../', '', $row["image"])?>" alt="" width="370px" height="391px">
         </a>
         <div class="sp4-4">
         <h4 class="sp4-1"> <a  class="sp4-1-1" href=""><?= $row["tensp"] ?></a> </h4>
         <?php if($row['giamgia'] !=$row['gia']){ ?>
             <h4 class="sp4-2">Giá:  <?= $row["giamgia"] ?>USD <del class="c12"> (<?= $row["gia"] ?>USD)</del></h4>
         <?php } else{?>
             <h4 class="sp4-2">Giá:  <?= $row["gia"] ?>USD </h4>
          <?php }?>
                 <a class="c12"> <?  $row["ngaysx"] ?></a>
                 <form action="thaotacmua.php" method="get">
            <div class="tooltip">   <input type="submit" name="n" id="n"  class="m1" value="+">  
            <span class="ambition">thêm vào giỏ hàng </span></div>  
            <input type="hidden" name="code" value="<?=$row['masp']?>">
         </form>
      </div>       
      </div>
      <?php } 
?>

<?php
$row=$result->fetch_assoc();
if($row!=null){?>
      <div class="sp44">
      <a href="../htmlnew/sanpham1.php?&code=<?= $row['masp'] ?>"><img class="sp44-4" src="<?php echo '../admhtml/'.str_replace('../', '', $row["image"])?>" alt="" width="370px" height="391px">
         </a>
         <div class="sp4-4">
         <h4 class="sp4-1"> <a  class="sp4-1-1" href=""><?= $row["tensp"] ?></a> </h4>
         <?php if($row['giamgia'] !=$row['gia']){ ?>
             <h4 class="sp4-2">Giá:  <?= $row["giamgia"] ?>USD <del class="c12"> (<?= $row["gia"] ?>USD)</del></h4>
         <?php } else{?>
             <h4 class="sp4-2">Giá:  <?= $row["gia"] ?>USD </h4>
          <?php }?>
                 <a class="c12">    <?  $row["ngaysx"] ?></a>
                 <form action="thaotacmua.php" method="get">
            <div class="tooltip">   <input type="submit" name="n" id="n"  class="m1" value="+">  
            <span class="ambition">thêm vào giỏ hàng </span></div>  
            <input type="hidden" name="code" value="<?=$row['masp']?>">
         </form>  
      </div>       
      </div>
<?php } 
?>
  </div>
</div>
<br>
<!-- nút qua trang -->

<div class="pagination">
   <?php 
   $ten=$title;
   if($title != "phone" && $title != "All" && $title != "laptop" && $title != "headphone" && $title != "watch"){
       $title="find";
   }else{
     $ten="";
     
   }
   if($title!="find"){
     if($temp['num']>6){
        echo sprintf("<a href='../htmlnew/sanpham.php?productType=%s&page=%s&'>|<</a>",$title,1);
        if($_REQUEST['page']==1){
          echo sprintf("<a href='../htmlnew/sanpham.php?productType=%s&page=%s'><<</a>",$title,$_REQUEST['page']);
        }
        else{
          echo sprintf("<a href='../htmlnew/sanpham.php?productType=%s&page=%s'><<</a>",$title,$_REQUEST['page']-1);
         }
        $totalPage=$temp['num']/6;
        $totalPage=ceil($totalPage);
        if($totalPage<6){
          $stt=0;
          for($i=1;$i<=$totalPage;$i++){ 
              if($i==$_REQUEST['page']){
                echo sprintf("<a class='active' href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,$_REQUEST['page'],$_REQUEST['page']); 
              }
              else {
                echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,$i,$i); 
              }
            }
        }
        else if($totalPage>=6){
          if($_REQUEST['page']>=1 && $_REQUEST['page']<=4){
            for($i=1;$i<=4;$i++){ 
              if($i==$_REQUEST['page']){
                echo sprintf("<a class='active' href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,$_REQUEST['page'],$_REQUEST['page']); 
              }
              else {
                echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,$i,$i); 
              }
        
            }
            echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,5,'...');
          }
          else if($_REQUEST['page']>($totalPage-4) && $_REQUEST['page']<=$totalPage){
            echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,$totalPage-4,'...');
            for($i=1;$i<=4;$i++){ 
              
              if(($totalPage-4+$i)==$_REQUEST['page']){
                echo sprintf("<a class='active' href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,$_REQUEST['page'],$_REQUEST['page']); 
              }
              else {
                echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,$totalPage-4+$i,$totalPage-4+$i); 
              }
            }
          }
          else{
            echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,$_REQUEST['page']-2,'...'); 
            echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,$_REQUEST['page']-1,$_REQUEST['page']-1); 
            echo sprintf("<a class='active' href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,$_REQUEST['page'],$_REQUEST['page']); 
            echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,$_REQUEST['page']+1,$_REQUEST['page']+1); 
            echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s'>%s</a>",$title,$_REQUEST['page']+2,'...'); 
            
            
          }
          
        }        
        if($_REQUEST['page']==$totalPage){
          echo sprintf("<a href='../htmlnew/sanpham.php?productType=%s&page=%s'>>></a>",$title,$_REQUEST['page']);
        }
        else{
          echo sprintf("<a href='../htmlnew/sanpham.php?productType=%s&page=%s'>>></a>",$title,$_REQUEST['page']+1);
         }
         echo sprintf("<a href='../htmlnew/sanpham.php?productType=%s&page=%s'>>|</a>",$title,$totalPage);

        }
      }
      
      
      else{

        if($temp['num']>6){
          echo sprintf("<a href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>|<</a>",$title,1,str_replace(" ","",$_REQUEST['nvn']));
          if($_REQUEST['page']==1){
            echo sprintf("<a href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'><<</a>",$title,$_REQUEST['page'],str_replace(" ","",$_REQUEST['nvn']));
          }
          else{
            echo sprintf("<a href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'><<</a>",$title,$_REQUEST['page']-1,str_replace(" ","",$_REQUEST['nvn']));
           }
          $totalPage=$temp['num']/6;
          $totalPage=ceil($totalPage);
          if($totalPage<6){
            $stt=0;
            for($i=1;$i<=$totalPage;$i++){ 
                if($i==$_REQUEST['page']){
                  echo sprintf("<a class='active' href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>%s</a>",$title,$_REQUEST['page'],str_replace(" ","",$_REQUEST['nvn']),$_REQUEST['page']); 
                }
                else {
                  echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>%s</a>",$title,$i,str_replace(" ","",$_REQUEST['nvn']),$i); 
                }
              }
          }
          else if($totalPage>=6){
            if($_REQUEST['page']>=1 && $_REQUEST['page']<=4){
              for($i=1;$i<=4;$i++){ 
                if($i==$_REQUEST['page']){
                  echo sprintf("<a class='active' href='../htmlnew/sanpham.php?productType=%s&page=%s'&nvn=%s>%s</a>",$title,$_REQUEST['page'],str_replace(" ","",$_REQUEST['nvn']),$_REQUEST['page']); 
                }
                else {
                  echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>%s</a>",$title,$i,str_replace(" ","",$_REQUEST['nvn']),$i); 
                }
          
              }
              echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>%s</a>",$title,5,str_replace(" ","",$_REQUEST['nvn']),'...');
            }
            else if($_REQUEST['page']>($totalPage-4) && $_REQUEST['page']<=$totalPage){
              echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>%s</a>",$title,$totalPage-4,str_replace(" ","",$_REQUEST['nvn']),'...');
              for($i=1;$i<=4;$i++){ 
                
                if(($totalPage-4+$i)==$_REQUEST['page']){
                  echo sprintf("<a class='active' href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>%s</a>",$title,$_REQUEST['page'],str_replace(" ","",$_REQUEST['nvn']),$_REQUEST['page']); 
                }
                else {
                  echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>%s</a>",$title,$totalPage-4+$i,str_replace(" ","",$_REQUEST['nvn']),$totalPage-4+$i); 
                }
              }
            }
            else{
              echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>%s</a>",$title,$_REQUEST['page']-2,str_replace(" ","",$_REQUEST['nvn']),'...'); 
              echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>%s</a>",$title,$_REQUEST['page']-1,str_replace(" ","",$_REQUEST['nvn']),$_REQUEST['page']-1); 
              echo sprintf("<a class='active' href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>%s</a>",$title,$_REQUEST['page'],str_replace(" ","",$_REQUEST['nvn']),$_REQUEST['page']); 
              echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>%s</a>",$title,$_REQUEST['page']+1,str_replace(" ","",$_REQUEST['nvn']),$_REQUEST['page']+1); 
              echo sprintf("<a  href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>%s</a>",$title,$_REQUEST['page']+2,str_replace(" ","",$_REQUEST['nvn']),'...'); 
              
              
            }
            
          }        
          if($_REQUEST['page']==$totalPage){
            echo sprintf("<a href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>>></a>",$title,$_REQUEST['page'],str_replace(" ","",$_REQUEST['nvn']));
          }
          else{
            echo sprintf("<a href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>>></a>",$title,$_REQUEST['page']+1,str_replace(" ","",$_REQUEST['nvn']));
           }
           echo sprintf("<a href='../htmlnew/sanpham.php?productType=%s&page=%s&nvn=%s'>>|</a>",$title,$totalPage,str_replace(" ","",$_REQUEST['nvn']));
  
          }



      }

   ?>
         </div>

<br><br>
             <table style="width: 100%;background-color:rgba(0,0,0,0.8);" >
            <tr>
                <td class="a1112">THÔNG TIN SINH VIÊN TECHNOLOGY </td>
        
                <td class="a1113">HƯỚNG DẪN CHUNG</td>
     
                <td class="a1112">HỖ TRỢ KHÁCH HÀNG</td>
     
                <td class="a1113">TSOCIAL </td>
     
            </tr>
     
            <tr>
                <td class="a111"><a href="" >Giới thiệu công ty</a></td>
                <td class="a112" ><a href="">Giao hàng - Đổi trả</a></td>
                
                <td class="a111">Gọi mua hàng:<a href="" class="cuoi"> 0901083627</a> (Miễn Phí)</td>  
                <td rowspan="2">
                   <a href=""> <img src="../image/aaa.jpg" alt="" class="a13"></a>
                   <a href=""> <img src="../image/zalo.jfif" alt=""class="a13"></a>
                    <a href=""><img src="../image/z3065110575113_cbb8e61010a4ed39f408fc1a754fb038.jpg" alt=""class="a13"></a>
     
             </td>
            </tr>
     
            <tr>
             <td class="a111"><a href=""> Hệ thống showroom, đại lý </a></td>
     
             <td class="a112" ><a href="">Hướng dẫn mua hàng</a></td>
     
             <td class="a111">Khiếu nại, Bảo hành:<a href="" class="cuoi"> 0901083627</a></td>
            </tr>
     
            <tr>
             <td class="a111"><a href="">Liên Hệ / Góp Ý</a> </td>
     
             <td class="a112"><a href="">Thanh toán và bảo mật</a></td>
     
             <td class="a111">Thời gian phục vụ: 8h-22h</td>
     
             <td class="a1114" >HỆ THỐNG WEBSITE </td>
            </tr>
     
            <tr>
            
             <td class="a111"><a href="">Mua trả góp</a></td>
     
             <td class="a112"><a href="">Chính sách bảo hành</a></td>
             <td class="a111">Email: svt@gmail.vn</td>
             <td>      </td>
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
          <td class="a111"><a href="tuyendung.html">Tuyển dụng</a></td>
          <td>    </td>
          <td>     </td>
          <td class="a112"><a href="">SVT Hồ Chí Minh</a></td>
         </tr>
         
       <tr class="a15">
        <td><br><br></td>
        <td><br><br></td>
        <td><br><br></td>
        <td><br><br></td>    
           
     </tr>
            
            <tr  >
             <td colspan="2" class="a16" >  CÔNG TY CỔ PHẦN TM-DV-SVT </td>
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
               <td class="a1115"> Địa chỉ:  89 Trần Đình Xu, Q1, TP.HCM </td>
           </tr>
     
           <tr>
               <td class="a1115"> Điện thoại: <a class="a1-1">09412355169</a></td>
           </tr>
           <tr>
               <td  class="a1115"> Hotline: <a class="a1-1">0785073528</a></td>
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

    window.onscroll = function() {scrollFunction()};/* function trong function*/

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

</html>