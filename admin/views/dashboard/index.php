<!-- * admin dashboard  
- โชว์ยอดขายภายในเดือนนั้นๆ
- รวมสินค้าทั้งหมด
- รวมออเดอร์ทั้งหมด
- ข้อมูลลูกค้ากี่คน
- ผู้ดูแลระบบกี่คน 
* รวมรายการสั่งซื้อทั้งหมด
* รวมสินค้าทั้งหมด(ทั้งวัตถุดิบและอุปกรณ์)
* รายงานยอดขาย (รายวัน รายเดือน รายปี)
* รายงานสินค้าขายดี
* ข้อมูลการชำระเงิน
* ข้อมูลลูกค้า
* ข้อมูลผู้ดูแลระบบ
-->
<?php include("../../include/header.php"); ?>
<link rel="stylesheet" href="../../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="../../assets/plugins/toastr/toastr.min.css">
<?php
include("../../services/connect_data.php");
$connect = new Connect_Data();
$connect->connectData();
?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include("../../include/checkmenu.php"); ?>
            <div class="layout-page">
                <?php include("../../include/navbar.php"); ?>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 mb-0">Dashboard</h4>
                        <div class="row">

                            <div class="col-lg-4 col-md-12 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                    <a class="dropdown-item" href="../product/index.php">View More</a>

                                                </div>
                                            </div>
                                        </div>
                                        <span class="fw-medium d-block mb-1">รวมสินค้าทั้งหมด</span>
                                        <h3 class="card-title mb-2">
                                            <?php
                                            $connect->sql = "SELECT
                                            sum( product_num ) AS numberproduct 
                                            FROM   product 
                                            WHERE product_status =1";
                                            $connect->queryData();
                                            $rsconnect = $connect->fetch_AssocData();
                                            echo $rsconnect['numberproduct'] . " ชิ้น";
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                    <a class="dropdown-item" href="../order/index.php">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span>รวมออเดอร์ทั้งหมด</span>
                                        <h3 class="card-title text-nowrap mb-1">
                                            <?php
                                            $connect->sql = "SELECT
                                            count( * ) AS numberorder 
                                            FROM   orders ";
                                            $connect->queryData();
                                            $rsconnect = $connect->fetch_AssocData();
                                            echo $rsconnect['numberorder'] . " รายการ";
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                    <a class="dropdown-item" href="../customer/index.php">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span>จำนวนลูกค้าในระบบ</span>
                                        <h3 class="card-title text-nowrap mb-1">
                                            <?php
                                            $connect->sql = "SELECT
                                            count( * ) AS numbercustomer 
                                            FROM   customers 
                                            WHERE c_status=1";
                                            $connect->queryData();
                                            $rsconnect = $connect->fetch_AssocData();
                                            echo $rsconnect['numbercustomer'] . " คน";
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include("../../include/footer.php"); ?>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
</body>
<?php include("../../include/script.php"); ?>
<script src="../../assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="../../assets/plugins/toastr/toastr.min.js"></script>
<script>

</script>