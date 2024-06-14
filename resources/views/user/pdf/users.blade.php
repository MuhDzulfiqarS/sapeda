@extends('layouts.app')
@section('content')
@include('components.navbar')
@include('components.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
     @include('components.alert')
      <h1>Formulir</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Formulir</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title">Formulir Pendaftaran Siswa Baru</h5>
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="row text-center">
                            <div class="col-12">
                                @if ($siswa->foto)
                                    <img  src="{{asset('storage/'.$siswa->foto)}}" alt="foto"  style="border-radius: 200px" width="200px" height="200px">
                                
                                    
                                @else
                                <img src="{{asset('img/profile-img.jpg')}}" style="border-radius: 200px" width="200px" height="200px">
                                    
                                @endif
                            </div>
                            <div class="col-12 mt-3">
                                <b>Status Pendaftaran</b>
                            </div>
                            <div class="col-12 mt-3">
                                @if ($siswa->status == 0)
                                    <button class="btn btn-danger">Data Belum Lengkap</span>
                                    
                                @elseif ($siswa->status == 1)
                                    <button class="btn btn-warning">Belum Dikonfirmasi</span>

                                    
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-9 ml-4 ">
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-4 col-form-label">No. Pendaftaran</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$siswa->no_pendaftaran}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-4   col-form-label">Nama Lengkap</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$siswa->nama_lengkap}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-4 col-form-label">NISN</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$siswa->nisn}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-4 col-form-label">Tempat dan Tanggal Lahir</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" disabled value="{{$siswa->tempat,}}">
                            </div>
                        </div>
                    </div>

                </div>
                      
                <div class="text-center">
                      <a class="btn btn-primary" href="{{route('user.download-pdf')}}"><i class="bi bi-download"></i> Dwonload PDF</a>
                </div>
            </div>
          </div>

        </div>
        
    </div>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Perhatian !!!</h4>
            <p>Harap Melengkapi data sebelum melakukan Download</p>   
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
    </section>

</main><!-- End #main -->
@endsection