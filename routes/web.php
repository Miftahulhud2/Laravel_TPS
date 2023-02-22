<?php

use App\Http\Controllers\judul;
use App\Http\Livewire\Dropdowns;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Datadaerah;
use App\Http\Controllers\Datacalonan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administrator;
use App\Http\Controllers\DptController;
use Clockwork\Support\Lumen\Controller;
use App\Http\Controllers\Registration;


use App\Http\Controllers\CobaController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PencoblosController;
use App\Http\Controllers\SendemailController;



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

// Route::get('/', function () {
//         $judul = DB::table('judul_rekap')->find(1);
//         $tps = DB::table('tps')->find(3);
//         $id = $tps->suara_id;

//         $saksi = DB::table('saksi')
//         ->where('tps_id',$id)
//         ->get();

//         $pengurus = DB::table('pengurus')
//         ->where('tps_id',$id)
//         ->get();

//         $datacalon = DB::table('datacalon')->get();

//         $sah = DB::table('suara')->where('tps_id',$id)->wherenotin('suara',['Suara Tidak Sah'])
//         ->pluck('jml_suara');

//         $data = $datacalon->zip($sah);


//         $sumsah = collect($sah)->sum();

//         $sumtidaksah = DB::table('suara')->where('tps_id',$id)->where('suara','Suara Tidak Sah')
//         ->pluck('jml_suara')->sum();
//         $nama = 'C1_suara_'.$tps->namatps;
//     return view('suara',[
//         'judul' => $judul,
//             'tps'   => $tps,
//             'pengurus'=> $pengurus,
//             'saksi' => $saksi,
//             'datacalon' => $datacalon,
//             'sah' => DB::table('suara')->where('tps_id',$tps->suara_id)->wherenotin('suara',['Suara Tidak Sah'])
//             ->pluck('jml_suara')->toarray(),
//             'sumtidaksah' => $sumtidaksah,
//             'sumsah'=> $sumsah,
//             'data'  => $data,
//     ]);
// });

Route::get('/coba', [LoginController::class, 'create']);
// Route::post('/coba', [CobaController::class, 'create']);
// Route::get('/dropdown', [Dropdowns::class, 'render']);
// Route::get('/daftar', 'Registration@render');



Route::get('/login', [LoginController::class, 'index']);

Route::post('/beranda', [LoginController::class, 'login'])->middleware('guest')->name('beranda');

Route::post('/logout', [LoginController::class, 'logout']);

// sharing data tps


// admin tps

Route::middleware(['auth'])->group(function () {

route::get('/tps/tentang',[PencoblosController::class, 'index'])->middleware('auth');

route::get('/tps/anggota',[PencoblosController::class, 'anggota'])->middleware('auth');

route::get('/tps/registrasi',[PencoblosController::class, 'create'])->middleware('auth');

route::post('/tps/registrasi',[PencoblosController::class, 'store1'])->middleware('auth');

route::get('/tps/event', [PencoblosController::class, 'show'])->middleware('auth');

route::delete('/tps/event/delete/{pencoblos:id}', [PencoblosController::class, 'destroy'])->middleware('auth');

route::get('/tps/event/tambahdptbaru', [PencoblosController::class, 'create'])->middleware('auth');

route::post('/tps/event/tambahdptbaru', [PencoblosController::class, 'store1'])->middleware('auth');

route::get('/tps/event/{pencoblos:id}', [PencoblosController::class, 'edit'])->middleware('auth');

route::post('/tps/event/{pencoblos:id}/update', [PencoblosController::class, 'update'])->middleware('auth');

route::post('/tps/event', [PencoblosController::class, 'hadir'])->middleware('auth');

route::get('/tps/report', [PencoblosController::class, 'report'])->middleware('auth');

route::post('/tps/report', [PencoblosController::class, 'reportdata'])->middleware('auth');

Route::get('/tps/report/{kode}', 'SendmailController@index')->middleware('auth');

Route::get('/tps/report/cetak/{tps:slug}', 'ExcelController@cetak')->middleware('auth');

Route::get('/tps/report/suara/{tps:slug}', 'ExcelController@suara')->middleware('auth');

route::post('/tps/kode', [PencoblosController::class, 'kode'])->middleware('auth');

Route::post('/tps/surat/{tps:slug}', 'TpsController@rusak')->middleware('auth');;

Route::post('/tps/foto/', 'BuktiController@index')->middleware('auth');

Route::delete('foto/{id}', 'BuktiController@destroy')->middleware('auth');

});



/* admin */
route::get('/admin', [administrator::class, 'index'])->middleware('admin');

Route::get('/admin/dashboard',
'administrator@index')
->middleware('admin')->name('dashboard');

route::get('/admin/tps',
[administrator::class, 'show1'])
->middleware('admin')->name('tps');

route::get('admin/daftar-peserta-tetap',
[administrator::class, 'show3'])
->middleware('admin')->name('tps');

route::get('admin/dpt/{id}/edit',
[DptController::class, 'edit'])
->middleware('admin')->name('tps');

route::delete('admin/dpt/{pencoblos:id}/hapus',
[DptController::class, 'delete'])
->middleware('admin')->name('tps');

route::post('admin/dpt/update',
[DptController::class, 'update'])
->middleware('admin')->name('tps');

route::get('admin/daftar-peserta-tetap/tambahdpt',
[administrator::class, 'showtambah'])
->middleware('admin')->name('tps');

route::post('admin/daftar-peserta-tetap/tambahdpt1',
[DptController::class, 'create'])
->middleware('admin')->name('tps');

route::get('admin/daftar-peserta-tetap/{provinsi}',
[administrator::class, 'show4'])
->middleware('admin')->name('tps');

route::get('admin/daftar-peserta-tetap/{provinsi}/{kabupaten}',
[administrator::class, 'show5'])
->middleware('admin')->name('tps');

route::get('admin/daftar-peserta-tetap/{provinsi}/{kabupaten}/{kecamatan}',
[administrator::class, 'show6'])
->middleware('admin')->name('tps');

route::get('admin/daftar-peserta-tetap/{provinsi}/{kabupaten}/{kecamatan}/{desa}',
[administrator::class, 'show7'])
->middleware('admin')->name('tps');


route::get('/admin/tps/tambahtps',
[administrator::class, 'show2'])
->middleware('admin')->name('tambahtps');

route::post('/admin/tps/tambahtps',
[administrator::class, 'tambahtps'])
->middleware('admin')->name('tambahtps');

route::get('/admin/tps/anggotatps',
[administrator::class, 'tambahanggota'])
->middleware('admin')->name('tmbahtps');

route::get('/admin/tps/{suara:tps_id}',
[administrator::class, 'show'])
->middleware('admin');

route::get('/admin/surat/{tps:slug}',
'TpsController@update')
->middleware('admin');

// eror
route::get('admin/tps/{tps:slug}/pengurus',
[administrator::class, 'pengurus'])
->middleware('admin');

route::get('admin/tps/{tps:slug}/foto',
'BuktiController@show')
->middleware('admin');

Route::get('/admin/tps/{tps:slug}/edit',
[administrator::class, 'editsuara'])
->middleware('admin');

Route::get('/admin/tps/{tps:slug}/daftar-pemilih-tetap',
[administrator::class, 'dpt'])
->middleware('admin');

Route::get('/admin/tps/{tps:slug}/lokasi',
[administrator::class, 'lokasi'])
->middleware('admin');

Route::get('/admin/tps/{tps:slug}/rekap',
[administrator::class, 'rekap'])
->middleware('admin');
// diatas
Route::get('/admin/datacalon',
[administrator::class, 'create'])
->middleware('admin');

Route::post('/admin/judul',
[judul::class, 'update'])
->middleware('admin');

Route::post('/admin/datacalon',
[datacalonan::class, 'store'])
->middleware('admin');

Route::get('/admin/datacalon/ganti',
[judul::class, 'index'])
->middleware('admin');

Route::delete('/admin/datacalon/{id}',
[datacalonan::class, 'destroy'])
->middleware('admin');

Route::delete('/admin/rekap/{tps:slug}/hapus',
[administrator::class, 'destroy'])
->middleware('admin');

Route::get('/admin/rekap/{tps:slug}/reset',
[administrator::class, 'reset'])
->middleware('admin');

Route::get('/admin/rekap/{tps:slug}/cetak',
[ExcelController::class, 'export'])
->middleware('admin');

Route::get('/admin/rekap/{tps:slug}/dpt',
[ExcelController::class, 'cetak'])
->middleware('admin');

Route::get('/admin/rekap',
[administrator::class, 'rekap'])
->middleware('admin');

Route::delete('/admin/datalogin/{tps:slug}/hapus',
[administrator::class, 'destroy'])
->middleware('admin');

Route::get('/admin/datalogin/{tps:slug}/edit',
[administrator::class, 'edit'])
->middleware('admin');

Route::put('/admin/datalogin/{tps:slug}/update',
[administrator::class, 'update'])
->middleware('admin');

Route::get('/admin/datalogin/tambahlogin',
[administrator::class, 'tambahlogin'])
->middleware('admin');

Route::post('/admin/datalogin/tambahlogin',
[administrator::class, 'tambahdatalogin'])
->middleware('admin');

// Route::get('/mail', 'SendmailController@index');

// Route::get('/provinces', [DependentDropdownController::class, 'provinces'])->name('provinces');
// Route::get('/cities',  [DependentDropdownController::class, 'cities'])->name('cities');
// Route::get('districts', [DependentDropdownController::class, 'districts'])->name('districts');
// Route::get('villages', [DependentDropdownController::class, 'villages'])->name('villages');
// Route::get('/datadaerahs', [DependentDropdownController::class, 'index']);

Route::get('/datadaerah', [Datadaerah::class, 'index']);
Route::post('/getkabupaten', [Datadaerah::class, 'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan', [Datadaerah::class, 'getkecamatan'])->name('getkecamatan');
Route::post('/getdesa', [Datadaerah::class, 'getdesa'])->name('getdesa');

