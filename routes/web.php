<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\SectionsController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserContoller;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageCourseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//     return view('welcome');
// });

Route::get('/admin/pages', function () {

    return view('admin.page');
});


Route::get('/admin', function () {

    return view('admin.home');
});

Route::resource('course',PageCourseController::class);

Route::name('admin.')->prefix('admin')->group(function () {
    Route::resource('courses', CourseController::class);
});


Route::name('admin.')->prefix('admin')->group(function () {
    Route::resource('users', UserContoller::class);
});
Route::get('/',[HomeController::class,'index'])->name('home');


Route::name('admin.')->prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class);
});

Route::name('admin.')->prefix('admin')->group(function () {
    Route::resource('sections', SectionsController::class);
});

Route::name('admin.')->prefix('admin')->group(function () {
    Route::resource('lessons', LessonController::class);
});





Route::name('admin.')->prefix('admin')->group(function () {
    Route::resource('tags', TagController::class);
});



Route::resource('course',PageCourseController::class);

Route::resource('profile',ProfileController::class);

Route::resource('enroll',EnrollController::class);


Route::get('/breeze', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
