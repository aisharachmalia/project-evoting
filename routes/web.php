<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Model\kelas;
use App\Http\Controllers\SiswaController;
use App\Model\Siswa;
use App\Http\Controllers\KandidatController;
use App\Model\Kandidat;
use App\Http\Controllers\VotingPeriodeController;
use App\Model\VotingPeriode;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/kelas', function () {
    return view('admin.kelas.index');
});
Route::get('/kelas', 'App\Http\Controllers\KelasController@index');

Route::get('kelas', [KelasController::class, 'index']);
Route::resource('kelas', KelasController::class);

Route::get('/siswa', function () {
    $kelas = kelas::all();
    return view('admin.siswa.index');
});
Route::get('/siswa', 'App\Http\Controllers\SiswaController@index');

Route::get('siswa', [SiswaController::class, 'index']);
Route::resource('siswa', SiswaController::class);

Route::get('/kandidat', function () {
    $kelas = kelas::all();
    return view('admin.kandidat.index');
});
Route::get('/kandidat', 'App\Http\Controllers\kandidatController@index');

Route::get('kandidat', [KandidatController::class, 'index']);
Route::resource('kandidat', KandidatController::class);

Route::get('/votingperiode', function () {
    return view('admin.periode.index');
});
Route::get('/votingperiode', 'App\Http\Controllers\VotingPeriodeController@index');

Route::get('votingperiode', [VotingPeriodeController::class, 'index']);
Route::resource('votingperiode', VotingPeriodeController::class);
Route::get('/admin/periode/create', [PeriodeController::class, 'create'])->name('admin.periode.create');
Route::delete('/periode/{id}', [PeriodeController::class, 'destroy'])->name('periode.destroy');
Route::get('/periode/{id}/edit', [PeriodeController::class, 'edit'])->name('periode.edit');

Route::get('siswa/login', [SiswaLoginController::class, 'showLoginForm'])->name('siswa.login');
Route::post('siswa/login', [SiswaLoginController::class, 'login'])->name('siswa.login.submit');
Route::post('siswa/logout', [SiswaLoginController::class, 'logout'])->name('siswa.logout');


