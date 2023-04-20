<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CourseController;
use App\Models\Course;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->prefix('collection')->name('collection.')->group(function () {

    Route::get('/',[CollectionController::class,'index'])->name('list');
    Route::get('/create',[CollectionController::class,'create'])->name('create');
    Route::post('/store',[CollectionController::class,'store'])->name('store');

});
Route::middleware('auth')->prefix('course')->name('course.')->group(function() {

    Route::get('/list',[CourseController::class,'index'])->name('list');
    Route::get('/create',[CourseController::class,'create'])->name('create');
    Route::post('/store',[CourseController::class,'store'])->name('store');

});

require __DIR__ . '/auth.php';
