<?php
// session_start();
require_once("../../htmlnew/library.php");

if($_REQUEST['typeForm'] == "login"){
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $role = $_REQUEST["role"];
    $connectDB = ConnectDB();
    $result = $connectDB->query("select * from user where username ='". $username."'");
    if($result->num_rows == 0) header("location: login.php?wronglogin=1");
    $row = $result->fetch_assoc();
    if($row["password"] != $password) header("location: login.php?wronglogin=1");
    else{
        if($role != mapping_userRole($row["role"])) header("location: login.php?wronglogin=1");
        else {
            echo $role;
            $_SESSION['userInfor'] = $row;
            if($role == 'Quản trị viên')
                header("location: index.php");
            else
                header("location: ../../htmlnew/nhap.php");
        }
    }
}

?>