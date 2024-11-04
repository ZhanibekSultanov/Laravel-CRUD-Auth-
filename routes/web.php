<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('workers')->group(function (){
   Route::get('/',[\App\Http\Controllers\WorkerController::class,'index'])->name('workers.index');
   Route::get('/create',[\App\Http\Controllers\WorkerController::class,'create'])->name('workers.create');
   Route::post('/',[\App\Http\Controllers\WorkerController::class,'store'])->name('workers.store');
   Route::get('/{worker}',[\App\Http\Controllers\WorkerController::class,'show'])->name('workers.show');
});
