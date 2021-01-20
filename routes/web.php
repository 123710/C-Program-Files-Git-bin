<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;

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

// Route::resource('contacts', 'App\Http\Controllers\ContactController');

Route::prefix('contacts')->group(function() {

  Route::delete('/delete',[ContactController::class,'deletecontact'])->name('delete.contact');
  Route::group(['prefix' => '/{contact}'], function (){
    Route::put('/update',[ContactController::class,'update'])->name('contacts.edit');
    Route::get('/update',[ContactController::class,'edit'])->name('contacts.edit');

  });
});



// Route::resource('companies','App\Http\Controllers\CompanyController');

Route::prefix('companies')->group(function() {

  Route::group(['prefix' => '/{company}'], function (){
    Route::get('/edit',[CompanyController::class,'edit'])->name('companies.edit');
    Route::put('/update',[CompanyController::class,'update'])->name('companies.update');
    Route::delete('/delete',[CompanyController::class,'destroy'])->name('companies.destroy');

  });
});
Route::get('/test',[testController::class,'showtest'])->name('test');

Auth::routes();
Route::group(['middleware' => ['auth']], function() {
 Route::resource('contacts', 'App\Http\Controllers\ContactController');
 Route::resource('companies', 'App\Http\Controllers\CompanyController');
 Route::get('/home', 'App\Http\Controllers\HomeController@index')
->name('home');
});
