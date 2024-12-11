<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminControler;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail.show');
Route::get('/landing', [HomeController::class,'index'])->name('landing');
Route::get('/form', [HomeController::class,'form'])->name('form');
Route::get('/company', [HomeController::class,'company'])->name('company');
Route::get('/search', [HomeController::class, 'search']) -> name('search');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/kelolaAdmin', [HomeController::class,'kelolaAdmin'])->name('kelolaAdmin');
    Route::get('/editAdmin', [HomeController::class,'editAdmin'])->name('editAdmin');
    Route::post('/store', [AdminControler::class, 'store']) -> name('store');
    Route::get('/create', [AdminControler::class, 'create']) -> name('create');
    Route::get('/destroy/{id}', [AdminControler::class, 'destroy']) -> name('destroy');
    Route::post('/update/{id}', [AdminControler::class, 'update']) -> name('update');
    Route::get('/kelolaAdmin/{id}', [AdminControler::class, 'edit']) -> name('edit');
    Route::get('/search_pekerjaan', [AdminControler::class, 'search_pekerjaan']) -> name('search_pekerjaan');
    Route::get('/editAdmin', [AdminControler::class, 'create']) -> name('editAdmin');
});

require __DIR__.'/auth.php';
