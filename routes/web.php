<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use \Illuminate\Support\Facades\Log;
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
    
    Log::emergency(" teste de mensagem emergency...", ['server' => $_SERVER['HTTP_USER_AGENT']]);
    
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('livros', LivroController::class);

Route::get('/admin', function(){
  return view('admin/index');
})->middleware(['auth'])->name("admin.index");
