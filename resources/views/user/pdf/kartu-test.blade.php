<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 25px;
            width: 700px;
        }

        .container {
            margin: 10px auto;

        }

        img.kanan {
            max-width: 95px;
            float: left;
            border-radius: 20px;
            border: 5px solid white;
            margin-right: 10px;
        }

        .text h2 {
            padding-top: 32px;
            margin-top: 1px;
            line-height: 40%;
            text-align: center;
            padding-right: 115px;
        }

        .text h4 {
            padding-top: 1px;
            line-height: 40%;
            text-align: center;
            padding-right: 105px;
        }

        .text p {
            line-height: 40%;
            text-align: center;
            padding-right: 120px;
        }

        .card h3 {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 5px solid black;
            text-align: center;
        }

        .table1 {
            font-family: sans-serif;
            color: #232323;
            border-collapse: collapse;
            width: 100%;
            background: white;
            font-weight: normal;
        }

        .table1,
        th,
        td {
            border: 3px solid black;
            padding: 5px 50px;
        }

        img.kiri {
            width: 180px;
            height: 180px;
            margin: 40px 3px;
            float: right;
        }


        .student-info {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid black;
        }

        .student-info p {
            margin: 5px 0;
        }
    </style>
    <title>Kartu Tes Siswa</title>
</head>

<body>
    <div class="card">
        <div class="container">
            <img class=kanan src="{{ public_path('assets/images/logo.jpg') }}" />
            <div class="text">
                <h2>KARTU TEST MASUK</h2>
                <h4>Madrasah Aliyah Kabupaten Pangkajene dan Kepulauan</h4>
                <p> Tahun Ajaran 2023/2024</p>
            </div>
        </div>
        <h3>KARTU TEST MASUK</h3>
        <table class="table1" border="1">
            <tr>
                <th>No Peserta</th>
                <th>NISN</th>
                <th>Tanggal Mendaftar</th>
            </tr>
            <tr>
                <td>{{ $siswa->no_pendaftaran }}</td>
                <td>{{ $siswa->nisn }}</td>
                @php
                $carbonCreatedAt = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $siswa->created_at);
                @endphp
                <td>{{ $carbonCreatedAt->format('Y-m-d') }}</td>
            </tr>
        </table>
        <div style="align: justify;">
            <img class=kiri src="{{ public_path('storage/'.$siswa->foto) }}" />
        </div>
        @php
        $ruangan = DB::table('ruangan')->where('id',$siswa->ruangan)->first();
        $jadwal = DB::table('jadwal_ujian')->where('id_siswa',$siswa->id)->first();
        @endphp
        <div class="student-info">
            <p><strong>Nama Lengkap : {{ $siswa->nama_lengkap }}</strong></p>
            <p><strong>Tempat, Tgl Lahir : {{ $siswa->tempat }}, {{ $siswa->tanggal_lahir }}</strong></p>
            <p><strong>Jenis Kelamin : {{ $siswa->jenis_kelamin }}</strong></p>
            <p><strong>Alamat : {{ $siswa->alamat }}</strong></p>
            <p><strong>Sekolah Asal : {{ $siswa->asal_sekolah }}</strong></p>
            <p><strong>Tgl Ujian : {{$jadwal->tanggal}}</strong></p>
            <p><strong>Pukul : {{$jadwal->waktu_mulai}} - {{$jadwal->waktu_selesai}}    </strong></p>
            <p><strong>Ruangan : {{ $ruangan->nama }}</strong></p>
        </div>
        <div class="student-info">
            <p><strong>Catatan :</strong></p>
            <p>1. Selama ujian kartu ujian peserta harus dibawa</p>
            <p>2. pengumuman hasil seleksi ppdb tanggal 31 Oktober 2023 s.d 31 November 2023 melalui website
                http//SAPEDA.com</p>
            <p align="center">
            </p>
        </div>
    </div>

    <script>
        window.print();
    </script>

</body>

</html>
