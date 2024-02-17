<?php
header('Content-Type: application/json');
include('../connect_data.php');
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Bangkok');
$connect = new Connect_Data();
$connect->connectData();
$product = new Connect_Data();
$product->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
if ($data == "confirmorder") {
    $order_date=date('Y-m-d H:i');
    $connect->sql = "INSERT INTO `orders`  VALUES (null,'" . $_SESSION['customer_id'] . "','" . $order_date. "','1')";
    $connect->queryData();
    $order_id = $connect->id_insertrows();

    foreach($_SESSION['cart'] as $index => $order_qty){
        $product_id=$index;
        $product->sql = "SELECT  *  FROM  product  WHERE product_id ='" . $product_id . "'";
        $product->queryData();
        $result = $product->fetch_AssocData();
        $product_price=$result['product_price'];

        $connect->sql = "INSERT INTO `orders_detail` VALUES 
        (null,'".$order_id."','".$product_id."','".$order_qty."','".$product_price."')";
        $connect->queryData();
    }
    if($order_id>0){
        unset($_SESSION['cart']);
        echo json_encode(["status"=>"ok","order_id"=>$order_id,"order_date"=>$order_date]);
    }
    else{
        echo json_encode(["status"=>"no"]);
    }
    
}
