<?php
header('Content-Type: application/json');
session_start(); // เริ่ม Session

if (isset($_POST['status']) && $_POST['status'] === 'ok') {
    
    $data = $_POST['data'];
    $_SESSION['customer_id'] = $data['customer_id'];
    $_SESSION['customer_fname'] =$data['customer_fname'];
    $_SESSION['customer_lname'] =$data['customer_lname'];
    if($_GET['v']!=""){
        echo json_encode(["data"=>"ok","page"=>$_GET['v'].".php"]);
    }
    else{
        echo json_encode(["data"=>"ok","page"=>"index.php"]);
    }
   
    
} else {
    echo json_encode(["data"=>"no"]);
}