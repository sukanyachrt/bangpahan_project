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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap" rel="stylesheet">

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
  <link href="assets/css/main copy.css" rel="stylesheet">
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
        <h1>BakeBuddy<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">หน้าหลัก</a></li>
          <li><a href="#about">เกี่ยวกับ</a></li>
          <!-- <li><a href="#product">สินค้า</a></li> -->
          <li class="dropdown"><a href="#product"><span>รายการสินค้า</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
          <li><a href="#contact">ช่องทางติดต่อ</a></li>
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


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">บางปะหัน<br>บรรจุภัณฑ์</h2>
          <p data-aos="fade-up" data-aos-delay="100">เป็นร้านขายอุปรณ์และวัตถุดิบในการทำเบเกอรี่ โดยมีร้านค้าตั้งอยู่ที่ จ.พระนครศรีอยุธยา ต.บางปะหัน อ.บางปะหัน</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#product" class="btn-book-a-table">Shop</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/Bang Pahan.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>เกี่ยวกับ Us</h2>
          <p>เกี่ยวกับ <span>บางปะหันบรรจุภัณฑ์</span></p>
        </div>

        <div class="row gy-4">
              <div class="col-lg-50 d-flexposition-relative mt-4">
                <img src="assets/img/บางปะหัน บรรจุภัณฑ์.png" class="img-fluid" alt="">
              </div>
          <!-- <div class="col-lg-6 position-relative about-img" style="background-image: url(assets/img/bangface.jpg) ;" data-aos="fade-up" data-aos-delay="150">
          </div> -->
          <!-- <div class="col-lg-5 d-flex " data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic"> -->
                <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. -->
              <!-- </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> จำกัดพื้นที่ในการส่งภายใน ต.บางปะหัน เท่านั้น</li>
                <li><i class="bi bi-check2-all"></i> มีหน้าร้านจริง</li>
                <li><i class="bi bi-check2-all"></i> ...</li>
              </ul>
              <p> -->
                <!-- Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident -->
              <!-- </p>
            </div> -->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <section id="product" class="product">

    <div class="section-header">
    <div class="mb-3"></div>
      <h2>สินค้า</h2>
      <p>รวมสินค้า<span>ร้านเรา!</span></p>
    </div>

    <div class="text-center">
    <div class="container">
    <div class="row">
        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card">
                <img src="assets/img/menu/กลิ่นและสีผสมอาหาร.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">กลิ่นและสีผสมอาหาร</h5>
                <a href="../projectYummy/flavors-and-foodcoloring.php" class="btn btn-outline-danger me-2">ดูเพิ่มเติม</a>
              </div>

            </div>
        </div>
        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card">
                    <img src="assets/img/menu/ช็อกโกแลต.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">ช็อคโกแลต</h5>
                    <a href="../projectYummy/chocolate.php" class="btn btn-outline-danger me-2">ดูเพิ่มเติม</a>
                  </div>

                </div>
        </div>
        <div class="col-sm-1 col-md-3 col-lg-3">
              <div class="card">
                  <img src="assets/img/menu/แป้ง.png" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title">แป้ง</h5>
                  <a href="../projectYummy/flour.php" class="btn btn-outline-danger me-2">ดูเพิ่มเติม</a>
                </div>

              </div>
        </div>
        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card">
                    <img src="assets/img/menu/เนย.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">เนย</h5>
                    
                    <a href="../projectYummy/butter.php" class="btn btn-outline-danger me-2">ดูเพิ่มเติม</a>
                  </div>

                </div>
        </div>
        <!--คั่นเพื่อเพิ่มช่องว่างระกว่างช่อง-->
        <div class="mb-3"></div>
        <!--คั่นเพื่อเพิ่มช่องว่างระกว่างช่อง-->
        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card">
                <img src="assets/img/menu/ผงฟู.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">ผงฟู/ผงวุ้น/เจลาติน</h5>
                <a href="../projectYummy/powder.php" class="btn btn-outline-danger me-2">ดูเพิ่มเติม</a>
              </div>

            </div>
        </div>
        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card">
                <img src="assets/img/menu/ผงโกโก้.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">ผงโกโก้</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <!-- <a href="../projectYummy/order_confirmation.php" class="btn btn-outline-primary me-2">ใส่ตะกร้า</a> -->
                <a href="../projectYummy/powdercho.php" class="btn btn-outline-danger me-2">ดูเพิ่มเติม</a>
              </div>

            </div>
        </div>
        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card">
                <img src="assets/img/menu/วิปปิ้งครีม.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">วิปปิ้งครีม</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <!-- <a href="../projectYummy/order_confirmation.php" class="btn btn-outline-primary me-2">ใส่ตะกร้า</a> -->
                <a href="../projectYummy/whipping.php" class="btn btn-outline-danger me-2">ดูเพิ่มเติม</a>
              </div>

            </div>
        </div>
        <div class="col-sm-1 col-md-3 col-lg-3">
            <div class="card">
                <img src="assets/img/menu/อุปกรณ์.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">อุปกรณ์</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <!-- <a href="../projectYummy/order_confirmation.php" class="btn btn-outline-primary me-2">ใส่ตะกร้า</a> -->
                <a href="../projectYummy/equipment.php" class="btn btn-outline-danger me-2">ดูเพิ่มเติม</a>
              </div>

            </div>
        </div>
    </div>
    </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p><span>Contact Us</span></p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.3857361394585!2d100.5376368738895!3d14.462526086007585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e20b8198b9d3f5%3A0x43ee372f740de732!2z4Lia4Liy4LiH4Lib4Liw4Lir4Lix4LiZ4Lia4Lij4Lij4LiI4Li44Lig4Lix4LiT4LiR4LmM!5e0!3m2!1sth!2sth!4v1706451101449!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>ที่อยู่ร้านค้า</h3>
                <p>4/8 หมู่ 5 ต.ขวัญเมือง อ.บางปะหัน จ.อยุธยา 13220</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p> bangpahan.bakebuddy@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>เบอร์โทร</h3>
                <p>061 293 5006</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>เวลา เปิด-ปิด ร้าน</h3>
                <div><strong>จันทร์ - ศุกร์ :</strong> 08.00น. - 18.00น.;
                  <strong>เสาร์ - อาทิตย์ :</strong> ปิด
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
              <strong>อีเมล :</strong> bangpahan.bakebuddy@gmail.com<br>
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
        &copy; Copyright <strong><span>BakeBuddy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>