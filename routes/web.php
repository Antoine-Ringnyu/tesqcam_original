<?php

use App\Http\Controllers\AvatarController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhotoController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/program', [ProgramController::class, 'index'])->name('programs.index');


Route::get('/welcome', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// this is where we start editing
Route::resource('chirps',ChirpController::class) 
    ->only(['index','store','edit','update','destroy'])
    ->middleware(['auth','verified']);

// controller for categories
Route::resource('category', CategoryController::class)
    ->only(['index', 'store'])
    ->middleware(['auth','verified']);

// controller for department
Route::resource('departments', DepartmentController::class)
    ->only(['index', 'store']);




// this is just for practical purposes with laravel API
// the project is aimed at using unsplash api to display the photoes from unsplash when your enter the keyword in the search bar.
Route::get('/photo', [PhotoController::class,'index']);
Route::get('/photos/search',  [PhotoController::class,'search'])->name('photos.search');


// file upload route
Route::get('/avatar', [AvatarController::class,'showUploadForm'])->name('avatar.index');
Route::post('/avatar', [AvatarController::class,'upload'])->name('avatar.upload');

require __DIR__.'/auth.php';

// the home route