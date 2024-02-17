<?php
include("include/header.php");
?>
<link rel="stylesheet" href="assets/bs-stepper/css/bs-stepper.min.css">
<style>
.active .bs-stepper-title{
    color: red;
}
.active .bs-stepper-circle {
  background-color: red !important;
}
</style>
<?php
$connect = new Connect_Data();
$connect->connectData();
?>

<body>
    <?php
    include("include/menunav.php");
    ?>
    <section id="material" class="material">
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">

                    <div class="bs-stepper wizard-modern wizard-modern-example">
                        <div class="bs-stepper-header table-responsive">

                            <div class="step" data-target="#project-detail">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span class="text-sm bs-stepper-title">วิธีการจัดส่ง</span>

                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#contract-register-detail">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="text-sm bs-stepper-title">ชำระเงิน</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#installation-work-detail">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle">3</span>
                                    <span class="text-sm bs-stepper-title">การยืนยัน</span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <div id="project-detail" class="content">
                                <div class="col-6">
                                    <div class="mb-4">
                                        <h6>ที่อยู่สำหรับจัดส่ง</h6>
                                        <?php
                                        $connect->sql = "SELECT * FROM 	customers  WHERE customer_id ='" . $_SESSION['customer_id'] . "'";
                                        $connect->queryData();
                                        $rsconnect = $connect->fetch_AssocData();
                                        ?>
                                        <div class="col mt-3">
                                            <div class="card radius-10 border-start border-0 border-3 border-danger">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <p class="mb-0 text-secondary"><?= $rsconnect['customer_fname'] . " " . $rsconnect['customer_lname'] ?></p>
                                                                <p class="my-1"><?= $rsconnect['c_address'] ?></p>
                                                                <p class="mb-0 font-13"><?= $rsconnect['customer_telephone'] ?></p>
                                                            </div>
                                                            <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="fa fa-shopping-cart"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mt-4 mt-sm-0 d-none d-md-block">
                                                            <div class="text-center text-md-end">
                                                                <a href="#" class="text-danger">แก้ไข
                                                                <i class="bi bi-pencil-square"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="card">
                                            <form>
                                                <div class="card-body">
                                                    <?php
                                                    $connect->sql = "SELECT * FROM 	customers  WHERE customer_id ='" . $_SESSION['customer_id'] . "'";
                                                    $connect->queryData();
                                                    $rsconnect = $connect->fetch_AssocData();
                                                    ?>

                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row align-items-center">
                                                            <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                                                            <div class="ms-2 c-details">
                                                                <p><?= $rsconnect['customer_fname'] . " " . $rsconnect['customer_lname'] ?></p>
                                                                <p><?= $rsconnect['c_address'] ?></p>
                                                                <p><?= $rsconnect['customer_telephone'] ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="text-danger">
                                                            <a href="#">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                       
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> -->
                                        </div>
                                    </div>

                                </div>
                                <div id="contract-register-detail" class="content">
                                    <div class="col-xxl">
                                        <div class="mb-4">

                                            <div class="card-body">
                                                <form id="contract-register-form">
                                                    <div id="load-contract-register-form">
                                                        aaaaa
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="installation-work-detail" class="content">
                                    <div class="col-xxl">
                                        <div class="mb-4">
                                            <div class="card-body">
                                                <form id="installation-work-form">
                                                    <div id="load-installation-work-form">
                                                        ssss
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
    </section>
    <?php include("include/footer.php"); ?>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/bs-stepper/js/bs-stepper.min.js"></script>
    <?php include("include/script.php"); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.wizard-modern-example'), {
                linear: false,
                animation: true
            })

        });
    </script>
</body>

</html>