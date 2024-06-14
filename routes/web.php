<?php

use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\AdminRuanganController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\Admin\DocumentController as AdminDocumentController;
use App\Http\Controllers\Admin\SekolahController;
use App\Http\Controllers\Admin\SiswaController as AdminSiswaController;
use App\Http\Controllers\AdminKab\AdminKabDashboard;
use App\Http\Controllers\AdminKab\DocumentController as AdminKabDocumentController;
use App\Http\Controllers\AdminKab\SekolahController as AdminKabSekolahController;
use App\Http\Controllers\AdminKab\SiswaController as AdminKabSiswaController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DocumentController;
use App\Http\Controllers\User\SiswaController;
use App\Http\Controllers\User\UserDashboard;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//   Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');

Route::get('/',[PortalController::class,'home'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('ubah-password',[UserController::class,'changePassword'])->name('ubah-password');
    Route::post('update-password',[UserController::class,'updatePassword'])->name('update-password');
    Route::get('/dashboard-siswa',[SiswaController::class,'dashboard'])->name('dashboard.siswa');
    Route::prefix('user/home')->name('user.')->middleware('ensureUserRole:1')->group(function(){
        Route::get('/',[UserDashboard::class,'index'])->name('dashboardSiswa');
        Route::resource('siswa',SiswaController::class);
        Route::put('/siswa/data-alamat/{siswa}',[SiswaController::class,'updateDataAlamat'])->name('siswa.updateDataAlamat');
        Route::put('/siswa/data-orangtua/{siswa}',[SiswaController::class, 'updateDataOrangTua'])->name('siswa.updateDataOrangTua');
        Route::put('/siswa/pilihan-sekolah/{siswa}',[SiswaController::class, 'updatePilihanSekolah'])->name('siswa.updatePilihanSekolah');
        Route::put('/siswa/upload-foto/{siswa}',[SiswaController::class, 'uploadFoto'])->name('siswa.uploadFoto');
        Route::resource('document',DocumentController::class);
        Route::get('/cetak-formulir',[SiswaController::class, 'indexCetak'])->name('cetak-formulir');
        Route::get('/download-pdf',[SiswaController::class, 'downloadPDF'])->name('download-pdf');
        Route::get('/download-pdf-kartu-test',[SiswaController::class, 'downloadPDFKartuTes'])->name('download-pdf-kartu-tes');
        Route::get('/download-pdf-hasil-test',[SiswaController::class, 'downloadPDFHasilTes'])->name('download-pdf-hasil-tes');
        Route::get('/show-pdf',[SiswaController::class, 'showPdf'])->name('show-pdf');
        Route::get('/kartu-test',[SiswaController::class, 'kartuTest'] )->name('kartu-test');
        Route::get('/hasil-test',[SiswaController::class, 'hasilTest'] )->name('hasil-test');
    });
    Route::prefix('admin/home')->name('admin.')->middleware('ensureAdminRole:2')->group(function(){
        Route::get('/',[AdminDashboard::class,'index'])->name('dashboard');
        Route::resource('sekolah',SekolahController::class);
        Route::put('/sekolah/alamat-lembaga/{sekolah}', [SekolahController::class, 'alamatLembaga'])->name('sekolah.alamatLembaga');
        Route::get('/data-siswa-tes',[AdminSiswaController::class,'index'])->name('siswa.data-siswa-tes');
        Route::get('/data-siswa-reguler',[AdminSiswaController::class,'indexReguler'])->name('siswa.data-siswa-reguler');
        Route::get('/data-siswa-zonasi',[AdminSiswaController::class,'indexZonasi'])->name('siswa.data-siswa-zonasi');
        Route::get('/data-siswa-prestasi',[AdminSiswaController::class,'indexPrestasi'])->name('siswa.data-siswa-prestasi');
        Route::get('/data-pembagian-ruangan',[AdminRuanganController::class,'index'])->name('siswa.data-ruangan');
        Route::post('/hapus-ruangan',[AdminRuanganController::class,'destroy'])->name('siswa.hapusRuangan');

        Route::post('/edit-ruangan',[AdminRuanganController::class,'editRuangan'])->name('siswa.editRuangan');
        Route::post('/update-ruangan',[AdminRuanganController::class,'updateRuanganAdmin'])->name('siswa.updateRuangan');
        Route::post('/create-ruangan',[AdminRuanganController::class,'createRuangan'])->name('siswa.createRuangan');
        Route::post('/edit-data-siswa',[AdminSiswaController::class,'edit'])->name('siswa.editDataSiswa');
        Route::post('/update-data-siswa',[AdminSiswaController::class,'update'])->name('siswa.updateDataSiswa');
        Route::post('/update-data-ruangan',[AdminSiswaController::class,'updateRuangan'])->name('siswa.updateDataRuangan');
        Route::post('/hapus-data-siswa',[AdminSiswaController::class,'destroy'])->name('siswa.hapusDataSiswa');
        Route::post('/hapus-data-nilai',[AdminSiswaController::class,'destroyNilai'])->name('siswa.hapusDataNilai');
        Route::get('/data-berkas',[AdminDocumentController::class,'index'])->name('siswa.index-document');
        Route::get('/data-jadwal-ujian',[AdminSiswaController::class,'ujian'])->name('siswa.jadwal-ujian');
        Route::post('/edit-jadwal-ujian',[AdminSiswaController::class,'editJadwal'])->name('siswa.editJadwal');
        Route::post('/hapus-jadwal-ujian',[AdminSiswaController::class,'destroyJadwal'])->name('siswa.hapusJadwal');
        Route::post('/update-jadwal-ujian',[AdminSiswaController::class,'updateJadwal'])->name('siswa.updateJadwal');

        Route::get('/data-nilai',[AdminSiswaController::class,'nilai'])->name('siswa.nilai');
        Route::post('/edit-data-nilai',[AdminSiswaController::class,'editNilai'])->name('siswa.editNilai');
        Route::post('/update-data-nilai',[AdminSiswaController::class,'updateNilai'])->name('siswa.updateNilai');
        Route::get('/dwonload-file/{ijazah}',[AdminDocumentController::class,'downloadFile'])->name('siswa.downloadFile');
        Route::get('/dwonload-kk/{id}',[AdminDocumentController::class,'downloadKk'])->name('siswa.downloadKk');
        Route::get('/dwonload-akta-kelahiran/{id}',[AdminDocumentController::class,'download_akta_kelahiran'])->name('siswa.download_akta_kelahiran');
        Route::get('/dwonload-rapor/{id}',[AdminDocumentController::class,'downloadRapor'])->name('siswa.download-rapor');
        Route::post('/edit-document',[AdminDocumentController::class,'edit'])->name('siswa.edit-document');
        Route::post('/update-document',[AdminDocumentController::class,'update'])->name('siswa.update-document');
        Route::post('/hapus-document',[AdminDocumentController::class,'destroy'])->name('siswa.destroy-document');
        Route::post('/update-status',[AdminSiswaController::class,'updateStatus'])->name('siswa.update-status');       
    });
    
    Route::prefix('admin-kab/home')->name('admin-kab.')->middleware('ensureAdminKabRole:3')->group(function(){
        Route::get('/',[AdminKabDashboard::class,'index'])->name('dashboard');
        Route::get('/data-siswa',[AdminKabSiswaController::class,'index'])->name('siswa.data-siswa');
        Route::get('/users/ajax', [AdminKabSiswaController::class,'getUsers'])->name('get-users');
        Route::get('/data-berkas',[AdminKabDocumentController::class,'index'])->name('siswa.index-document');
        Route::get('/dwonload-file/{ijazah}',[AdminDocumentController::class,'downloadFile'])->name('siswa.downloadFile');
        Route::get('/dwonload-kk/{id}',[AdminDocumentController::class,'downloadKk'])->name('siswa.downloadKk');
        Route::get('/dwonload-akta-kelahiran/{id}',[AdminDocumentController::class,'download_akta_kelahiran'])->name('siswa.download_akta_kelahiran');
        Route::get('/dwonload-rapor/{id}',[AdminDocumentController::class,'downloadRapor'])->name('siswa.download-rapor');
        Route::post('/edit-document',[AdminDocumentController::class,'edit'])->name('siswa.edit-document');
        Route::get('/data-sekolah',[AdminKabSekolahController::class,'index'])->name('sekolah.data-sekolah');
        Route::post('/tambah-sekolah',[AdminKabSekolahController::class,'store'])->name('sekolah.tambah-sekolah');
        Route::post('/hapus-sekolah',[AdminKabSekolahController::class,'destroy'])->name('sekolah.hapus-sekolah');

    });

});

require __DIR__.'/auth.php';
