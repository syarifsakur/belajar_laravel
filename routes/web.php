<?php

use App\Models\ListBuku;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\bookController;
use App\Models\list_buku;

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

Route::get('/',[UserController::class,'index']);
Route::post('/',[UserController::class,'login']);
Route::get('/register',[UserController::class,'showregister']);
Route::post('/register',[UserController::class,'register']);
Route::get('/logout',[UserController::class,'logout']);

Route::get('/createbook',[bookController::class,'index']);
Route::post('/createbook',[bookController::class,'create']);

Route::get('/admindashboard',function (){
    return view('admindashboard',[
        "title"=>"admin",
        "listbuku"=>list_buku::all(),
        "data"=>User::all(),
    ]);
});

Route::get('/userdashboard',function() {
    return view('userdashboard', [
        "title"=>"user",
        "listbuku"=>list_buku::all(),
        "data"=>auth()->user()->username,
    ]);
});
