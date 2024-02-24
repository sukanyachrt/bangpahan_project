<?php
header('Content-Type: application/json');
include('../Connect_Data.php');
session_start();
$connect = new Connect_Data();
$connect->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
if ($data == "updatestatus") {
    $connect->sql = "UPDATE orders SET order_status = '".$_GET['status']."' 
     WHERE order_id='" . $_GET['id'] . "'";
    $connect->queryData();
    echo json_encode(["result" => $connect->affected_rows()]);
}