<?php
include("include/header.php");
?>
<style>

</style>
<?php
$order = new Connect_Data();
$order->connectData();

$orderdetail = new Connect_Data();
$orderdetail->connectData();
?>

<body>
    <?php
    include("include/menunav.php");
    ?>
    <section id="material" class="material">
        <div class="container mt-2">
            <div class="row">
                <div class="col-12">
                    <?php
                    if (!isset($_SESSION['customer_id'])) {

                    ?>
                        <div class="card text-center my-4">
                            <div class="card-header bg-danger text-white">
                                ไม่มีข้อมูลผู้ใช้งาน
                            </div>
                            <div class="card-body my-3">
                                <h5 class="card-title">โปรด login เข้าสู่ระบบก่อนค่ะ</h5>
                                <a href="login.php" class="btn btn-danger my-3">login เข้าใช้งาน</a>
                            </div>

                        </div>
                    <?php

                    } else {


                    ?>
                        <div class="row mb-2">
                            <div class="col-md-8 text-start text-md-end">
                                <p class="pt-1"> ค้นหาข้อมูล : </p>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" id="statusFilter">
                                    <option>ทั้งหมด</option>
                                    <option value="รอชำระเงิน">รอชำระเงิน</option>
                                    <option value="รอยืนยันการชำระเงิน">รอยืนยันการชำระเงิน</option>
                                    <option value="รอจัดส่ง">รอจัดส่ง</option>
                                    <option value="จัดส่งเรียบร้อยแล้ว">จัดส่งเรียบร้อยแล้ว</option>
                                </select>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">เลขที่สั่งซื้อ</th>
                                        <th scope="col" class="text-center">วันที่สั่งซื้อ</th>
                                        <th scope="col" class="text-center">ราคารวม</th>
                                        <th scope="col" class="text-center">สถานะ</th>
                                        <th scope="col" class="text-center">รายละเอียด</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $order->sql = "SELECT *  	FROM 	orders  WHERE customer_id ='" . $_SESSION['customer_id'] . "'";
                                    $order->queryData();
                                    $noid = 1;
                                    while ($rsorder = $order->fetch_AssocData()) {
                                        $sumprice = 0;
                                        if ($rsorder['order_id'] <= 9) {
                                            $order_id = "0000" . $rsorder['order_id'];
                                        } else if ($rsorder['order_id'] >= 10 && $rsorder['order_id'] <= 99) {
                                            $order_id = "000" . $rsorder['order_id'];
                                        } else if ($rsorder['order_id'] >= 100 && $rsorder['order_id'] <= 999) {
                                            $order_id = "00" . $rsorder['order_id'];
                                        } else if ($rsorder['order_id'] >= 1000 && $rsorder['order_id'] <= 9999) {
                                            $order_id = "0" . $rsorder['order_id'];
                                        } else {
                                            $order_id = $rsorder['order_id'];
                                        }

                                        //หายอดสินค้ารวม
                                        $orderdetail->sql = "SELECT  sum(orders_detail.order_qty * 	orders_detail.product_price) as sumprice  	FROM 	orders_detail  WHERE order_id ='" . $rsorder['order_id'] . "'";
                                        $orderdetail->queryData();
                                        $rsorderdetail = $orderdetail->fetch_AssocData();
                                        $sumprice = $rsorderdetail['sumprice'];
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= ($noid++) ?></td>
                                            <td class="text-center"><?= $order_id ?></td>
                                            <td class="text-center"><?= date('d/m/Y', strtotime($rsorder['order_date'])) ?></td>
                                            <td class="text-center"><?= "฿" . number_format($sumprice, 2) ?></td>
                                            <td class="text-center status">
                                                <?php
                                                if ($rsorder['order_status'] == 1) {
                                                    echo '<span class="badge rounded-pill bg-danger">รอชำระเงิน</span>';
                                                } else if ($rsorder['order_status'] == 2) {
                                                    echo '<span class="badge rounded-pill bg-warning">รอยืนยันการชำระเงิน</span>';
                                                } else if ($rsorder['order_status'] == 3) {
                                                    echo '<span class="badge rounded-pill bg-primary">รอจัดส่ง</span>';
                                                } else if ($rsorder['order_status'] == 4) {
                                                    echo '<span class="badge rounded-pill bg-success">จัดส่งเรียบร้อยแล้ว</span>';
                                                }
                                                ?>
                                            </td>
                                            <td class="text-center">

                                                <a href="orderdetail.php?id=<?php echo $rsorder['order_id'] ?>" type="button" class="btn btn-outline-danger btn-sm"><i class="bi bi-eye"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php include("include/footer.php"); ?>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php include("include/script.php"); ?>
    <script>
        $(document).ready(function() {
            $('#statusFilter').change(function() {
                var selectedStatus = $(this).val();
                $('table tbody tr').each(function() {
                    var status = $(this).find('.status').text().trim();
                    if (selectedStatus == 'ทั้งหมด' || status == selectedStatus) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
</body>

</html>