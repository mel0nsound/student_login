<?php

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
use App\Http\Controllers\Basiccontroller;
 
Route::controller(Basiccontroller::class)->group(function () {
    Route::get('/tablelist', 'tablelist_fn')->name('tablelist');

    Route::get('/addlist', 'addlist_fn')->name('addlist');
    Route::post('/addlist', 'postlist')->name('saveaddlist');

    Route::post('/delete', 'delete_fn')->name('delete');

    Route::get('/edit/{id}', 'edit_fn')->name('edit');
    Route::post('/post_edit', 'post_edit_fn')->name('post_edit');

    // Route::get('/login', 'login_fn');

    // Route::post('/tablelist', 'store');
    Route::get('/indexhome', 'indexhome')->name('indexhome');
});

Route::get('/', function () {
    // return view('home');
    return redirect()->route('login');
});

Auth::routes();

Route::post('/loginstudent', [App\Http\Controllers\Auth\LoginController::class, 'loginstudent'])->name('loginstudent');

Route::get('/logouts', [App\Http\Controllers\Auth\LoginController::class, 'logouts'])->name('logouts');

// Route::get('/indexhome', [App\Http\Controllers\HomeController::class, 'indexhome'])->name('indexhome');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
