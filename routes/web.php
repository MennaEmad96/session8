<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    //page routes
    Route::get('index',[PageController::class,'index'])->name('index');
    Route::get('about',[PageController::class,'about'])->name('about');
    Route::get('contact',[PageController::class,'contact'])->name('contact');
    Route::get('guard',[PageController::class,'guard'])->name('guard');
    Route::get('service',[PageController::class,'service'])->name('service');
});

Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
