<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\RendszamController;
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

Route::get('/', function () {
   return view('welcome');
});

Route::get('/welcome', function () {
   return "Hello világ";
});

Route::get('/user/{username}', function ($username) {
   return view('user', [
      "user" => $username
   ]);
});

Route::get('/admin', [AdminController::class, 'index'])->name("adminindex");
Route::get('/admin/add', [AdminController::class, 'add']);
Route::get('/admin/show', [AdminController::class, 'show']);
Route::get('/admin/delete', [AdminController::class, 'delete']);





Route::get('/innen', function () {
   return redirect()->route('odaOldal');
})->name('innenOldal');

Route::get('/oda', function () {
   return view('oda');
})->name('odaOldal');


Route::get('/rendszamok', [RendszamController::class, 'show_all'])->name('rendszamok.show_all');
Route::get('/api/get/{id}', [ApiController::class, 'getData'])->name('api.getdata');

Route::get('/rendszamok/create/', [RendszamController::class, 'create']);
Route::get('/rendszamok/getalldata/', [RendszamController::class, 'getAllData']);
