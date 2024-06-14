<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .rangkasurat{
            width: 90%;
            margin: 0 auto;
            background-color: #fff;
            padding: 1%;
        }
        .table{
            border-bottom: 3px solid #000;
            padding: 1%;
        }
        .tengah{
            text-align: center;
            line-height: 9%
        }
        .paragraf{
            text-align: center;
            margin-top: 5%;
            /* font-weight: 500; */
        }
       
    </style>
</head>
<body>
    <div class="rangkasurat">
        <table width="100%" class="table">
            <tr>
                <td>
                    <img src="{{asset('img/logo.jpg')}}" width="100px" alt="">
                <td class="tengah">
                    <h4>KEMENTRIAN AGAMA REPUBLIK INDONESIA</h4>
                    <h4>KANTOR KEMENTRIAN AGAMA KABUPATEN PANGKEP</h4>
                    <h4>MADRASAH ALIYAH NEGERI (MAN) PANGKAJENE KEPULAUAN</h4>
                    <p>Jl. Raya Talaka KM.65 Telp. (0410) 5315304, Fax(0410) 2315304</p>
                    <p>Kode Pos 90654 Ma'rang</p>
                    <p>Email: man.pangkep@gmail.com</p>
                </td>
                </td>
            </tr>

        </table>
        <h4 class="paragraf">Formulir Pendaftaran Peserta Didik Baru Tahun 2022</h4>
    </div>

    <div>
        {{-- <img src="{{ public_path("storage"."/".$siswa->foto) }}" alt="foto" width="30%" >         --}}
        <table width="100%">
            <tr>
                <td width="0.5%"><b>1.</b></td>
                <td width="3%">
                    <b>Registrasi Peserta Didik</b>
                </td>
                <td width="5%"></td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">Nomor Pendaftaran</td>
                <td width="5%">{{': '.$siswa->no_pendaftaran}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">Nama Sekolah Asal</td>
                <td width="5%">{{': '.$siswa->asal_sekolah}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">NPSN Sekolah Asal</td>
                <td width="5%">{{': '.$siswa->npsn_asal_sekolah}}</td>
            </tr>

            <tr>
            </tr>
            <tr>
                <td width="0.5%"><b>2.</b></td>
                <td width="3%">
                    <b>Biodata Peserta Didik</b>
                </td>
                <td width="5%"></td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">Nama Lengkap</td>
                <td width="5%">{{': '.$siswa->nama_lengkap}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">Jenis Kelamin</td>
                <td width="5%">{{': '.$siswa->jenis_kelamin}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">NISN</td>
                <td width="5%">{{': '.$siswa->nisn}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">NIK</td>
                <td width="5%">{{': '.$siswa->nik}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">Tempat Lahir</td>
                <td width="5%">{{': '.$siswa->tempat}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">Tanggal Lahir</td>
                <td width="5%">{{': '.\Carbon\Carbon::createFromFormat('Y-m-d', $siswa->tanggal_lahir)
                    ->format('d M Y');}}</td>
            </tr>
            <tr></tr>
            <tr>
                <td width="0.5%"><b>3.</b></td>
                <td width="3%">
                    <b>Alamat Peserta Didik</b>
                </td>
                <td width="5%"></td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">Alamat Jalan</td>
                <td width="5%">{{': '.$siswa->alamat}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">RT/RW</td>
                <td width="5%">{{': '.$siswa->rt.'/'.$siswa->rw}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">Kelurahan/Desa</td>
                <td width="5%">{{': '.$siswa->desa}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">Kecamatan</td>
                <td width="5%">{{': '.$siswa->kecamatan}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">Kabupaten</td>
                <td width="5%">{{': '.$siswa->kabupaten}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">Provinsi</td>
                <td width="5%">{{': '.$siswa->provinsi}}</td>
            </tr>
            <tr>
                <td></td>
                <td width="3%">No. HP</td>
                <td width="5%">{{': '.$siswa->handphone}}</td>
            </tr>
        </table>
        <table style="margin-top: 10%" width="100%">
            <tr height="100%">    
                <td><img src="https://api.qrserver.com/v1/create-qr-code/?data={{$siswa->nisn.'-'.$siswa->nama_lengkap}}&amp;size=100x100" alt=""></td>
                <td><img src="{{ public_path("storage"."/".$siswa->foto) }}" alt="foto" width="50%"></td>
                <td width="30%">
                    <p>Ma'rang, {{date('d-M-Y')}}</p>
                    <p>Pendaftar</p>
                    <br/>
                    <br/>
                    <br/>
                    <b>{{$siswa->nama_lengkap}}</b>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>