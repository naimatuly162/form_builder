<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormBuliderController;
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
    return view('input');
});

Route::get('/input', [FormBuliderController::class, 'index']);

Route::post('getData',[FormBuliderController::class,'getData']);

Route::post('store',[FormBuliderController::class,'store']);


Route::resource('input',FormBuliderController::class);
