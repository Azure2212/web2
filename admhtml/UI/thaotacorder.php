<?php 
require_once('../../htmlnew/library.php');
require_once('../../htmlnew/util.php');
if(isset($_REQUEST["loaithaotacorder"])){
    $mabill = $_REQUEST["mabill"];
    if($_REQUEST["loaithaotacorder"] == 'cancel'){
        $conn=ConnectDB();
        $result=$conn->query("update bill set status = 2 where id ='". $mabill ."'");
        if ($result == false) {
           echo " error! ". $conn->error;
            exit();
        }
        $conn->close();
        header("location: order_m.php?page=1");
    }
    if($_REQUEST["loaithaotacorder"] == 'done'){
        $conn=ConnectDB();
        $result=$conn->query("update bill set status = 1 where id ='". $mabill ."'");
        if ($result == false) {
           echo " error! ". $conn->error;
            exit();
        }
        $conn->close();
        header("location: order_m.php?page=1");
    }
       
        
}



