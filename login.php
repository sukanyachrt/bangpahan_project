<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BangPahan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Bang Pahan.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->

  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1>BeakBuddy<span>.</span></h1>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="../projectYummy/index.php#hero">หน้าหลัก</a></li>
        <li><a href="../projectYummy/index.php#about">เกี่ยวกับ</a></li>
        <!-- <li><a href="#product">สินค้า</a></li> -->
        <li class="dropdown"><a href="../projectYummy/index.php#product"><span>รายการสินค้า</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li class="dropdown"><a href="#product"><span>วัตถุดิบ</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
            <li><a href="../projectYummy/equipment.php">อุปกรณ์</a></li>
          </ul>
        </li>
        <li><a href="../projectYummy/index.php#contact">ช่องทางติดต่อ</a></li>
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
  </header><!-- End Header -->

      <section class="d-flex justify-content-center align-items-center vh-100" style="background-image: url(assets/img/bg/bg4.jpg); background-size: cover; background-position: center;">
      <div class="container col-4"> <!-- เพิ่มคลาส col-6 เพื่อลดความกว้างของ container -->


        <main class="form-signin">
          <form class="text-center">
            <h1 class="h3 mb-3 fw-normal text-white font-weight-bold fw-bold">Sign In</h1>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
             <!--คั่นเพื่อเพิ่มช่องว่างระกว่างช่อง-->
            <div class="mb-1"></div>
            <!--คั่นเพื่อเพิ่มช่องว่างระกว่างช่อง-->
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
        
            <div class="form-check text-start my-3">
              <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Remember me
              </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
          </form>
        </main>
      </div>
    </section>


    <footer id="footer" class="footer">

      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>ที่อยู่ร้านค้า</h4>
              <p>
              4/8 หมู่ 5 ต.ขวัญเมือง <br>
              อ.บางปะหัน จ.อยุธยา 13220<br>
              </p>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>ช่องทางติดต่อ</h4>
              <p>
                <strong>เบอร์โทร :</strong> 061 293 5006<br>
                <strong>อีเมล :</strong>bangpahan.bakebuddy@gmail.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>เวลาเปิด-ปิด ร้าน</h4>
              <p>
              <strong>จันทร์ - ศุกร์ :</strong> 08.00น. - 18.00น.;
                <strong>เสาร์ - อาทิตย์ :</strong> ปิด
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
              <a href="https://www.facebook.com/bangpahanpackaging?locale=th_TH" class="facebook"><i class="bi bi-facebook"></i></a>
            </div>
          </div>

        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>BeakBuddy</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        </div>
      </div>

    </footer>
  <!-- End Footer -->




    
</body>
</html>