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
    $order_date = date('Y-m-d H:i');
    $connect->sql = "INSERT INTO `orders`  VALUES (null,'" . $_SESSION['customer_id'] . "','" . $order_date . "','1')";
    $connect->queryData();
    $order_id = $connect->id_insertrows();
    $order_money = 0;
    foreach ($_SESSION['cart'] as $index => $order_qty) {
        $product_id = $index;
        $product->sql = "SELECT  *  FROM  product  WHERE product_id ='" . $product_id . "'";
        $product->queryData();
        $result = $product->fetch_AssocData();
        $product_price = $result['product_price'];
        $order_money += $product_price * $order_qty;
        $connect->sql = "INSERT INTO `orders_detail` VALUES 
        (null,'" . $order_id . "','" . $product_id . "','" . $order_qty . "','" . $product_price . "')";
        $connect->queryData();
    }
    if ($order_id > 0) {
        unset($_SESSION['cart']);
        echo json_encode(["status" => "ok", "order_id" => $order_id, "order_date" => $order_date, 'order_money' => number_format($order_money, 2)]);
    } else {
        echo json_encode(["status" => "no"]);
    }
} else if ($data == "insertPayment") {
    $id = $_GET['id'];
    $post = $_POST;
    $pay_date_exp = explode("/", $post['pay_date']);
    $pay_date = $pay_date_exp[2] . "-" . $pay_date_exp[1] . "-" . $pay_date_exp[0];

    if ($_FILES["pay_image"]["error"] > 0) {
        $pay_image = "";
    } else {
        $pay_image = $_FILES['pay_image']['name'];
        $location = "../../assets/img/payment/" . $pay_image;
        $uploadOk = 1;

        if ($uploadOk == 0) {
        } else {
            /* Upload file */
            if (move_uploaded_file($_FILES['pay_image']['tmp_name'], $location)) {
            } else {
            }
        }
    }


    $product->sql = "INSERT INTO `payment`(`pay_id`, `order_id`, `pay_date`, `pay_total`, `pay_bank`, `pay_image`, `pay_time`, `pay_detail`) VALUES 
    (null,'" . $id . "','" . $pay_date . "','" . $post['pay_total'] . "','" . $post['pay_bank'] . "','" . $pay_image . "','" . $post['pay_time'] . "','" . $pay_detail . "')";
    $product->queryData();
    $pay_id = $product->id_insertrows();
    if ($pay_id > 0) {
        $product->sql = "UPDATE `orders` SET 
        `order_status`='2' 
        WHERE order_id='" . $id . "'";
        $product->queryData();
        echo json_encode(["status" => "ok",$pay_date]); 
    }
    else{
        echo json_encode(["status" => "no"]); 
    }
    
}
