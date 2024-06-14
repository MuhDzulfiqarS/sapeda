<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SAPEDA</title>
  <meta content="" name="description">  
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style2.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:admin@sapeda.sch.id">admin@sapeda.sch.id</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>(0410) 21042</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://web.facebook.com/Berita.humasManpangkep" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/explore/locations/478792657/madrasah-aliyah-negeri-man-pangkep/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCgErli6xas4d-8rUsNQtj_g" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a href="https://twitter.com/MANpangkep/status/527041090788921344" class="twitter"><i class="bx bxl-twitter"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">SAPEDA<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Alur Pendaftaran</a></li>
          <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
          <li><a class="nav-link scrollto" href="{{route('register')}}">Register</a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>SAPEDA</span></h1>
      <h2>PENERIMAAN PESERTA DIDIK BARU TAHUN AJARAN 2023/2024</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxs-devices"></i></div>
              <h4 class="title"><a href="">MULTI PLATFOM DAN MULTI AKSES</a></h4>
              <p class="description">Dapat diakses melalui dekstop, laptop, tablet maupun mobile phone baik dengan layanan internet , SMS dan melalui android</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">MULTI JALUR SELEKSI</a></h4>
              <p class="description">Dapat mengakomodir implementasi PPDB Online berbagai jalur. menyesuaikan kondisi daerahnya (jalur Zonasi, Jalur Prestasi, Jalur tes, Jalur reguler)</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">PENGGUNAAN MUDAH</a></h4>
              <p class="description">Tampilan penggunaan aplikasi SAPEDA di rancang untuk memudahkan pengguna dalam mengakses layanan PPDB secara Online</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">TANPA INSTALASI</a></h4>
              <p class="description">Aplikasi PPDB yang bernama SAPEDA ini tidak perlu lagi melakukan instalasi software aplikasi tertentu, cukup akses layanan basis web dengan koneksi internet saja</p>
            </div>
          </div>

        </div>
        <div class="row mt-4 d-flex justify-content-center">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxs-user"></i></div>
              <h4 class="title"><a href="">MULTI MODEL ALUR PENDAFTARAN</a></h4>
              <p class="description">multi model alur pendaftaran maksudnya dalam proses pendaftaran siswa dapat melakukan secara mandiri atau langsung datang ke sekolah</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bxs-alarm"></i></div>
              <h4 class="title"><a href="">PENGELOLAAN OTOMATIS</a></h4>
              <p class="description">Mengelola data calon siswa secara otomatis dan langsung setiap waktu mulai dari proses pendaftaran, seleksi hingga pengumuman hasil. hal ini tentu saja akan sangat memudahkan Pihak Sekolah</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Alur Pendaftaran</h2>
          <p>Peserta Didik Baru MAN PANGKAJENE KEPULAUAN Tahun 2023</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('img/alur.png')}}" width="100%" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Tahapan Pelakasanaan PPDB Madrasah aliyah</h3>
            <p class="fst-italic">
              
            </p>
            <ul>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">1</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>Calon peserta didik baru menyediakan berkas pendaftaran</p>
                </div>
              </li>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">2</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>Calon peserta didik baru mengakses laman situs PPDB (sapedamadrasah.com)</p>
                </div>
              </li>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">3</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>Peserta didik baru melakukan login/register</p>
                </div>
              </li>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">4</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>Setelah login peserta didik baru akan berada di dashboard siswa</p>
                </div>
              </li>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">5</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>Peserta didik baru melakukan pendaftaran mealului modul pendaftaran yang disediakan</p>
                </div>
              </li>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">6</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>Peserta didik baru diarahkan untuk mengisi formulir</p>
                </div>
              </li>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">7</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>Setelah mengisi formulir, peserta didik baru melakukan upload berkas</p>
                </div>
              </li>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">8</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>Peserta didik baru mencetak formulir</p>
                </div>
              </li>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">9</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>Setelah itu peserta didik baru menunggu verifikasi admin</p>
                </div>
              </li>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">9</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>Jikas sudah diverifikasi maka peserta didik baru akan mendapatkan hasil lulus berkas atau tidak lulus</p>
                </div>
              </li>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">9</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>peserta didik baru yang lulus berkas selanjut melakukan pengambilan kartu tes pada modul kartu tes dibagian dahsboard siswa</p>
                </div>
              </li>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">9</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>Setelah masuk pada modul kartu tes, maka akan muncul kartu tes serta pembagian ruangan tes nya</p>
                </div>
              </li>
              <li>
                <button type="button" class="btn btn-sm btn-primary rounded-pill m-4" style="width: 2rem; height:2rem;">9</button>
                <div class="ml-2">
                  <h5></h5>
                  <p>hasil akhir nya adalah peserta didik baru dapat melihat hasil tes nya pada modul hasil tes dibagian dashboard siswa</p>
                </div>
              </li>
              
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row d-flex justify-content-center">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Pendaftaran Siswa</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Sekolah</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>BANTUAN</h2>
          <h3>Pertanyaan <span></span></h3>
          <p>Yang mewakili anda </p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Kenapa saya tidak bisa registrasi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Pengisian Data yang Tidak Benar: Pastikan Anda telah mengisi semua informasi yang diperlukan dengan benar, seperti nama pengguna, alamat email, dan kata sandi. Periksa juga apakah Anda telah mengonfirmasi kata sandi dengan benar jika ada kolom konfirmasi kata sandi.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Jalur pendaftaran apa saja yang ada? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Apa itu pilihan Madrasah Aliyah? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Bagaimana alurpendaftaran peserta didik baru? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Apa saja syarat pendaftaran? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Alamat<span>.</span></h3>
            <p>
              Pangkajene dan Kepulauan <br>
              Sulawesi Selatan<br>
              Indonesia <br><br>
              <strong>Phone:</strong> (0410) 21042<br>
              <strong>Email:</strong> admin@sapedamadrasah.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Jejaring Sosial Kami</h4>
            <p>Anda bisa menghubungi sosial media kami dibawah ini:</p>
            <div class="social-links mt-3">
              <a href="https://web.facebook.com/Berita.humasManpangkep" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/explore/locations/478792657/madrasah-aliyah-negeri-man-pangkep/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCgErli6xas4d-8rUsNQtj_g" class="youtube"><i class="bx bxl-youtube"></i></a>
              <a href="https://twitter.com/MANpangkep/status/527041090788921344" class="twitter"><i class="bx bxl-twitter"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>2023</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://www.poliupg.ac.id/">Mahasiswa PNUP</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main_bizland.js')}}"></script>

</body>

</html>