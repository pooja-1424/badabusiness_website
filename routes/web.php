<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IbcController;
use App\Http\Controllers\LfpController;
use App\Http\Controllers\LtmController;
use App\Http\Controllers\BouncebackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PscController;
use App\Http\Controllers\DetailsController;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;



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

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/api', function () {
    // dd("MY PAGE!");
    include(app_path().'/includes/api.php');
    include(app_path().'/includes/mylog.txt');
    
    });
Route::get('/thanks', function () {      
    return view('thanks');
});


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/ibc',[IbcController::class,'index']);
Route::get('/psc',[PscController::class,'index']);
Route::get('/lfp',[LfpController::class,'index']);
Route::get('/ltm',[LtmController::class,'index']);
Route::get('/bounceback',[BouncebackController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/product_details',[PscController::class,'productsCat']);
//courses details page
Route::get('/details/{id}/{name}',[DetailsController::class,'data']);


    