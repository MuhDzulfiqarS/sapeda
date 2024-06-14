@extends('layouts.app')
@section('content')
 @include('components.navbar')
 @include('components.sidebar')
  

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      @if ($siswa->status == 1)
        <div class="alert alert-info  alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Terima Kasih Sudah melakukan pendaftaran</h4>
            <p class="mb-0">Silahkan menunggu konfirmasi dari petugas</p> 
            <hr>
            <div class="row d-flex justify-content-center">
              <div class="col-md-4 text-center">
                <button class="btn btn-lg btn-primary rounded-pill" style="width: 3rem; height:3rem;">1</button>
                <h5 class="mt-2">Formulir</h5>
                <a class="btn btn-success btn-sm rounded-pill" href="{{route('user.download-pdf')}}"><i class="bi bi-download"></i> Download</a>
              </div>
              <div class="col-md-4 text-center">
                <button class="btn btn-lg btn-primary rounded-pill" style="width: 3rem; height:3rem;">2</button>
                <h5 class="mt-2">Formulir Pendaftaran</h5>
                <a class="btn btn-success btn-sm rounded-pill" href="{{route('user.show-pdf')}}"><i class="bi bi-eye-fill"></i> Lihat formulir</a>
              </div>
              <div class="col-sm-4 text-center">
                <button class="btn btn-lg btn-primary rounded-pill" style="width: 3rem; height:3rem;">3</button>
                <h5 class="mt-2">Berkas Lainnya</h5>
                <a class="btn btn-secondary btn-sm rounded-pill" href="#"><i class="bi bi-download"></i> Download Berkas</a>
              </div>
            </div>
        </div>
      @elseif ($siswa->status == 2)
        <div class="alert alert-info  alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Terima Kasih Sudah melakukan pendaftaran</h4>
            <p class="mb-0">Selamat anda lulus di {{$siswa->Sekolahs->nama_sekolah}}</p> 
            <hr>
            <div class="row d-flex justify-content-center">
              <div class="col-md-4 text-center">
                <button class="btn btn-lg btn-primary rounded-pill" style="width: 3rem; height:3rem;">1</button>
                <h5 class="mt-2">Formulir</h5>
                <a class="btn btn-success btn-sm rounded-pill" href="{{route('user.download-pdf')}}"><i class="bi bi-download"></i> Download</a>
              </div>
              <div class="col-md-4 text-center">
                <button class="btn btn-lg btn-primary rounded-pill" style="width: 3rem; height:3rem;">2</button>
                <h5 class="mt-2">Formulir Pendaftaran</h5>
                <a class="btn btn-success btn-sm rounded-pill" href="{{route('user.show-pdf')}}"><i class="bi bi-eye-fill"></i> Lihat formulir</a>
              </div>
              <div class="col-sm-4 text-center">
                <button class="btn btn-lg btn-primary rounded-pill" style="width: 3rem; height:3rem;">3</button>
                <h5 class="mt-2">Berkas Lainnya</h5>
                <a class="btn btn-secondary btn-sm rounded-pill" href="#"><i class="bi bi-download"></i> Download Berkas</a>
              </div>
            </div>
        </div>
      @endif
      <!-- Recent Activity -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pengumuman <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">2022-06-02 08:50:21</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    <h5>Kelengkapan Berkas untuk Pengembalian Formulir Pendaftaran</h5>
                    <p>berkas persyaratan pendaftaran calon siswa baru di MAN Pangkajene, berupa :</p>
                    <ol>
                      <li>Foto copy Kartu Keluarga (1 lembar);</li>
                      <li>Foto copy Ijazah jenjang sebelumnya atau Ijazah SD sederajat (1 lembar);</li>
                      <li>Foto copy Akte Lahir (1 lembar);</li>
                      <li>Surat Keterangan Lulus dari sekolah asal;</li>
                      <li>Foto copy Rapor Semester 1 s.d. 5 yang telah dilegalisir (1 rangkap);</li>
                      <li>Fotocopy Sertifikat/Piagam Prestasi Akademik/non Akademik bagi siswa yang berprestasi (1 lembar)</li>
                      <li>Pas Photo ukuran 2 x 3 dan 3 x 4 (masing-masing 3 lembar)</li>
                    </ol>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2022-06-02 08:50:21</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    <h5>Batas Waktu Pengembalian Berkas Formulir Pendaftaran dimulai tanggal 9 Mei 2022 sampai dengan 31 Mei 2022</h5>
                    
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>2023</span></strong>
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://www.poliupg.ac.id/">Mahasiswa PNUP</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    
@endsection