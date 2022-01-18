<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomizeController;

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
    return view('welcome');
});

Route::get('/uploader', function () {
    return view('model/uploader');
});

//Route::get('file', [FlightController::class, 'file'])->name("file");
Route::post('upload',
    [CustomizeController::class, 'customizeslidescontent'])
    ->name("customizeslidescontent");