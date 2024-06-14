<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Admin\UpdateStatus;
use App\Models\Nilai;
use App\Models\JadwalUjian;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Datatables;
use Illuminate\Support\Facades\Mail;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $ruangan = DB::table('ruangan')->get();
        if(request()->ajax()){
            $sekolah = DB::table('sekolahs')->where('users_id',Auth::user()->id)->first();
            $siswa = DB::table('siswas')->where('sekolahs_id',$sekolah->id)->where('jalur','Jalur Tes')->get();
           
            return datatables()->of($siswa)
            ->removeColumn('id')
            ->addIndexColumn()
            ->addColumn('action',function($data){
                $button = "<a class='btn btn-primary btn-sm' id='".$data->id."' onClick='editFunc($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Edit Data Diri Siswa'>
                                <i class='bi bi-pencil-square'></i>
                            </a>";
                $button .= '   ';
                
                $button .= "<a class='btn btn-danger btn-sm' id='".$data->id."' onClick='hapusFunc($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Hapus'>
                                <i class='bi bi-trash'></i>
                            </a>";
                
                $button .= '   ';

                if($data->status == 2){
                    $button .= "<a class='btn btn-success btn-sm disabled' onClick='editStatus($data->id)' id='btnEditStatus' data-bs-toggle='tooltip' data-bs-placement='top' title='Terima'>
                                    <i class='bi bi-check2-circle'></i>
                                </a>";

                }else{
                    $button .= "<a class='btn btn-success btn-sm' onClick='editStatus($data->id)' id='btnEditStatus' data-bs-toggle='tooltip' data-bs-placement='top' title='Terima'>
                                    <i class='bi bi-check2-circle'></i>
                                </a>";

                }

                      
                return $button;
            })
            ->addColumn('ruangan',function($data){
               

                if($data->ruangan == null){
                    $ruangan = "<a class='btn btn-warning btn-sm' id='".$data->id."' onClick='Ruangan($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Pilih Ruangan'>
                    <i class='bi bi-plus-square'></i>
                            </a>";
                $ruangan .= '   ';

                }else{
                    
                    $ruang = DB::table('ruangan')->where('id',$data->ruangan)->first(); 
                    $ruangan =  $ruang->nama;
                // $ruangan .= '   ';

                }

                      
                return $ruangan;
            })
            ->rawColumns(['action','ruangan'])
            ->make(true);
        }

        return view('user.petugas_sekolah.data-siswa', ['ruangan' => $ruangan]);
    }
    public function indexReguler()
    {    
        // $ruangan = DB::table('ruangan')->get();
        if(request()->ajax()){
            $sekolah = DB::table('sekolahs')->where('users_id',Auth::user()->id)->first();
            $siswa = DB::table('siswas')->where('sekolahs_id',$sekolah->id)->where('jalur','Jalur Reguler')->get();
           
            return datatables()->of($siswa)
            ->removeColumn('id')
            ->addIndexColumn()
            ->addColumn('action',function($data){
                $button = "<a class='btn btn-primary btn-sm' id='".$data->id."' onClick='editFunc($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Edit Data Diri Siswa'>
                                <i class='bi bi-pencil-square'></i>
                            </a>";
                $button .= '   ';
                
                $button .= "<a class='btn btn-danger btn-sm' id='".$data->id."' onClick='hapusFunc($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Hapus'>
                                <i class='bi bi-trash'></i>
                            </a>";
                
                $button .= '   ';

                if($data->status == 2){
                    $button .= "<a class='btn btn-success btn-sm disabled' onClick='editStatus($data->id)' id='btnEditStatus' data-bs-toggle='tooltip' data-bs-placement='top' title='Terima'>
                                    <i class='bi bi-check2-circle'></i>
                                </a>";

                }else{
                    $button .= "<a class='btn btn-success btn-sm' onClick='editStatus($data->id)' id='btnEditStatus' data-bs-toggle='tooltip' data-bs-placement='top' title='Terima'>
                                    <i class='bi bi-check2-circle'></i>
                                </a>";

                }

                      
                return $button;
            })
            // ->addColumn('ruangan',function($data){
               

            //     if($data->ruangan == null){
            //         $ruangan = "<a class='btn btn-warning btn-sm' id='".$data->id."' onClick='Ruangan($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Pilih Ruangan'>
            //         <i class='bi bi-plus-square'></i>
            //                 </a>";
            //     $ruangan .= '   ';

            //     }else{
                    
            //         $ruang = DB::table('ruangan')->where('id',$data->ruangan)->first(); 
            //         $ruangan =  $ruang->nama;
            //     // $ruangan .= '   ';

            //     }

                      
            //     return $ruangan;
            // })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('user.petugas_sekolah.data-siswa-reguler');
    }
    public function indexZonasi()
    {    
        // $ruangan = DB::table('ruangan')->get();
        if(request()->ajax()){
            $sekolah = DB::table('sekolahs')->where('users_id',Auth::user()->id)->first();
            $siswa = DB::table('siswas')->where('sekolahs_id',$sekolah->id)->where('jalur','Jalur Zonasi')->get();
           
            return datatables()->of($siswa)
            ->removeColumn('id')
            ->addIndexColumn()
            ->addColumn('action',function($data){
                $button = "<a class='btn btn-primary btn-sm' id='".$data->id."' onClick='editFunc($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Edit Data Diri Siswa'>
                                <i class='bi bi-pencil-square'></i>
                            </a>";
                $button .= '   ';
                
                $button .= "<a class='btn btn-danger btn-sm' id='".$data->id."' onClick='hapusFunc($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Hapus'>
                                <i class='bi bi-trash'></i>
                            </a>";
                
                $button .= '   ';

                if($data->status == 2){
                    $button .= "<a class='btn btn-success btn-sm disabled' onClick='editStatus($data->id)' id='btnEditStatus' data-bs-toggle='tooltip' data-bs-placement='top' title='Terima'>
                                    <i class='bi bi-check2-circle'></i>
                                </a>";

                }else{
                    $button .= "<a class='btn btn-success btn-sm' onClick='editStatus($data->id)' id='btnEditStatus' data-bs-toggle='tooltip' data-bs-placement='top' title='Terima'>
                                    <i class='bi bi-check2-circle'></i>
                                </a>";

                }

                      
                return $button;
            })
            // ->addColumn('ruangan',function($data){
               

            //     if($data->ruangan == null){
            //         $ruangan = "<a class='btn btn-warning btn-sm' id='".$data->id."' onClick='Ruangan($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Pilih Ruangan'>
            //         <i class='bi bi-plus-square'></i>
            //                 </a>";
            //     $ruangan .= '   ';

            //     }else{
                    
            //         $ruang = DB::table('ruangan')->where('id',$data->ruangan)->first(); 
            //         $ruangan =  $ruang->nama;
            //     // $ruangan .= '   ';

            //     }

                      
            //     return $ruangan;
            // })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('user.petugas_sekolah.data-siswa-zonasi');
    }
    public function indexPrestasi()
    {    
        // $ruangan = DB::table('ruangan')->get();
        if(request()->ajax()){
            $sekolah = DB::table('sekolahs')->where('users_id',Auth::user()->id)->first();
            $siswa = DB::table('siswas')->where('sekolahs_id',$sekolah->id)->where('jalur','Jalur Prestasi')->get();
           
            return datatables()->of($siswa)
            ->removeColumn('id')
            ->addIndexColumn()
            ->addColumn('action',function($data){
                $button = "<a class='btn btn-primary btn-sm' id='".$data->id."' onClick='editFunc($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Edit Data Diri Siswa'>
                                <i class='bi bi-pencil-square'></i>
                            </a>";
                $button .= '   ';
                
                $button .= "<a class='btn btn-danger btn-sm' id='".$data->id."' onClick='hapusFunc($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Hapus'>
                                <i class='bi bi-trash'></i>
                            </a>";
                
                $button .= '   ';

                if($data->status == 2){
                    $button .= "<a class='btn btn-success btn-sm disabled' onClick='editStatus($data->id)' id='btnEditStatus' data-bs-toggle='tooltip' data-bs-placement='top' title='Terima'>
                                    <i class='bi bi-check2-circle'></i>
                                </a>";

                }else{
                    $button .= "<a class='btn btn-success btn-sm' onClick='editStatus($data->id)' id='btnEditStatus' data-bs-toggle='tooltip' data-bs-placement='top' title='Terima'>
                                    <i class='bi bi-check2-circle'></i>
                                </a>";

                }

                      
                return $button;
            })
            // ->addColumn('ruangan',function($data){
               

            //     if($data->ruangan == null){
            //         $ruangan = "<a class='btn btn-warning btn-sm' id='".$data->id."' onClick='Ruangan($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Pilih Ruangan'>
            //         <i class='bi bi-plus-square'></i>
            //                 </a>";
            //     $ruangan .= '   ';

            //     }else{
                    
            //         $ruang = DB::table('ruangan')->where('id',$data->ruangan)->first(); 
            //         $ruangan =  $ruang->nama;
            //     // $ruangan .= '   ';

            //     }

                      
            //     return $ruangan;
            // })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('user.petugas_sekolah.data-siswa-prestasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $siswa = Siswa::find($request->id);
        return response()->json(['data' => $siswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $data = Siswa::find($id);
        $simpan = $data->update($request->all());
        if($simpan){
            return response()->json(['success' => 'Data berhasil diubah']);
        }else{
            return response()->json(['error' => 'Data gagal diubah']);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $data = Siswa::find($id);
        $data->delete();
        return response()->json(['success' => 'Data berhasil dihapus']);
    }
    public function destroyNilai(Request $request)
    {
        $id = $request->id;
        $data = $nilai = DB::table('nilai')->find($id);
        if ($nilai) {
            DB::table('nilai')->where('id', $id)->delete();
            // Data dengan ID tertentu telah dihapus.
            return response()->json(['success' => 'Data berhasil dihapus']);
        }else{
            return response()->json(['error' => 'Data tidak ditemukan']);
        }
        
    }

    public function updateStatus(Request $request)
    {
        $id = $request->id;
        $data = Siswa::find($id);
    
        if (!$data) {
            return response()->json(['error' => 'Siswa tidak ditemukan'], 404);
        }
    
        $data->status = 2;
        $data->save();
       if($data->jalur=='Jalur Tes'){
        DB::table('nilai')->insert([
            'id_siswa' => $id,
            'id_sekolah' => $data->sekolahs_id,
            'matematika' => 0,
            'bahasa_indonesia' => 0,
            'bahasa_inggris' => 0,
            'ipa' => 0,
            'agama' => 0,
            'bacaan_quran' => 0,
            'praktek_ibadah' => 0,
            'doa_harian' => 0,
        ]);
        DB::table('jadwal_ujian')->insert([
            'id_siswa' => $id,
            'tanggal' => '',
            'waktu_mulai' => '',
            'waktu_selesai' => '',
        ]);
       }
       
        return response()->json(['success' => 'Data berhasil diubah']);
    }
    public  function updateRuangan (Request $request)
    {
        $id = $request->id;
        // dd($id);
        $data = Siswa::find($id);
        $data->ruangan = $request->ruangan;
        $data->save();
        DB::table('ruangan')
        ->where('id', $data->ruangan)
        ->decrement('kuota', 1);
        return response()->json(['success' => 'Data berhasil diubah']); 
    }
    public function nilai()
    {    
      
        if(request()->ajax()){
            $sekolah = DB::table('sekolahs')->where('users_id',Auth::user()->id)->first();
            $nilai = DB::table('nilai')
            ->join('siswas', 'nilai.id_siswa', '=', 'siswas.id') // Sesuaikan dengan hubungan antara tabel nilai dan siswa
            ->where('nilai.id_sekolah', $sekolah->id)
            ->select('nilai.*', 'siswas.nama_lengkap as nama_siswa', 'siswas.nisn as nisn') // Memilih kolom yang diperlukan, alias nama kolom siswa sebagai 'nama_siswa'
            ->get();    
            
            return datatables()->of($nilai)
            ->removeColumn('id')
            ->addIndexColumn()
            ->addColumn('action',function($data){
                $button = "<a class='btn btn-primary btn-sm' id='".$data->id."' onClick='editFunc($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Edit Data Diri Siswa'>
                                <i class='bi bi-pencil-square'></i>
                            </a>";
                $button .= '   ';
                
                $button .= "<a class='btn btn-danger btn-sm' id='".$data->id."' onClick='hapusFunc($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Hapus'>
                                <i class='bi bi-trash'></i>
                            </a>";
                
                $button .= '   '; 
                return $button;
            })
            // ->with(['nama' => $nama->nama])
            ->rawColumns(['action'])
            ->make(true);
        }

       

        return view('user.petugas_sekolah.data-nilai');
    }
    public function ujian()
    {    
      
        if(request()->ajax()){
            // $sekolah = DB::table('sekolahs')->where('users_id',Auth::user()->id)->first();
            $nilai = DB::table('jadwal_ujian')
            ->join('siswas', 'jadwal_ujian.id_siswa', '=', 'siswas.id') // Sesuaikan dengan hubungan antara tabel jadwal_ujian dan siswa
            ->select('jadwal_ujian.*', 'siswas.nama_lengkap as nama_siswa', 'siswas.nisn as nisn') // Memilih kolom yang diperlukan, alias nama kolom siswa sebagai 'nama_siswa'
            ->get();    
            
            return datatables()->of($nilai)
            ->removeColumn('id')
            ->addIndexColumn()
            ->addColumn('action',function($data){
                $button = "<a class='btn btn-primary btn-sm' id='".$data->id."' onClick='editFunc($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Edit Data Diri Siswa'>
                                <i class='bi bi-pencil-square'></i>
                            </a>";
                $button .= '   ';
                
                $button .= "<a class='btn btn-danger btn-sm' id='".$data->id."' onClick='hapusFunc($data->id)' data-bs-toggle='tooltip' data-bs-placement='top' title='Hapus'>
                                <i class='bi bi-trash'></i>
                            </a>";
                
                $button .= '   '; 
                return $button;
            })
            // ->with(['nama' => $nama->nama])
            ->rawColumns(['action'])
            ->make(true);
        }

       

        return view('user.petugas_sekolah.data-jadwal-ujian');
    }
    public function editNilai(Request $request)
{
    $nilai = Nilai::with('siswa')->find($request->id);

    if ($nilai) {
        $data = [
            'id' => $nilai->id,
            'matematika' => $nilai->matematika,
            'agama' => $nilai->agama,
            'bahasa_indonesia' => $nilai->bahasa_indonesia,
            'bahasa_inggris' => $nilai->bahasa_inggris,
            'ipa' => $nilai->ipa,
            'bacaan_quran' => $nilai->bacaan_quran,
            'doa_harian' => $nilai->doa_harian,
            'praktek_ibadah' => $nilai->praktek_ibadah,
            'nama_siswa' => $nilai->siswa->nama_lengkap,
            'nisn' => $nilai->siswa->nisn,
            // Tambahkan kolom-kolom nilai lainnya di sini jika diperlukan
        ];

        return response()->json(['data' => $data]);
    } else {
        return response()->json(['message' => 'Data nilai tidak ditemukan'], 404);
    }
}
public function editJadwal(Request $request)
{
    // Validasi ID
    $request->validate([
        'id' => 'required|exists:jadwal_ujian,id',
    ]);

    // Cari jadwal ujian
    $jadwal = JadwalUjian::with('siswa')->find($request->id);

    if ($jadwal) {
        // Dapatkan data jadwal ujian
        $data = [
            'id' => $jadwal->id,
            'tanggal' => $jadwal->tanggal,
            'waktu_mulai' => $jadwal->waktu_mulai,
            'waktu_selesai' => $jadwal->waktu_selesai,
            'nama_siswa' => $jadwal->siswa->nama_lengkap,
            'nisn' => $jadwal->siswa->nisn,
            // Tambahkan kolom-kolom nilai lainnya di sini jika diperlukan
        ];

        return response()->json(['data' => $data]);
    } else {
        // Handle jika data tidak ditemukan
        return response()->json(['message' => 'Jadwal ujian tidak ditemukan'], 404);
    }
}
  
public function updateNilai(Request $request)
    {
        $id = $request->id;
        $data = Nilai::find($id);
         if (!$data) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        $simpan = $data->update($request->all());
        // $simpan->save();
        if($simpan){
            return response()->json(['success' => 'Data berhasil diubah']);
        }else{
            return response()->json(['error' => 'Data gagal diubah']);
        }
        
    }
public function updateJadwal(Request $request)
    {
        $id = $request->id;
        $data = JadwalUjian::find($id);
         if (!$data) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        $simpan = $data->update($request->all());
        // $simpan->save();
        if($simpan){
            return response()->json(['success' => 'Data berhasil diubah']);
        }else{
            return response()->json(['error' => 'Data gagal diubah']);
        }
        
    }
    public function destroyJadwal(Request $request)
    {
        $id = $request->id;
        $data = JadwalUjian::find($id);
        $data->delete();
        return response()->json(['success' => 'Data berhasil dihapus']);
    }

}
