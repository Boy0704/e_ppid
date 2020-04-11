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

    

    <!-- ======= Aduan Pelanggaran Section ======= -->
    <section id="form3" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Aduan Pelanggaran</h2>
          <p>Silahkan input form berikut.</p>
        </div>

        <div class="row">

          

          <div class="col-lg-12">
            <form action="web/simpan_aduan_pelanggaran" method="post" enctype="multipart/form-data" role="form" class="php-email-form">
              <div class="form-group">
                <input placeholder="Nama Lengkap" type="text" name="nama" class="form-control" id="name" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <textarea placeholder="Alamat Lengkap" class="form-control" name="alamat" rows="5" data-rule="required" data-msg="<?php echo $t_kosong ?>"></textarea>
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label>Upload Identitas (KTP/SIM/PASPORT)</label>
                <input type="file" name="userfile" class="form-control" id="userfiler" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <br><p style="color: blue">*) File yang bisa diupload bertipe JPG | JPEG | PNG</p>
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


              <div class="alert alert-info" style="margin-top:50px;">Peristiwa yang dilaporkan</div>
              
              <div class="form-group">
                <input placeholder="Peristiwa" type="text" name="peristiwa" class="form-control" id="peristiwa" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <input placeholder="Tempat kejadian" type="text" name="tempat_kejadian" class="form-control" id="tempat_kejadian" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <input placeholder="Hari" type="text" class="form-control" id="tempat_kejadian" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Tanggal" type="date" name="tgl_kejadian" class="form-control" id="tgl_kejadian" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <input placeholder="Waktu Kejadian" type="time" name="waktu_kejadian" class="form-control" id="waktu_kejadian" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <input placeholder="Terlapor" type="text" name="terlapor" class="form-control" id="terlapor" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <input placeholder="Alamat Terlapor" type="text" name="alamat_terlapor" class="form-control" id="alamat_terlapor" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <input placeholder="No Telp/HP Terlapor" type="text" name="no_telp_terlapor" class="form-control" id="no_telp_terlapor" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>

              <div class="alert alert-info" style="margin-top:50px;">Saksi - Saksi</div>

              <div class="form-group">
                <input placeholder="Nama Saksi" type="text" name="nama_saksi" class="form-control" id="nama_saksi" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <textarea placeholder="Alamat Saksi" class="form-control" name="alamat_saksi" rows="5" data-rule="required" data-msg="<?php echo $t_kosong ?>"></textarea>
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <input placeholder="No Telp / HP Saksi" type="text" name="no_telp_saksi" class="form-control" id="no_telp_saksi" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label>Upload Bukti 1</label>
                <input type="file" name="upload_bukti1" class="form-control" id="upload_bukti1r" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <br><p style="color: blue">*) File yang bisa diupload bertipe JPG | JPEG | PNG</p>
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label>Upload Bukti 2</label>
                <input type="file" name="upload_bukti2" class="form-control" id="upload_bukti2r" data-rule="required" data-msg="<?php echo $t_kosong ?>" />
                <br><p style="color: blue">*) File yang bisa diupload bertipe JPG | JPEG | PNG</p>
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <textarea placeholder="Uraian Singkat Dugaan Pelanggaran" class="form-control" name="uraian_singkat" rows="5" data-rule="required" data-msg="<?php echo $t_kosong ?>"></textarea>
                <div class="validate"></div>
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
    </section><!-- End Aduan Pelanggaran Section -->

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