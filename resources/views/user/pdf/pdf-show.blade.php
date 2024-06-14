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
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div>
        {{-- <img src="{{ public_path("storage"."/".$siswa->foto) }}" alt="foto" width="30%" >         --}}
        <table width="80%">
            
            <tr>
                <td width="30%" rowspan="6">
                  <img src="{{ public_path("storage"."/".$siswa->foto) }}" alt="foto" width="120px" height="150px" border="2">
                </td>
                <td>Nomor Pendaftaran</td>
                <td>{{': '.$siswa->no_pendaftaran}}</td>
            </tr>
            <tr>
                
                <td>Nama</td>
                <td>{{': '.$siswa->nama_lengkap}}</td>
            </tr>
            <tr>
                
                <td>Jenis Kelamin</td>
                <td>{{': '.$siswa->jenis_kelamin}}</td>
            </tr>
            <tr>
                
                <td>Tanggal Lahir</td>
                <td>{{': '.\Carbon\Carbon::createFromFormat('Y-m-d', $siswa->tanggal_lahir)
                    ->format('d M Y');}}</td>
            </tr>
            <tr>
                
                <td>Alamat</td>
                <td>{{': '.$siswa->alamat}}</td>
            </tr>
            <tr>
               
                <td>Asal Sekolah</td>
                <td>{{': '.$siswa->asal_sekolah}}</td>
            </tr> 
            <br>  
            <br>  
            <tr>
                <td align="left" colspan="2">Kepala Sekolah</td>
            </tr>
            <tr style="margin-top: 10px;width:30% ;">
                <td align="left" colspan="2">{{$siswa->Sekolahs->nama_sekolah}}</td>
            </tr>
            <br>
            <br>
            <br>
            <br>
            <tr style="margin-top: 10px;">
                <td align="left" colspan="2">{{$siswa->Sekolahs->kepala_sekolah}}</td>
            <tr style="margin-top: 10px;">
                <td align="left" colspan="2">{{$siswa->Sekolahs->nip}}</td>
            </tr>
           
        </table>
        
        
    </div>
</body>
</html>