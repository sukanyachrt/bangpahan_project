<!-- * admin dashboard  
- โชว์ยอดขายภายในเดือนนั้นๆ /
- รวมสินค้าทั้งหมด /
- รวมออเดอร์ทั้งหมด /
- ข้อมูลลูกค้ากี่คน / 
- ผู้ดูแลระบบกี่คน /
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
                            <div class="col-md-4 col-12 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2 text-primary">สถานะรายการสั่งซื้อ</h5>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                                                <a class="dropdown-item" href="../order/index.php">View More</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div class="d-flex flex-column align-items-center gap-1">
                                                <h2 class="my-2">
                                                    <?php
                                                    $connect->sql = "SELECT
                                            count( * ) AS numberorder 
                                            FROM   orders ";
                                                    $connect->queryData();
                                                    $rsconnect = $connect->fetch_AssocData();
                                                    echo $rsconnect['numberorder'];
                                                    ?>
                                                     <span class="h5">รายการ</span>
                                                </h2>
                                               
                                            </div>
                                        </div>
                                        <ul class="p-0 m-0">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-credit-card"></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">รอชำระเงิน</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <h4 class="fw-medium">
                                                            <?php
                                                            $connect->sql = "SELECT
                                            count( * ) AS numberorder 
                                            FROM   orders WHERE order_status='1'";
                                                            $connect->queryData();
                                                            $rsconnect = $connect->fetch_AssocData();
                                                            echo $rsconnect['numberorder'];
                                                            ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-check-circle"></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">รอยืนยันการชำระเงิน</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <h4 class="fw-medium">
                                                            <?php
                                                            $connect->sql = "SELECT
                                            count( * ) AS numberorder 
                                            FROM   orders WHERE order_status='2'";
                                                            $connect->queryData();
                                                            $rsconnect = $connect->fetch_AssocData();
                                                            echo $rsconnect['numberorder'];
                                                            ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-info"><i class="bx bxs-backpack"></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">รอจัดส่ง</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <h4 class="fw-medium">
                                                            <?php
                                                            $connect->sql = "SELECT
                                            count( * ) AS numberorder 
                                            FROM   orders WHERE order_status='3'";
                                                            $connect->queryData();
                                                            $rsconnect = $connect->fetch_AssocData();
                                                            echo $rsconnect['numberorder'];
                                                            ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-success"><i class="bx bx-check-double"></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">จัดส่งเรียบร้อย</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <h4 class="fw-medium">
                                                            <?php
                                                            $connect->sql = "SELECT
                                            count( * ) AS numberorder 
                                            FROM   orders WHERE order_status='4'";
                                                            $connect->queryData();
                                                            $rsconnect = $connect->fetch_AssocData();
                                                            echo $rsconnect['numberorder'];
                                                            ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-dark"><i class="bx bx-x"></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">ข้อมูลการชำระเงินไม่ถูกต้อง</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <h4 class="fw-medium">
                                                            <?php
                                                            $connect->sql = "SELECT
                                            count( * ) AS numberorder 
                                            FROM   orders WHERE order_status='0'";
                                                            $connect->queryData();
                                                            $rsconnect = $connect->fetch_AssocData();
                                                            echo $rsconnect['numberorder'];
                                                            ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-decondary"><i class="bx bx-x"></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">ยกเลิกออเดอร์</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <h4 class="fw-medium">
                                                            <?php
                                                            $connect->sql = "SELECT
                                            count( * ) AS numberorder 
                                            FROM   orders WHERE order_status='5'";
                                                            $connect->queryData();
                                                            $rsconnect = $connect->fetch_AssocData();
                                                            echo $rsconnect['numberorder'];
                                                            ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-12 order-0   mb-4">
                                <div class="card">
                                    <div class="row row-bordered g-0">
                                        <div class="col-md-12">
                                            <h5 class="card-header m-0 me-2 pb-3 text-primary">รายได้รวม</h5>
                                            <div id="totalIncomeChart" class="px-2"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 mb-4 order-1">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">รวมสินค้าทั้งหมด </h5>
                                                <h3 class="card-title mb-4">
                                                    <?php
                                                    $connect->sql = "SELECT
                                            count( * ) AS numberproduct 
                                            FROM   product 
                                            WHERE product_status =1";
                                                    $connect->queryData();
                                                    $rsconnect = $connect->fetch_AssocData();
                                                    echo $rsconnect['numberproduct'] . " รายการ";
                                                    ?>
                                                </h3>

                                                <a href="../product/index.php" class="btn btn-sm btn-outline-primary">View More</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="../../assets/img/icons/unicons/product.png" height="100" width="100" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mb-4 order-1">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">รวมออเดอร์ทั้งหมด </h5>
                                                <h3 class="card-title text-nowrap mb-4">
                                                    <?php
                                                    $connect->sql = "SELECT
                                            count( * ) AS numberorder 
                                            FROM   orders ";
                                                    $connect->queryData();
                                                    $rsconnect = $connect->fetch_AssocData();
                                                    echo $rsconnect['numberorder'] . " รายการ";
                                                    ?>
                                                </h3>

                                                <a href="../order/index.php" class="btn btn-sm btn-outline-primary">View More</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="../../assets/img/icons/unicons/order.png" height="100" width="100" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 mb-4 order-1">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">จำนวนลูกค้าในระบบ </h5>
                                                <h3 class="card-title text-nowrap mb-4">
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

                                                <a href="../customer/index.php" class="btn btn-sm btn-outline-primary">View More</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="../../assets/img/icons/unicons/customer.png" height="100" width="100" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mb-4 order-1">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">จำนวนผู้ดูแลระบบ </h5>
                                                <h3 class="card-title text-nowrap mb-4">
                                                    <?php
                                                    $connect->sql = "SELECT
                                            count( * ) AS numberemployee 
                                            FROM   employees 
                                            WHERE employee_status=1";
                                                    $connect->queryData();
                                                    $rsconnect = $connect->fetch_AssocData();
                                                    echo $rsconnect['numberemployee'] . " คน";
                                                    ?>
                                                </h3>

                                                <a href="../employee/index.php" class="btn btn-sm btn-outline-primary">View More</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="../../assets/img/icons/unicons/admin.png" height="100" width="100" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                                            </div>
                                        </div>
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
    IncomeAll();

    function IncomeAll() {
        $.ajax({
            type: 'GET',
            url: "../../services/dashboard/data.php?v=incomeAll",
            success: function(response) {
                updateChart(response.result);
            }
        });
    }

    function updateChart(data) {
        var options = {
            series: [],
            chart: {
                type: 'bar',
                height: 450,
                stacked: true,
                toolbar: {
                    show: true
                },
                zoom: {
                    enabled: true
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        position: 'bottom',
                        offsetX: -10,
                        offsetY: 0
                    }
                }
            }],
            plotOptions: {
                bar: {
                    horizontal: false,
                    borderRadius: 10,
                    dataLabels: {
                        total: {
                            enabled: true,

                        }
                    }
                },
            },
            dataLabels: {
                enabled: true
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'],
            },
            yaxis: {
                title: {
                    text: 'จำนวนเงิน'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "฿" + val
                    }
                }
            }
        };

        // วนลูปเพื่อกำหนดค่าของ series ใหม่จากข้อมูลที่ได้
        for (var year in data) {
            options.series.push({
                name: year,
                data: data[year]
            });
        }

        var chart = new ApexCharts(document.querySelector("#totalIncomeChart"), options);
        chart.render();
    }
</script>