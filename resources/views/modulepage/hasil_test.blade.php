<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Hasil Tes Peserta Didik Baru</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">
</head>
<body>
    <div class="card">
        <main>
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo Sekolah">
            <div class="text">
                <h2>HASIL TEST</h2>
                <h4>Madrasah Aliyah Kabupaten Pangkep</h4>
                <p> Tahun Ajaran 2023/2024</p>
            </div>

            <h3>PENGUMUMAN</h3>
            <p>Kami dengan ini memberitahukan bahwa peserta dengan nama: <strong>{{$siswa->nama_lengkap}}</strong> </p>
            @php
            $jumlah = ($hasil->matematika + $hasil->bahasa_indonesia + $hasil->bahasa_inggris + $hasil->ipa + $hasil->agama
            + $hasil->bacaan_quran + $hasil->praktek_ibadah + $hasil->doa_harian)/8
            @endphp
            @if($jumlah>70)
            <p>Dinyatakan <strong>Lulus</strong> dengan nilai rata-rata {{$jumlah}}</p>
            @else
            <p>Dinyatakan <strong>Tidak Lulus</strong> dengan nilai rata-rata {{$jumlah}}</p>
            @endif
            <p>Dengan rincian nilai sebagai berikut:</p>
            <table>
            <b>TES TULIS</b>
                <tr>
                    <td>MATA UJIAN</td>
                    <td>NILAI</td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>{{$hasil->matematika}}</td>
                </tr>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td>{{$hasil->bahasa_indonesia}}</td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td>{{$hasil->bahasa_inggris}}</td>
                </tr>
                <tr>
                    <td>IPA</td>
                    <td>{{$hasil->ipa}}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>{{$hasil->agama}}</td>
                </tr>
                <!-- Tambahkan baris nilai lainnya sesuai kebutuhan -->
            </table>
            <br>
            <table>
            <b>TES PRAKTIK</b>
                <tr>
                    <td>MATA UJIAN</td>
                    <td>NILAI</td>
                </tr>
                <tr>
                    <td>Bacaan Al-Quran</td>
                    <td>{{$hasil->bacaan_quran}}</td>
                </tr>
                <tr>
                    <td>Praktek Ibadah</td>
                    <td>{{$hasil->praktek_ibadah}}</td>
                </tr>
                <tr>
                    <td>Doa Harian</td>
                    <td>{{$hasil->doa_harian}}</td>
                </tr>
            </table>
            <p align="center">
                <button onclick="window.location.href='{{ route('user.download-pdf-hasil-tes') }}'"><i
                        class="fa fa-print">
                        Cetak Kartu Test
                    </i></button>
            </p>
        </main>

        <footer>
            <p>&copy; 2023 Madrasah Aliyah Kab.Pangkep. All rights reserved.</p>
        </footer>
    </div>

    <script>
        document.getElementById("cetakButton").addEventListener("click", function() {
            window.print();
        });
    </script>

</body>

</html>
