<?php
$productgroup = new Connect_Data();
$productgroup->connectData();
$product = new Connect_Data();
$product->connectData();
?>
<style>

</style>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.php">BeakBuddy.</a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php#home">หน้าหลัก</a></li>
                <li><a class="nav-link scrollto" href="index.php#about">เกี่ยวกับ</a></li>
                <li class="dropdown"><a href="index.php#product"><span>รายการสินค้า</span> <i
                            class="bi bi-chevron-down"></i></a>
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
                                <li class="dropdown"><a href="#"><span>
                                            <?= $rsproductgroup['protype_name'] ?>
                                        </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
                                             productgroup.progroup_status = 1 AND productgroup.protype_id='" . $rsproductgroup['protype_id'] . "'
                                         ";
                                        $product->queryData();
                                        while ($rsproduct = $product->fetch_AssocData()) {
                                            ?>
                                            <li><a href="product.php?id=<?= $rsproduct['progroup_id'] ?>">
                                                    <?= $rsproduct['progroup_name'] ?>
                                                </a></li>
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
                                productgroup.progroup_status = 1 AND productgroup.protype_id='" . $rsproductgroup['protype_id'] . "'
                            ";
                                $product->queryData();
                                $rsproduct = $product->fetch_AssocData();

                                ?>
                                <li><a href="product.php?id=<?= $rsproduct['progroup_id'] ?>">
                                        <?= $rsproductgroup['protype_name'] ?>
                                    </a></li>
                                <?php
                            }
                            ?>

                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">ช่องทางการติดต่อ</a></li>
                <!-- <li>
                    <a href="cart.php">
                        <div class="cart">
                            <span class="count">
                                <?php
                                if ($_SESSION['cart']) {
                                    echo array_sum($_SESSION['cart']);
                                } else {
                                    echo "1";
                                }

                                ?>
                            </span>
                            <i class="bi bi-cart2 material-icons"></i>
                        </div>
                    </a>
                </li>
                <li><a class="getstarted scrollto" href="#about">Login</a></li> -->
            </ul>
           

        </nav><!-- .navbar -->
        <!-- <div class="social-links text-end p-0 m-0">

            <a href="login.php" class="twitter"><i class="bi bi-person" style=" color: #0b2341;
  font-size: 28px;
  cursor: pointer;
                             
  line-height: 0;
  transition: 0.5s;"></i>บัญชีของฉัน</a>

        </div>
        <div>
            <a href="#" class="twitter"><i class="bi bi-cart2" style=" color: #0b2341;
  font-size: 28px;
  cursor: pointer;
  line-height: 0;
  transition: 0.5s;"></i> </a>
        </div> -->
        <div class="social-links">
        <a href="login.php" class="twitter text-center pe-5" style=" color: #0b2341;
  font-size: 16px;"><i class="bi bi-person" style="font-size: 28px;"></i> บัญชีของฉัน </a>
        <a href="#" class="facebook" style=" color: #0b2341;
  font-size: 28px;
  cursor: pointer;
  line-height: 0;
  transition: 0.5s;"><i class="bi bi-cart2"></i></a>
       
      </div>
       <i class="bi bi-list mobile-nav-toggle"></i>
    </div>
</header>