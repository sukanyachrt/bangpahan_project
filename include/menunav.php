<?php
$productgroup = new Connect_Data();
$productgroup->connectData();
$product = new Connect_Data();
$product->connectData();
?>
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
            <h1>BeakBuddy<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="index.php#home">หน้าหลัก</a></li>
                <li><a href="index.php#about">เกี่ยวกับ</a></li>
                <li class="dropdown"><a href="index.php#product"><span>รายการสินค้า</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <?php
                        $productgroup->sql = "SELECT producttype.protype_id,producttype.protype_name,count(productgroup.protype_id) as numproducttype
                    FROM  producttype INNER JOIN  productgroup ON producttype.protype_id = productgroup.protype_id
                    WHERE protype_status = 1 and productgroup.progroup_status=1
                    GROUP BY producttype.protype_id";
                        $productgroup->queryData();
                        while ($rsproductgroup = $productgroup->fetch_AssocData()) {
                            if ($rsproductgroup['numproducttype'] > 1) {
                        ?>
                                <li class="dropdown"><a href="#"><span><?= $rsproductgroup['protype_name'] ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                    <ul>
                                        <?php
                                             $product->sql = "SELECT
                                             productgroup.progroup_id, 
                                             productgroup.progroup_name
                                         FROM
                                             producttype
                                             INNER JOIN
                                             productgroup
                                             ON 
                                                 producttype.protype_id = productgroup.protype_id
                                         WHERE
                                             productgroup.progroup_status = 1 AND productgroup.protype_id='".$rsproductgroup['protype_id']."'
                                         ";
                                         $product->queryData();
                                         while ($rsproduct = $product->fetch_AssocData()) {
                                            ?>
                                                <li><a href="product.php?id=<?=$rsproduct['progroup_id']?>"><?=$rsproduct['progroup_name']?></a></li>
                                            <?php
                                         }

                                        ?>
                                       
                                    </ul>
                                <?php
                            } else {
                                $product->sql = "SELECT
                                productgroup.progroup_id, 
                                productgroup.progroup_name
                            FROM
                                producttype
                                INNER JOIN
                                productgroup
                                ON 
                                    producttype.protype_id = productgroup.protype_id
                            WHERE
                                productgroup.progroup_status = 1 AND productgroup.protype_id='".$rsproductgroup['protype_id']."'
                            ";
                            $product->queryData();
                            $rsproduct = $product->fetch_AssocData();

                                ?>
                                <li><a href="product.php?id=<?=$rsproduct['progroup_id']?>"><?= $rsproductgroup['protype_name'] ?></a></li>
                            <?php
                            }
                            ?>

                        <?php
                        }
                        ?>

                        <!-- <li class="dropdown"><a href="#product"><span>วัตถุดิบ</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="../projectYummy/flour.php">แป้ง</a></li>
                                <li><a href="../projectYummy/chocolate.php">ช็อคโกแลต</a></li>
                                <li><a href="../projectYummy/butter.php">เนย</a></li>
                                <li><a href="../projectYummy/flavors-and-foodcoloring.php">กลิ่นและสีผสมอาหาร</a></li>
                                <li><a href="../projectYummy/whipping.php">วิปปิ้งครีม</a></li>
                                <li><a href="../projectYummy/powder.php">ผงฟู/ผงวุ้น/เจลาติน</a></li>
                                <li><a href="../projectYummy/powdercho.php">ผงโกโก้</a></li>
                            </ul>
                        </li>
                        <li><a href="../projectYummy/equipment.php">อุปกรณ์</a></li> -->
                    </ul>
                </li>
                <li><a href="index.php#contact">ช่องทางติดต่อ</a></li>
                <li><a href="../projectYummy/payment.php">ชำระเงิน</a></li>
                <li><a href="../projectYummy/order_confirmation.php">ติดตามสินค้า</a></li>
                <!-- <li><a href="../projectYummy/login.php">Login</a></li> -->
                <!-- <li><a href="#contact">Sign-up</a></li> -->
            </ul>
        </nav><!-- .navbar -->

        <!-- เพิ่มปุ่มรูป ตะกร้า -->
        <!-- <a class="btn-cart" href="../projectYummy/order_confirmation.php">
          <img src="assets/img/shopping.png" alt="Cart Icon" style="width: 24px; height: 24px;">
        </a> -->
        <a class="btn-book-a-table" href="../projectYummy/login.php">log in</a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>