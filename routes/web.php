<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';
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
    return view('user.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
//    return redirect('/');
})->middleware(['auth'])->name('dashboard');


Route::get('/resume', function () {
    return view('user.resume');
});

Route::get('/works', function () {
    return view('user.portfolio');
});

Route::get('/blog', function () {
    return view('user.blog');
});

Route::get('/contact', function () {
    return view('user.contact');
});


Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admins', function () {
        return view('admin.index');
    });

    Route::resource('admin/portfolio', \App\Http\Controllers\PortfolioController::class);
    Route::resource('admin/skills', \App\Http\Controllers\SkillsController::class);
    Route::resource('admin/knowledges', \App\Http\Controllers\KnowledgesController::class);

});








//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
