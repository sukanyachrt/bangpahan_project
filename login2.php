<?php
include("include/header.php");
?>



<body>
  <?php

  include("include/menunav.php");
  ?>
  <section class="d-flex justify-content-center align-items-center vh-100" style="background-image: url(assets/img/bg/bg4.jpg); background-size: cover; background-position: center;">
    <div class="row col-md-4 col-12">
      <div class="col-12">
        <form class="text-center" id="loginForm">
          <h1 class="h3 mb-3 fw-normal text-white font-weight-bold fw-bold">เข้าสู่ระบบ</h1>
          <div class="row">
            <div class="col-12 my-2">
              <div class="form-floating">
                <input type="text" class="form-control" id="Username" name="Username" placeholder="name@example.com">
                <label for="floatingInput">Email address / Username</label>
              </div>
            </div>
            <div class="col-12 my-2">
              <div class="form-floating">
                <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
            </div>
            <div class="col-12 my-2">
              <div class="form-check text-start">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me
                </label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-danger w-100 py-2" type="submit">เข้าสู่ระบบ</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </section>


  <?php include("include/footer.php"); ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/jquery-validation/jquery.validate.min.js"></script>

  <?php include("include/script.php"); ?>
  <script>
    $('#loginForm').validate({
      rules: {
        Username: {
          required: true,
          alphanumeric: true, // เพิ่มกฎ alphanumeric สำหรับตัวเลขและตัวอักษร
        },
        Password: {
          required: true,
          alphanumeric: true, // เพิ่มกฎ alphanumeric สำหรับตัวเลขและตัวอักษร
        },
      },
      messages: {
        Username: {
          required: "โปรดกรอกรหัสผู้ใช้งาน",
          alphanumeric: "โปรดกรอกรหัสผู้ใช้งานที่มีเฉพาะตัวเลขและตัวอักษร",
        },
        Password: {
          required: "โปรดกรอกรหัสผ่าน",
          alphanumeric: "โปรดกรอกรหัสผ่านที่มีเฉพาะตัวเลขและตัวอักษร",
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
      submitHandler: function(form) {
        $.ajax({
          type: 'POST',
          url: "services/auth/data.php?v=checkauth",
          data: $(form).serialize(),
          success: function(response) {
            console.log(response)
            if (response.status == "ok") {
              postSession(response);

            } else {
              toastr.error(response.msg)
            }
          },
          error: function(error) {
            console.log(error)
          }
        });
      },
    });

    // เพิ่มเงื่อนไขสำหรับกฎ alphanumeric
    $.validator.addMethod("alphanumeric", function(value, element) {
      return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
    }, "โปรดกรอกข้อมูลที่มีเฉพาะตัวเลขและตัวอักษร (a-z)");

    function postSession(data) {
      $.ajax({
        url: "./createsession.php?v=<?php echo isset($_GET['v']) ? $_GET['v'] : '' ?>",
        type: "POST",
        data: data, // ใช้ข้อมูลจากการร้องขอแรก
        success: function(Res) {

          window.location.replace(Res.page);
        },

      });
    }
  </script>




</body>

</html>