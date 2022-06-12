<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/donate', function () {
    return view('pages.donate');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/how-it-works', function () {
    return view('pages.how-it-works');
});

Route::get('/blog-single', function () {
    return view('pages.blog-single');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




Route::get('/profile/{user}',['App\Http\Controllers\UsersController','showProfile'] );

Route::get('/editprofile/{user}',['App\Http\Controllers\UsersController','editProfile'] )->name('pages.editprofile');
Route::post('/editprofile',['App\Http\Controllers\UsersController','updateProfile'] )->name('pages.profile');
//admin routes

Route::resource('admin/users' , 'App\Http\Controllers\UsersController');

Route::get('/users/view', function () {
    return view('admin.users');
})->name('view-users');
// ->middleware(['auth'])->name('dashboard');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
