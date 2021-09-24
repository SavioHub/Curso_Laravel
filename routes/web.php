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

//Importação do controller
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;

Route::get('/', [EventController::class, 'index']);//index é o nome da action
Route::get('/events/create', [EventController::class, 'create']);//create é o nome da action


Route::get('/events/contact',[ContactController::class,'contact']);