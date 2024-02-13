<?php
include("include/header.php");
?>


<body>
    <?php
    $connect = new Connect_Data();
    $connect->connectData();

    $connect->sql = "SELECT  progroup_name FROM  productgroup  WHERE progroup_id ='" . $_GET['id'] . "'";
    $connect->queryData();
    $rsconnect = $connect->fetch_AssocData();
    $progroup_name = $rsconnect['progroup_name'];
    ?>
    <!-- ======= Header ======= -->
    <?php
    include("include/menunav.php");
    ?>

    <!-- ======= Menu Section ======= -->
    <section id="material" class="material">

        <div class="section-header">
            <div class="mb-3"></div>
            <h2>สินค้า</h2>
            <p>รวมสินค้า<span><?= $progroup_name ?></span></p>
        </div>

        <div class="text-center">
            <div class="container">
                <div class="row">
                    <?php
                    $connect->sql = "SELECT  * FROM  product  WHERE product_status =1  AND progroup_id='" . $_GET['id'] . "'";
                    $connect->queryData();
                    $numrows = $connect->num_rows();
                    if ($numrows == 0) {
                    ?>

                        <h6 class="text-danger">ไม่มีข้อมูลสินค้า</h6>

                    <?php
                    }
                    while ($rsconnect = $connect->fetch_AssocData()) {
                    ?>
                        <div class="col-sm-1 col-md-4 col-lg-4 mb-3">
                            <div class="card ">
                                <img src="assets/img/<?= $rsconnect['product_image'] ?>" class="card-img-top" alt="..." style="max-height: 250px; object-fit: contain;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $rsconnect['product_name'] ?></h5>
                                    <p class="card-text"><?php echo $rsconnect['product_detail'] ?></p>
                                    <h5 class="card-title text-danger pb-3">
                                        <?= $rsconnect['product_price'] . " บาท" ?>
                                    </h5>
                                    <a href="../projectYummy/order_confirmation.php" class="btn btn-outline-danger me-2">ใส่ตะกร้า</a>
                                    <a href="../projectYummy/order_confirmation.php" class="btn btn-danger">สั่งซื้อ</a>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
    </section>


    <?php include("include/footer.php"); ?>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <?php include("include/script.php"); ?>

</body>

</html>