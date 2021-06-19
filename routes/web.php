<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SectionsController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserContoller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageCourseController;
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
    Route::resource('tags', TagController::class);
});


