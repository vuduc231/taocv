<?php require_once($template_path.'header/header-master.php'); ?>
<!--index page start-->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Quản lý CV</h2>
          <ol>
            <li><a href="/">Trang chủ</a></li>
            <li>Quản lý CV</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section class="inner-page">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-sm-8 mx-auto">
            <div class="cv_list bg-white p-3 rounded shadow-sm mb-4">
              <div class="cv_list-header d-flex justify-content-between align-items-center">
                <h3>CV đã tạo trên TopCV</h3>
                <a href="mau-cv" class="btn btn-success">
                  <i class="bi bi-plus-circle pe-2"></i> Tạo CV
                </a>
              </div>
              <div class="cv_list-content text-center">
                <img src="https://www.topcv.vn/v4/image/cv-manager/no-cv.png" alt="">
                <p>Bạn chưa tạo CV nào</p>
              </div>
            </div>

            <div class="cv_list bg-white p-3 rounded shadow-sm mb-4">
              <div class="cv_list-header d-flex justify-content-between align-items-center">
                <h3>CV đã tải lên TopCV</h3>
                <button class="btn btn-success">
                  <i class="bi bi-cloud-upload"></i> Tải lên
                </button>
              </div>
              <div class="cv_list-content text-center">
                <img src="https://www.topcv.vn/v4/image/cv-manager/no-cv-upload.png" alt="">
                <p>Bạn chưa tải lên CV nào</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Inner Page -->

  </main><!-- End #main -->

 <!--end index page-->
 <?php require_once($template_path.'footer/footer-master.php'); ?>