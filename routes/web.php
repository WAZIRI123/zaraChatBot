<?php

use App\Http\Controllers\Chat;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Chat::class, 'index']);

Route::post('/chat', [Chat::class, 'chatWithBot']);

Route::get('/create-bot', [Chat::class, 'createBot']);