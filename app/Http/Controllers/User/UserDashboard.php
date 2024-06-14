<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('users_id',Auth::user()->id)->first();
        return view('user.dashboard.index',[
            'siswa' => $siswa
        ]);
    }
}
