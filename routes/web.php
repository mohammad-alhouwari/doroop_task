<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MessageController;

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

Route::get('/admen', function () {
    return view('dashboard.auth.admen');
})->middleware(['auth'])->name('admen');

require __DIR__ . '/auth.php';

// LOGIN start //

// LOGIN end //

// Pages start//
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/blog/{id}', [PagesController::class, 'viewBlog'])->name('viewBlog');
Route::post('/storeContact', [PagesController::class, 'storeContact'])->name('storeContact');
// Pages end//


// Dashboard start //
// Route::resource('/dash', BlogController::class)->names('blog')->middleware('auth');
Route::resource('/dash', BlogController::class)->names('blog')->middleware('auth');
Route::resource('/contact', MessageController::class)->names('contact')->middleware('auth');
// Dashboard end //
