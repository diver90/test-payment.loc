<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'index']);
Route::get('/thank-you', [Controller::class, 'thankYou']);
Route::get('/sorry', [Controller::class, 'sorry']);

Route::post('callback', [ApiController::class, 'callback']);
