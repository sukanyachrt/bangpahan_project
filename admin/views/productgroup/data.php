<?php include("../../include/header.php"); ?>
<link rel="stylesheet" href="../../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="../../assets/plugins/toastr/toastr.min.css">
<?php
include('../../services/connect_data.php');
$connect = new Connect_Data();
$connect->connectData();
?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include("../../include/checkmenu.php"); ?>
            <div class="layout-page">
                <?php include("../../include/navbar.php"); ?>
                <?php
                $id = isset($_GET['id']) ? $_GET['id'] : '';
                ?>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">ข้อมูลกลุ่มสินค้า</span></h4>
                        <div class="row">
                            <!-- Basic Layout -->
                            <div class="col-xxl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">

                                            <?php if ($id == "") {
                                                echo "เพิ่มข้อมูล";
                                            } else {
                                                echo "แก้ไขข้อมูล";
                                            } ?>
                                        </h5>

                                    </div>
                                    <div class="card-body">
                                        <form id="productgroupForm">
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="progroup_id"> รหัสกลุ่มสินค้า</label>
                                                <div class="col-sm-10 form-group">
                                                    <input type="text" class="form-control" ReadOnly id="progroup_id" name="progroup_id" placeholder="รหัสกลุ่มสินค้า" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="progroup_name"> ชื่อกลุ่มสินค้า </label>
                                                <div class="col-sm-10 form-group">
                                                    <input type="text" class="form-control" id="progroup_name" name="progroup_name" placeholder="ชื่อกลุ่มสินค้า	" />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="protype_id">ประเภทสินค้า </label>
                                                <div class="col-sm-10 form-group">
                                                    <select id="protype_id" name="protype_id" class="form-select">
                                                        <option value="">เลือกประเภทสินค้า</option>
                                                        <?php
                                                        $connect->sql = "SELECT  * FROM  producttype  WHERE protype_status ='1'";
                                                        $connect->queryData();
                                                        while ($rsconnect = $connect->fetch_AssocData()) {
                                                        ?>
                                                            <option value="<?= $rsconnect['protype_id'] ?>"><?= $rsconnect['protype_name'] ?></option>
                                                        <?php
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="progroup_status">สถานะ </label>
                                                <div class="col-sm-10 form-group">
                                                    <select id="progroup_status" name="progroup_status" class="form-select">
                                                        <option value="">เลือกสถานะ</option>
                                                        <option value="1">ใช้งาน</option>
                                                        <option value="0">ยกเลิก</option>
                                                    </select>
                                                </div>
                                            </div>




                                            <div class="row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="button" id="btnSave" style="display: none;" class="btn btn-primary">บันทึกข้อมูล</button>
                                                    <button type="button" id="btnSaveEdit" style="display: none;" value="<?php echo $id ?>" class="btn btn-primary">บันทึกการแก้ไข</button>
                                                    <button type="button" id="btnReset" class="btn btn-outline-secondary">กลับ</button>
                                                </div>
                                            </div>
                                        </form>
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
    $(function() {

        let id = $('#btnSaveEdit').val();
        if (id != "") {
            $('#btnSaveEdit').show()
            getdataProductgroup(id)


        } else {
            //เพิ่มข้อมูลใหม่
            $('#btnSave').show()
            $.ajax({
                url: "../../services/productgroup/data.php?v=maxIdProduct",
                type: "GET",
                success: function(Res) {
                    console.log(Res)
                    $('#progroup_id').val(Res.maxid)
                }
            });
        }

    });

    function getdataProductgroup(id) {
        $.ajax({
            url: "../../services/productgroup/data.php?v=dataprogroup_id&id=" + id,
            type: "GET",
            success: function(Res) {
                console.log(Res)
                if (Res.status == "ok") {
                    let data = Res.data;
                    $('#progroup_id').val(data.progroup_id)
                    $('#progroup_name').val(data.progroup_name)
                    $('#progroup_status').val(data.progroup_status)
                    $('#protype_id').val(data.protype_id)
                }
            }
        });
    }
    //บันทึก
    $("#btnSave").on("click", function() {

        if ($('#productgroupForm').valid()) {

            $.ajax({
                async: true,
                url: "../../services/productgroup/data.php?v=inserteproductgroup",
                type: "POST",
                cache: false,
                data: $('#productgroupForm').serialize(),
                success: function(Res) {
                    console.log(Res);
                    if (Res.result >= 0) {
                        sessionStorage.setItem('toastrShown', 'save');
                        location.href = 'index.php';

                    }
                }
            });
        }
    });

    $("#btnSaveEdit").on("click", function() {

        if ($('#productgroupForm').valid()) {
            let id = $('#btnSaveEdit').val();
            $.ajax({
                async: true,
                url: "../../services/productgroup/data.php?v=updateProductgroup&id=" + id,
                type: "POST",
                cache: false,
                data: $('#productgroupForm').serialize(),
                success: function(Res) {
                    console.log(Res);
                    if (Res.result >= 0) {
                        sessionStorage.setItem('toastrShown', 'edit');
                        location.href = 'index.php';

                    }
                }
            });
        }
    });
    $("#btnReset").on("click", function() {
        location.href = 'index.php';
    })


    $('#productgroupForm').validate({
        rules: {
            progroup_id: {
                required: true,

            },
            progroup_name: {
                required: true,

            },
           
            progroup_status: {
                required: true,

            },
            product_image: {
                required: true,

            },
            progroup_id: {
                required: true,

            },
        },
        messages: {
            progroup_id: {
                required: "โปรดกรอกรหัสสินค้า",

            },
            progroup_name: {
                required: "โปรดกรอกชื่อสินค้า",

            },
            
            progroup_status: {
                required: "โปรดเลือกสถานะสินค้า",

            },
            product_image: {
                required: "โปรดอัพโหลดรูปสินค้า",

            },
            progroup_id: {
                required: "โปรดกลุ่มสินค้า",

            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },

    });

    // เพิ่มเงื่อนไขสำหรับกฎ alphanumeric
    $.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
    }, "โปรดกรอกข้อมูลที่มีเฉพาะตัวเลขและตัวอักษร (a-z)");
</script>