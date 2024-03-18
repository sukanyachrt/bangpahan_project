<!-- ======= header and css  ======= -->
<?php
include("include/header.php");
$connect = new Connect_Data();
$connect->connectData();

?>

<body>

  <!-- ======= Menu ======= -->
  <?php
  include("include/menunav.php");
  ?>


  <!-- ======= Hero Section ======= -->
  <section id="home" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">บางปะหัน<br>บรรจุภัณฑ์</h2>
          <p data-aos="fade-up" data-aos-delay="100">เป็นร้านขายอุปรณ์และวัตถุดิบในการทำเบเกอรี่ โดยมีร้านค้าตั้งอยู่ที่ จ.พระนครศรีอยุธยา ต.ขวัญเมือง อ.บางปะหัน</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#product" class="btn-book-a-table">Shop</a>
          </div>
        </div>
        <div class="col-lg-7 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/bakebuddy.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
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

        </div>
      </div>

      </div>
    </section><!-- End About Section -->


    <section id="product" class="product">

      <div class="section-header">
        <div class="my-4"></div>
        <h2>สินค้า</h2>
        <p>รวมสินค้า<span>ร้านเรา!</span></p>
      </div>

      <div class="text-center">
        <div class="container">
          <div class="row">
            <?php
            $connect->sql = "SELECT  * FROM  productgroup  WHERE progroup_status =1";
            $connect->queryData();
            while ($rsconnect = $connect->fetch_AssocData()) {
            ?>
              <div class="col-sm-1 col-md-3 col-lg-3 mb-3">
                <div class="card">
                  <img src="assets/img/menu/<?= $rsconnect['progroup_image'] ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?= $rsconnect['progroup_name'] ?></h5>
                    <a href="product.php?id=<?= $rsconnect['progroup_id'] ?>" class="btn btn-outline-danger me-2">ดูเพิ่มเติม</a>
                  </div>

                </div>
              </div>

            <?php
            }
            ?>







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
                <div><strong>จันทร์ - ศุกร์ :</strong> 08.00น. - 18.00น.
                  <br><strong>เสาร์ - อาทิตย์ :</strong> ปิด</br>
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include("include/footer.php"); ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <?php include("include/script.php"); ?>

</body>

</html>