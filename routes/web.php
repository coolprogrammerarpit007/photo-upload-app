<?php

use App\Models\Photo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoUploadController;

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

Route::get('/',[PhotoUploadController::class,'show']);

Route::post('/store',[PhotoUploadController::class,'store']);
Route::get('/index',function(){
    $photo = Photo::all();
    $data = compact('photo');
    return view('show-photo')->with($data);
});