<?php include("../../include/header.php"); ?>
<link rel="stylesheet" href="../../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="../../assets/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">

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
                        <h4 class="py-3 mb-0">รายงาน</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                                    <li class="nav-item">
                                        <a class="nav-link <?php if (!isset($_GET['report']) || $_GET['report'] == "reportsell") echo "active"; ?>" href="?report=reportsell">
                                            <img width="30" height="30" src="../../assets/img/icons/unicons/bestseller.png" alt="bestseller" />
                                            รายงานยอดขาย
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if (isset($_GET['report']) && $_GET['report'] == "bestsell") echo "active"; ?>" href="?report=bestsell">
                                            <img width="30" height="30" src="../../assets/img/icons/unicons/profit.png" alt="profit" />
                                            รายงานสินค้าขายดี
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <?php if (!isset($_GET['report']) || $_GET['report'] == "reportsell") {
                            ?>
                                <div class="col-md-12 mb-4 order-0">
                                    <div class="nav-align-top mb-4">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-year" aria-controls="navs-top-year" aria-selected="true">
                                                    รายปี
                                                </button>
                                            </li>
                                            <li class="nav-item">
                                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-month" aria-controls="navs-top-month" aria-selected="false">
                                                    รายเดือน
                                                </button>
                                            </li>
                                            <li class="nav-item">
                                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-day" aria-controls="navs-top-day" aria-selected="false">
                                                    รายวัน
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="navs-top-year" role="tabpanel">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">ปี</th>
                                                                <th class="text-end">ยอดขาย</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbreportsell_year">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navs-top-month" role="tabpanel">
                                                <div class="input-group mb-4">
                                                    <button class="btn btn-outline-primary" type="button">ค้นหาข้อมูล : </button>
                                                    <select class="form-select" id="serachByYear" aria-label="Example select with button addon">
                                                        <option selected value="">เลือกปีที่ต้องการ...</option>
                                                        <?php
                                                        $connect->sql = "SELECT YEAR
                                                        ( orders.order_date ) AS yearorder 
                                                        FROM orders WHERE
                                                        order_status > 0 GROUP BY
                                                        YEAR (orders.order_date)";
                                                        $connect->queryData();
                                                        while ($rsconnect = $connect->fetch_AssocData()) {
                                                            $yearorder = $rsconnect['yearorder'];
                                                        ?>
                                                            <option value="<?= $yearorder ?>"><?= $yearorder ?></option>
                                                        <?php
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">ปี</th>
                                                                <th class="text-center">เดือน</th>
                                                                <th class="text-end">ยอดขาย</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbreportsell_month">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navs-top-day" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" class="start-date form-control" placeholder="วันที่เริ่มต้น" value="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <input type="text" class="end-date form-control" value="" placeholder="วันที่สิ้นสุด">
                                                            <button class="btn btn-outline-primary" onclick="dataDay()" type="button">ค้นหาข้อมูล</button>
                                                        </div>

                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <div class="table-responsive text-nowrap">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-end">วันที่</th>
                                                                        <th class="text-end">ยอดขาย</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="tbreportsell_day">
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } ?>




                        </div>

                    </div>
                    <div class="modal fade" id="modal_confirm_del" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-warning ">
                                    <h4 class="modal-title text-white" id="exampleModalLabel2">แจ้งเตือน</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5 class="">ยืนยันการลบข้อมูล ?</h5>
                                </div>
                                <div class="modal-footer text-center">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        ยกเลิก
                                    </button>
                                    <button type="button" id="btnIdProduct" onclick="confirmDel_employ()" class="btn btn-warning">ยืนยัน</button>
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
<link href="../../assets/datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
<script src="../../assets/datepicker/js/bootstrap-datepicker-custom.js"></script>
<script src="../../assets/datepicker/locales/bootstrap-datepicker.th.min.js" charset="UTF-8"></script>
<script src="../../assets/js/moment.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js" integrity="sha512-ZrigzIl5MysuwHc2LaGI+uOLnLDdyYUth+pA5OuJC++WEleiYrztIc7nU/iBRWeP+ufmSGepuJULdgh/K0rIAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        dataYear();
    });

    function dataYear() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tbreportsell_year").innerHTML = this.responseText;

            }
        };
        xhttp.open("GET", "../../services/report/tablereportsell_year.php", true);
        xhttp.send();
    }
    $('#serachByYear').change(function() {
        // รับค่าของ option ที่ถูกเลือก
        var selectedValue = $(this).val();
        dataMonth(selectedValue)
    });

    function dataMonth(year) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tbreportsell_month").innerHTML = this.responseText;

            }
        };
        xhttp.open("GET", "../../services/report/tablereportsell_month.php?year=" + year, true);
        xhttp.send();
    }

    function dataDay() {

        var startdate = $('.start-date').val();
        var enddate = $('.end-date').val();
        console.log(startdate)
        console.log(enddate)
        if (startdate && enddate) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("tbreportsell_day").innerHTML = this.responseText;

                }
            };
            xhttp.open("GET", "../../services/report/tablereportsell_day.php?start=" + startdate+"&end="+enddate, true);
            xhttp.send();
        }

    }


    $('.start-date').datepicker({
        templates: {
            leftArrow: '<i class="fa fa-chevron-left"></i>',
            rightArrow: '<i class="fa fa-chevron-right"></i>'
        },
        format: "dd/mm/yyyy",
        endDate: new Date(),
        keyboardNavigation: false,
        autoclose: true,
        todayHighlight: true,
        disableTouchKeyboard: true,
        orientation: "bottom auto"
    });

    $('.end-date').datepicker({
        templates: {
            leftArrow: '<i class="fa fa-chevron-left"></i>',
            rightArrow: '<i class="fa fa-chevron-right"></i>'
        },
        format: "dd/mm/yyyy",
        endDate: new Date(),
        keyboardNavigation: false,
        autoclose: true,
        todayHighlight: true,
        disableTouchKeyboard: true,
        orientation: "bottom auto"

    });


    $('.start-date').datepicker().on("changeDate", function() {
        var startDate = $('.start-date').datepicker('getDate');
        var oneDayFromStartDate = moment(startDate).add(0, 'days').toDate();
        $('.end-date').datepicker('setStartDate', oneDayFromStartDate);
        //$('.end-date').datepicker('setDate', oneDayFromStartDate);
    });

    $('.end-date').datepicker().on("show", function() {
        var startDate = $('.start-date').datepicker('getDate');
        $('.day.disabled').filter(function(index) {
            return $(this).text() === moment(startDate).format('D');
        }).addClass('active');
    });
</script>