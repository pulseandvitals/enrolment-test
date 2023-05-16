<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;
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

Route::middleware('auth')->prefix('post')->name('post.')->group(function() {
    Route::get('/create',[PostController::class,'create'])->name('create');
    Route::post('/store',[PostController::class,'store'])->name('store');
    Route::get('/list',[PostController::class,'index'])->name('index');

    Route::prefix('comment')->name('comment.')->group(function() {
        Route::post('/store/{post}',[CommentController::class,'store'])->name('store');

        Route::prefix('reply')->name('reply.')->group(function() {
            Route::post('/store/{comment}',[ReplyController::class,'store'])->name('store');
        });
    });
});

require __DIR__ . '/auth.php';
