<?php
include("include/header.php");
?>

<link rel="stylesheet" href="assets/toastr/toastr.min.css">
<style>
  #toast-container>.toast-error {
    background-color: red;
  }

  .form {
    background: rgba(19, 35, 47, .6);
    padding: 40px;
    max-width: 600px;
    margin: 20px auto;
    border-radius: 4px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .1);
  }

  .tab-group {
    list-style: none;
    padding: 0;
    margin: 0 0 40px 0;
  }

  .tab-group:after {
    content: "";
    display: table;
    clear: both;
  }

  .tab-group li a {
    display: block;
    text-decoration: none;
    padding: 15px;
    background: rgba(160, 179, 176, .25);
    color: #a0b3b0;
    font-size: 20px;
    float: left;
    width: 50%;
    text-align: center;
    cursor: pointer;
    transition: 0.5s ease;
  }

  .tab-group li a:hover {
    background: #DC3545;
    color: #fff;
  }

  .tab-group .active a {
    background: #DC3545;
    color: #fff;
  }

  .tab-content>div:last-child {
    display: none;
  }
</style>

<body>
  <?php

  include("include/menunav.php");
  ?>
  <section class="d-flex justify-content-center align-items-center" style="background-image: url(assets/img/bg/bg4.jpg); background-size: cover; background-position: center;">
    <div class="row col-md-9 col-12">
      <div class="col-12">
        <div class="form">

          <ul class="tab-group">
            <li class="tab  active"><a href="#login">Log In</a></li>
            <li class="tab bg-danger"><a href="#signup">Sign Up</a></li>

          </ul>

          <div class="tab-content">
            <div id="login">
              <form id="loginForm">
                <h1 class="text-center h3 mb-3 fw-normal text-white font-weight-bold fw-bold">ยินดีต้อนรับ</h1>
                <div class="row">
                  <div class="col-12 my-2">
                    <div class="form-floating form-group">
                      <input type="text" class="form-control" id="Username" name="Username" placeholder="name@example.com">
                      <label for="floatingInput">Email address / Username</label>
                    </div>
                  </div>
                  <div class="col-12 my-2">
                    <div class="form-floating form-group">
                      <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                  </div>
                  <div class="col-12 my-2">
                    <div class="form-check text-start ">
                      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                      <label class="form-check-label text-white" for="flexCheckDefault">
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
            <div id="signup">
              <form class="" id="signupForm">
                <h1 class="text-center h3 mb-3 fw-normal text-white font-weight-bold fw-bold">ลงทะเบียนเพื่อเป็นสมาชิก</h1>
                <div class="row">
                  <div class="col-md-6  my-1">
                    <div class="form-floating form-group">
                      <input type="text" class="form-control" id="customer_fname" name="customer_fname" placeholder="ชื่อ">
                      <label for="floatingInput">ชื่อลูกค้า</label>
                    </div>
                  </div>
                  <div class="col-md-6  my-1">
                    <div class="form-floating form-group">
                      <input type="text" class="form-control" id="customer_lname" name="customer_lname" placeholder="นามสกุล">
                      <label for="floatingPassword">นามสกุล</label>
                    </div>
                  </div>
                  <div class="col-12 my-1">
                    <div class="form-floating form-group">
                      <input type="text" class="form-control" id="customer_telephone" name="customer_telephone" placeholder="เบอร์โทรศัพท์">
                      <label for="floatingPassword">เบอร์โทรศัพท์</label>
                    </div>
                  </div>
                  <div class="col-12 my-1">
                    <div class="form-floating form-group">
                      <input type="text" class="form-control" id="c_address" name="c_address" placeholder="ที่อยู่">
                      <label for="floatingPassword">ที่อยู่</label>
                    </div>
                  </div>
                  <div class="col-12 my-1">
                    <div class="form-floating form-group">
                      <input type="email" class="form-control" id="c_email" name="c_email" placeholder="Email">
                      <label for="floatingPassword">Email</label>
                    </div>
                  </div>
                  <div class="col-12 my-1">
                    <div class="form-floating form-group">
                      <input type="text" class="form-control" id="customer_username" name="customer_username" placeholder="Username">
                      <label for="floatingPassword">Username</label>
                    </div>
                  </div>
                  <div class="col-12 my-1">
                    <div class="form-floating form-group">
                      <input type="text" class="form-control" id="c_password" name="c_password" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-danger w-100 py-2" type="submit">Register</button>
                  </div>
                </div>
              </form>

            </div>



          </div><!-- tab-content -->

        </div> <!-- /form -->
      </div>

    </div>
  </section>


  <?php include("include/footer.php"); ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/jquery-validation/jquery.validate.min.js"></script>
  <script src="assets/toastr/toastr.min.js"></script>

  <?php include("include/script.php"); ?>
  <script>
    // การ switch tab
    $('.tab a').on('click', function(e) {

      e.preventDefault();

      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');

      target = $(this).attr('href');

      $('.tab-content > div').not(target).hide();

      $(target).fadeIn(600);

    });


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

    $('#signupForm').validate({
      rules: {
        customer_fname: {
          required: true,
        },
        customer_lname: {
          required: true,
        },
        customer_telephone: {
          required: true,
          digits: true, // ต้องเป็นตัวเลขเท่านั้น
          minlength: 10, // ต้องมีจำนวน 10 ตัว
          maxlength: 10
        },
        c_address: {
          required: true,
        },
        c_email: {
          required: true,
          email: true
        },
        customer_username: {
          required: true,
          alphanumeric: true,
        },
        c_password: {
          required: true,
          alphanumeric: true,
        },
      },
      messages: {
        customer_fname: {
          required: "โปรดกรอกชื่อลูกค้า",
        },
        customer_lname: {
          required: "โปรดกรอกนามสกุลลูกค้า",
        },
        customer_telephone: {
          required: "โปรดกรอกเบอร์โทรลูกค้า",
          digits: "กรอกเฉพาะตัวเลขเท่านั้น",
          minlength: "ตัวเลขจำนวน 10 ตัว",
          maxlength: "ตัวเลขจำนวน 10 ตัว"
        },
        c_address: {
          required: "โปรดกรอกที่อยู่",
        },
        c_email: {
          required: "โปรดกรอก email",

        },
        customer_username: {
          required: "โปรดกรอกรหัสผู้ใช้งาน",
        },
        c_password: {
          required: "โปรดกรอกรหัสผ่าน",
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
          url: "services/auth/data.php?v=createCustomer",
          data: $(form).serialize(),
          success: function(response) {
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
    $.validator.addMethod("email", function(value, element) {
      return this.optional(element) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
    }, "โปรดกรอก email ให้ถูกต้อง");

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