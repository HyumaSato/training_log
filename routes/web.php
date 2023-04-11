<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\JouhanshinController;
use App\Http\Controllers\AbController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LegController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MealController;
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

//Route::get('/dashboard', function () {
   // return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/log', [LogController::class, 'index'])->name('log');
    Route::get('/log/create', [LogController::class, 'create']);
    Route::get('/log/{log}', [LogController::class ,'show']);
    Route::post('/log', [LogController::class, 'store']);
    Route::get('/jouhanshin', [JouhanshinController::class, 'index']);
    Route::get('/abs', [AbController::class, 'index']);
    Route::get('/back_training', [BackController::class, 'index']);
    Route::get('/foods', [FoodController::class, 'index']);
    Route::get('/meals', [MealController::class, 'index']);
    Route::get('/leg', [LegController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
