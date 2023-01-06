<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\BayiController;
use App\Http\Controllers\Backend\BidanController;
use App\Http\Controllers\Backend\LaporanController;
use App\Http\Controllers\Backend\PenimbanganController;
use App\Http\Controllers\Backend\PosyanduController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

Route::prefix('users')->group(function () {
    Route::get('/view',[UserController::class, 'UserView'])->name('user.view');
    Route::get('/add',[UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store',[UserController::class, 'UserStore'])->name('users.store');
    Route::post('/store',[UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}',[UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}',[UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class, 'UserDelete'])->name('users.delete');
});

Route::prefix('posyandu')->group(function () {
    Route::get('/view',[PosyanduController::class, 'PosyanduView'])->name('posyandu.view');
    Route::get('/add',[PosyanduController::class, 'PosyanduAdd'])->name('posyandu.add');
    Route::post('/store',[PosyanduController::class, 'PosyanduStore'])->name('posyandu.store');
    Route::get('/edit/{id}',[PosyanduController::class, 'PosyanduEdit'])->name('posyandu.edit');
    Route::post('/update/{id}',[PosyanduController::class, 'PosyanduUpdate'])->name('posyandu.update');
    Route::get('/delete/{id}',[PosyanduController::class, 'PosyanduDelete'])->name('posyandu.delete');
});

Route::prefix('bayi')->group(function () {
    Route::get('/view',[BayiController::class, 'BayiView'])->name('bayi.view');
    Route::get('/add',[BayiController::class, 'BayiAdd'])->name('bayi.add');
    Route::post('/store',[BayiController::class, 'BayiStore'])->name('bayi.store');
    Route::get('/edit/{id}',[BayiController::class, 'BayiEdit'])->name('bayi.edit');
    Route::post('/update/{id}',[BayiController::class, 'BayiUpdate'])->name('bayi.update');
    Route::get('/delete/{id}',[BayiController::class, 'BayiDelete'])->name('bayi.delete');
});

Route::prefix('bidan')->group(function () {
    Route::get('/view',[BidanController::class, 'BidanView'])->name('bidan.view');
    Route::get('/add',[BidanController::class, 'BidanAdd'])->name('bidan.add');
    Route::post('/store',[BidanController::class, 'BidanStore'])->name('bidan.store');
    Route::get('/edit/{id}',[BidanController::class, 'BidanEdit'])->name('bidan.edit');
    Route::post('/update/{id}',[BidanController::class, 'BidanUpdate'])->name('bidan.update');
    Route::get('/delete/{id}',[BidanController::class, 'BidanDelete'])->name('bidan.delete');
});

Route::prefix('penimbangan')->group(function () {
    Route::get('/view',[PenimbanganController::class, 'PenimbanganView'])->name('penimbangan.view');
    Route::get('/add',[PenimbanganController::class, 'PenimbanganAdd'])->name('penimbangan.add');
    Route::post('/store',[PenimbanganController::class, 'PenimbanganStore'])->name('penimbangan.store');
    Route::get('/edit/{id}',[PenimbanganController::class, 'PenimbanganEdit'])->name('penimbangan.edit');
    Route::post('/update/{id}',[PenimbanganController::class, 'PenimbanganUpdate'])->name('penimbangan.update');
    Route::get('/delete/{id}',[PenimbanganController::class, 'PenimbanganDelete'])->name('penimbangan.delete');
});

// Route::group(['middleware' => ['auth:user,pengguna','ceklevel:admin,bidan']], function () {
//     Route::get('/view',[LaporanController::class, 'LaporanView'])->name('laporan.view');
// });

Route::prefix('laporan')->group(function () {
Route::get('/view',[LaporanController::class, 'show'])->name('laporan.view');
//Route::get('/add',[LaporanController::class, 'index'])->name('laporan.view');
});