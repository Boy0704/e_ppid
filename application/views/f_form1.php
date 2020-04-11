<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi PPDID</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <base href="<?php echo base_url() ?>">

  <!-- Favicons -->
  <link href="front/img/favicon.png" rel="icon">
  <link href="front/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="front/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="front/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="front/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="front/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="front/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="front/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="">e-PPID</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="front/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <?php $this->load->view('f_menu'); ?>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <!-- <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Sistem Informasi PPID</h1>
            <h2>Formulir Permohonan Informasi, Formulir Pengajuan Keberatan Informasi, Formulir Aduan Pelanggaran jadi lebih mudah.</h2>
            
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="front/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div> -->

  </section><!-- End Hero -->

  <main id="main">

    
  <?php 
  $t_kosong ="Inputan tidak boleh kosong !";
  $t_email ="Email tidak boleh kosong !";
   ?>

    <!-- ======= Permohonan Informasi Section ======= -->
    <section id="form1" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Permohonan Informasi</h2>
          <p>Silahkan input form berikut.</p>
        </div>

        <div class="row">

          

          <div class="col-lg-12">
            <form action="web/simpan_permohonan_informasi" enctype="multipart/form-data" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input placeholder="Nama Lengkap" type="text" name="nama" class="form-control" id="name" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label>Upload Identitas (KTP/SIM/PASPORT)</label>
                <input type="file" name="userfile" class="form-control" id="userfiler" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <br><p style="color: blue">*) File yang bisa diupload bertipe JPG | JPEG | PNG</p>
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <input placeholder="Pekerjaan" type="text" name="pekerjaan" class="form-control" id="pekerjaan" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <input placeholder="No Telp / HP" type="text" name="no_telp" class="form-control" id="no_telp" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>


              <div class="form-group">
                <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="<?php echo $t_email ?>" />
                <div class="validate"></div>
              </div>

              
              <div class="form-group">
                <textarea placeholder="Rincian Informasi yang dibutuhkan" class="form-control" name="informasi_dibutuhkan" rows="5" data-rule="required" data-msg="<?php echo $t_kosong ?>"></textarea>
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <textarea placeholder="Tujuan Penggunaan Informasi" class="form-control" name="tujuan" rows="5" data-rule="required" data-msg="<?php echo $t_kosong ?>"></textarea>
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label>Cara memperoleh informasi (opsi 1)</label><br>
                <input type="radio" name="cara1" value="Melihat" required=""> Melihat
                <input type="radio" name="cara1" value="Membaca" required=""> Membaca
                <input type="radio" name="cara1" value="Mendengarkan" required=""> Mendengarkan
                <input type="radio" name="cara1" value="Mencatat" required=""> Mencatat
              </div>

              <div class="form-group">
                <label>Cara memperoleh informasi (opsi 2)</label><br>
                <input type="radio" name="cara2" value="Hardcopy" required=""> Hardcopy
                <input type="radio" name="cara2" value="Softcopy" required=""> Softcopy
                
              </div>

              <div class="form-group">
                <label>Cara mendapatkan salinan informasi </label><br>
                <input type="radio" name="salinan_informasi" value="Mengambil langsung" required=""> Mengambil langsung
                <input type="radio" name="salinan_informasi" value="Kurir" required=""> Kurir
                <input type="radio" name="salinan_informasi" value="Pos" required=""> Pos
                <input type="radio" name="salinan_informasi" value="Faksimili" required=""> Faksimili
                <input type="radio" name="salinan_informasi" value="Email" required=""> Email
                
              </div>

              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Terima Kasih Telah Mengisi Form Ini !</div>
              </div>
              <div class="text-center"><button type="submit">Kirim</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Permohonan Informasi Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Sistem Informasi PPID</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Designed by <a href="https://jualkoding.com/">Jualkoding.com</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="front/vendor/jquery/jquery.min.js"></script>
  <script src="front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="front/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="front/vendor/php-email-form/validate.js"></script>
  <script src="front/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="front/vendor/venobox/venobox.min.js"></script>
  <script src="front/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="front/js/main.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript"><?php echo $this->session->userdata('message') ?></script>

</body>

</html>