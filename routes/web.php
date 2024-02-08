<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
<<<<<<< HEAD


Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class ,'show']);
=======
Route::get('/', [PostController::class, 'index']);
>>>>>>> f80a06f56f1dd4e5000ed1f09e05eed786001d4e
