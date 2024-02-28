<?php
header('Content-Type: application/json');
include('../Connect_Data.php');
session_start();
$connect = new Connect_Data();
$connect->connectData();
$order = new Connect_Data();
$order->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
if ($data == "incomeAll") {
    // หาจำนวนปี
    $year = [];
    $currentYear = date("Y");
    array_push($year, $currentYear);
    for ($i = 1; $i <= 1; $i++) {
        $previousYear = date("Y", strtotime("-$i year"));
        array_push($year, $previousYear);
    }
    sort($year);
    foreach ($year as $item) {
        // สร้าง array เปล่าสำหรับเก็บรายได้ของแต่ละเดือน
        $incomePerMonth = array();
        for ($i = 1; $i <= 12; $i++) {
            $month = date("m", mktime(0, 0, 0, $i, 1));
            $connect->sql = "SELECT * FROM orders WHERE YEAR(order_date) = '" . $item . "' AND MONTH(order_date) = '" . $month . "' AND order_status>0 AND order_status!=5";
            $connect->queryData();
            $row = $connect->num_rows();
            $sumIncome = 0;
            if ($row > 0) {
                while ($rsconnect = $connect->fetch_AssocData()) {
                    $order_id = $rsconnect['order_id'];
                    $order->sql = "SELECT sum(orders_detail.order_qty * orders_detail.product_price) as sumprice FROM orders_detail WHERE order_id ='" . $order_id . "'";
                    $order->queryData();
                    $rsorder = $order->fetch_AssocData();
                    $sumIncome += $rsorder['sumprice'];
                }
            }
            // เก็บรายได้ของแต่ละเดือนไว้ใน array
            array_push($incomePerMonth, $sumIncome);
        }
        // เก็บ array ของรายได้ของแต่ละปีไว้ในตัวแปร result
        $result[$item] = $incomePerMonth;
    }
    echo json_encode(["result" => $result]);
}
?>
