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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::resource('employees', App\Http\Controllers\EmployeeController::class);
 Route::resource('allowances', App\Http\Controllers\AllowanceController::class);
 Route::resource('images', App\Http\Controllers\ImageController::class);


//this route is responsible for calling ReportController@sales function
Route::get('report/sales',[App\Http\Controllers\ReportController::class,'sales'])->name('reports');

Route::get('report/sales/{id}',[App\Http\Controllers\ReportController::class,'salesSingle'])->name('reports.single');


