<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Ruangan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminRuanganController extends Controller
{
    public function index()
    {    
        if(request()->ajax()){
            $ruangan = DB::table('ruangan')->get();
            return datatables()->of($ruangan)
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
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('user.petugas_sekolah.data-pembagian-ruangan');
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $data = DB::table('ruangan')->find($id);
        if ($data) {
            DB::table('ruangan')->where('id', $id)->delete();
            // Data dengan ID tertentu telah dihapus.
            return response()->json(['success' => 'Data berhasil dihapus']);
        }
        // return response()->json(['success' => 'Data berhasil dihapus']);
    }
    public function editRuangan(Request $request)
    {
        $ruangan = DB::table('ruangan')->find($request->id);
    
        if ($ruangan) {
            $data = [
                'id' => $ruangan->id,
                'nama' => $ruangan->nama,
                'kuota' => $ruangan->kuota, 
            ];
    
            return response()->json(['data' => $data]);
        } else {
            return response()->json(['message' => 'Data ruangan tidak ditemukan'], 404);
        }
    }
    public function updateRuanganAdmin(Request $request)
    {
        $id = $request->id;
        $data = DB::table('ruangan')->find($request->id);
         if (!$data) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        $result = DB::table('ruangan')
        ->where('id', $id)
        ->update([
            'nama' => $request->nama,
            'kuota' => $request->kuota
        ]);

    if ($result) {
        return response()->json(['success' => 'Data berhasil diubah']);
    } else {
        return response()->json(['error' => 'Data gagal diubah']);
    }
        
    }
    public function createRuangan(Request $request)
    {
        // Validasi data sebelum memasukkannya ke dalam database
        $validator = Validator::make($request->all(), [
            'nama' => 'required|unique:ruangan,nama', // Menyatakan bahwa 'nama' harus unik dalam tabel 'ruangan'
            'kuota' => 'required|integer',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
        }
    
        // Data belum ada, tambahkan data baru
        $ruangan = new Ruangan;
        $ruangan->nama = $request->nama;
        $ruangan->kuota = $request->kuota;
        $ruangan->save();
    
        if ($ruangan) {
            return redirect()->route('admin.siswa.data-ruangan')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('admin.siswa.data-ruangan')->with('error', 'Data gagal ditambahkan');
        }
    }
    
}
