@extends('layouts.master')
@section('content')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk gaya modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
            position: relative;
        }
    </style>
    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Dashboard</h1>

                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Simple -->
            <h2 class="content-heading">MODUL PPDB</h2>

            <div class="row">
                <div class="col-md-4 col-xl-4">
                    <a class="block block-rounded block-link-shadow text-center" href="{{ route('user.dashboardSiswa') }}">
                        <div class="block-content block-content-full bg-gd-sea">
                            <img class="img-avatar img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar17.jpg') }}"
                                alt="">
                        </div>
                        <div class="block-content block-content-full">
                            <p class="fw-semibold mb-0">Pendaftaran</p>
                            <p class="fs-sm fw-medium text-muted mb-0">
                                Silahkan melakukan pendaftaran pada form yang disediakan
                            </p>
                        </div>
                    </a>
                </div>
               
                @if ($siswa->jalur =="Jalur Tes")
                <div class="col-md-4 col-xl-4">
                    @if ($siswa->status == 2)
                        <a class="block block-rounded block-link-shadow text-center" href="{{ route('user.kartu-test') }}">
                            <div class="block-content block-content-full bg-gd-aqua">
                                <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar18.jpg"
                                    alt="">
                            </div>
                            <div class="block-content block-content-full">
                                <p class="fw-semibold mb-0">Kartu Test</p>
                                <p class="fs-sm fw-medium text-muted mb-0">
                                    Kartu test dapat diambil jika sudah dinyatakan lolos berkas
                                </p>
                            </div>
                        </a>
                    @else
                        <a class="block block-rounded block-link-shadow text-center" href="" id="kartuTes">
                            <div class="block-content block-content-full bg-gd-aqua">
                                <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar18.jpg"
                                    alt="">
                            </div>
                            <div class="block-content block-content-full">
                                <p class="fw-semibold mb-0">Kartu Test</p>
                                <p class="fs-sm fw-medium text-muted mb-0">
                                    Kartu test dapat diambil jika sudah dinyatakan lolos berkas
                                </p>
                            </div>
                        </a>
                    @endif
                </div>
                <div class="col-md-3 col-xl-4">
                    @if($siswa->status == 2)
                    <a class="block block-rounded block-link-pop text-center"  href="{{ route('user.hasil-test') }}">
                        <div class="block-content block-content-full bg-secondary">
                            <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar19.jpg" alt="">
                        </div>
                        <div class="block-content block-content-full">
                            <p class="fw-semibold mb-0">Hasil Test</p>
                            <p class="fs-sm fw-medium text-muted mb-0">
                                Hasil test dapat dilihat setelah mengikuti test
                            </p>
                        </div>
                    </a>
                    @else
                    <a class="block block-rounded block-link-pop text-center" id="hasilTes"  href="">
                        <div class="block-content block-content-full bg-secondary">
                            <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar19.jpg" alt="">
                        </div>
                        <div class="block-content block-content-full">
                            <p class="fw-semibold mb-0">Hasil Test</p>
                            <p class="fs-sm fw-medium text-muted mb-0">
                                Hasil test dapat dilihat setelah mengikuti test
                            </p>
                        </div>
                    </a>
                    @endif
                </div>
                

            </div>
            @endif
            <!-- END Simple -->


        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <button type="button" class="btn-close" aria-label="Close"></button>
                <h2>Peringatan</h2>
                <p>Berkas Anda harus diverifikasi oleh admin sebelum Anda dapat mengambil Kartu Test.</p>
            </div>
        </div>
        <div id="myModal1" class="modal">
            <div class="modal-content">
                <button type="button" class="btn-close" aria-label="Close"></button>
                <h2>Peringatan</h2>
                <p>Anda Belum Mengikuti Ujian</p>
            </div>
        </div>
    </main>
    <!-- jQuery -->



    <script>
        var tautan = document.getElementById("kartuTes");
        tautan.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah tautan berpindah ke halaman lain

            // Lakukan pemeriksaan status di sini (pastikan $siswa->status sesuai dengan konteks PHP Anda)
            var status = {{ $siswa->status }};

            if (status !== 2) {
                // Tampilkan modal jika status tidak sama dengan 2
                var modal = document.getElementById("myModal");
                modal.style.display = "block";

                var closeModalButton = modal.querySelector(".btn-close");
                closeModalButton.addEventListener('click', function() {
                    modal.style.display = "none"; // Menutup modal
                });

                // Tambahkan event listener untuk menutup modal jika tombol close diklik

            } else {
                window.location.href = event.target
                    .href; // Lanjutkan ke halaman Kartu Test jika status sama dengan 2
            }
        });
        var tautan = document.getElementById("hasilTes");
        tautan.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah tautan berpindah ke halaman lain

            // Lakukan pemeriksaan status di sini (pastikan $siswa->status sesuai dengan konteks PHP Anda)
            var status = {{ $siswa->status }};

            if (status !== 2) {
                // Tampilkan modal jika status tidak sama dengan 2
                var modal = document.getElementById("myModal1");
                modal.style.display = "block";

                var closeModalButton = modal.querySelector(".btn-close");
                closeModalButton.addEventListener('click', function() {
                    modal.style.display = "none"; // Menutup modal
                });

                // Tambahkan event listener untuk menutup modal jika tombol close diklik

            } else {
                window.location.href = event.target
                    .href; // Lanjutkan ke halaman Kartu Test jika status sama dengan 2
            }
        });
    </script>

@stop
