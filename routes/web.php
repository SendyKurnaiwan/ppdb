<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Registrasi;
use App\Http\Controllers\Login;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\DataPesertaController;
use App\Http\Controllers\DataOrangtuaController;
use App\Http\Controllers\DataLengkapController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\AdminLogin;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\OrtuController;
use Illuminate\Support\Facades\Auth;



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

Route::get('/', function () {
    return view('index',[
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/profil', function () {
    return view('profil.index',[
        "title" => "Profil",
        "active" => "profil",
    ]);
});

Route::get('/ppdb', function () {
    return view('ppdb.index',[
        "title" => "PPDB 2023/2024",
        "active" => "ppdb",
    ]);
});

Route::get('/PPLG', [JurusanController::class, 'PPLG']);
Route::get('/TJKT', [JurusanController::class, 'TJKT']);
Route::get('/DKV', [JurusanController::class, 'DKV']);
Route::get('/Akuntansi', [JurusanController::class, 'Akuntansi']);

// Route::get('/pplg', function () {
//     return view('jurusan.PPLG',[
//         "title" => "Jurusan",
//         "active" => "jurusan",
//     ]);
// });

// Route::get('/dkv', function () {
//     return view('jurusan.DKV',[
//         "title" => "Jurusan",
//         "active" => "jurusan",
//     ]);
// });

// Route::get('/tjkt', function () {
//     return view('jurusan.TJKT',[
//         "title" => "Jurusan",
//         "active" => "jurusan",
//     ]);
// });

// Route::get('/ak', function () {
//     return view('jurusan.AK',[
//         "title" => "Jurusan",
//         "active" => "jurusan",
//     ]);
// });
// routes/web.php

Route::get('/login', [Login::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Login::class, 'authenticate']);
Route::get('/logout', [Login::class, 'logout']);


Route::get('/registrasi', [Registrasi::class, 'index'])->middleware('guest');
Route::post('/registrasi', [Registrasi::class, 'store']);

// dashboard siswa
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->name('home')->middleware('auth');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa')->middleware('auth');
Route::post('/siswa', [SiswaController::class, 'simpan']);
Route::get('/ortu', [OrtuController::class, 'index'])->name('ortu')->middleware('auth');
Route::post('/ortu', [OrtuController::class, 'simpan']);
Route::get('/transaksi', [TransaksiController::class, 'indexdashboard'])->name('transaksi')->middleware('auth');
Route::post('/trasaksi', [TransaksiController::class, 'simpan']);



Route::get('/pplg');

Route::get('admin/home', [AdminLogin::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/admin/data_user', [DataUserController::class, 'index'])->name('/admin/user')->middleware('is_admin');
Route::post('/admin/data_user/update/id={id}', [DataUserController::class, 'update'])->name('/update/user')->middleware('is_admin');
Route::get('/admin/data_user/hapus/id={id}', [DatauserController::class, 'hapus'])->name('/hapus/user')->middleware('is_admin');

Route::get('/admin/data_peserta', [DataPesertaController::class, 'index'])->name('/admin/peserta')->middleware('is_admin');
Route::post('/admin/data_peserta/update/id={id}', [DataPesertaController::class, 'update'])->name('/update/peserta')->middleware('is_admin');
Route::get('/admin/data_peserta/hapus/id={id}', [DataPesertaController::class, 'hapus'])->name('/hapus/peserta')->middleware('is_admin');
Route::post('/admin/data_peserta/multidel', [DataPesertaController::class, 'multihapus'])->name('/multi-hapus/peserta')->middleware('is_admin');
Route::post('/admin/data_peserta/multiupdate', [DataPesertaController::class, 'multiupdate'])->name('/multi-update/peserta')->middleware('is_admin');

Route::get('/admin/data_orangtua', [DataOrangtuaController::class, 'index'])->name('/admin/orangtua')->middleware('is_admin');
Route::post('/admin/data_orangtua/update/id={id}', [DataOrangtuaController::class, 'update'])->name('/update/orangtua')->middleware('is_admin');
Route::get('/admin/data_orangtua/hapus/id={id}', [DataOrangtuaController::class, 'hapus'])->name('/hapus/orangtua')->middleware('is_admin');
    

Route::get('/admin/data_lengkap', [DataLengkapController::class, 'index'])->name('/admin/lengkap')->middleware('is_admin');
Route::get('/admin/data_lengkap/hapus/id={id}', [DataLengkapController::class, 'hapus'])->name('/hapus/lengkap')->middleware('is_admin');

Route::get('/admin/diskon', [DiskonController::class, 'index'])->name('/admin/diskon')->middleware('is_admin');
Route::post('/admin/diskon/update/id={id}', [DiskonController::class, 'update'])->name('/update/diskon')->middleware('is_admin');
Route::get('/admin/diskon/hapus/id={id}', [DiskonController::class, 'hapus'])->name('/hapus/diskon')->middleware('is_admin');

Route::get('/admin/transaksi', [TransaksiController::class, 'index'])->name('/admin/transaksi')->middleware('is_admin');
Route::post('/admin/transaksi/update/id={id}', [TransaksiController::class, 'update'])->name('/update/transaksi')->middleware('is_admin');
Route::get('/admin/transaksi/hapus/id={id}', [TransaksiController::class, 'hapus'])->name('/hapus/transaksi')->middleware('is_admin');
