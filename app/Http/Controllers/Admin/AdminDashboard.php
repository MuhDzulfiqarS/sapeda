<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboard extends Controller
{
    public function index()
    {
        // return view('user.petugas_sekolah.dashboard');
        $jumlah = Siswa::where('sekolahs_id',Auth::user()->id)->count();
        // dd($jumlah);
        return view('user.petugas_sekolah.dashboard',[
            'jumlah' => $jumlah
        ]);
    }
}
