<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontendController;
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

 Route::middleware(['auth:sanctum', 'verified'])->group(function () {
   Route::resource('posts',PostController::class);
   Route::get('addpostcatagory',[PostController::class,'addcatagory'])->name('addcatagory');
    Route::get('addpostsubcatagory',[PostController::class,'addsubcatagory'])->name('addsubcatagory');
     Route::post('addpostcatagory',[PostController::class,'savecatagory'])->name('post.storecatagory');
    Route::post('addpostsubcatagory',[PostController::class,'savesubcatagory'])->name('post.storesubcatagory');
    Route::get('getsubcatagory',[PostController::class,'getsubcatagory'])->name('post.getsubcatagory');
	Route::get('delete/{id}',[PostController::class,'Delete'])->name('posts.Delete');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [PostController::class,'index'])->name('dashboard');



Route::get('/',[FrontendController::class,'index'])->name('frontend.index');
Route::get('/post/{id}',[FrontendController::class,'show'])->name('frontend.show');
Route::post('/comment/{postid}',[FrontendController::class,'savecomments'])->name('frontend.savecomments');
Route::post('/savereply/{commentid}/{postid}',[FrontendController::class,'savereply'])->name('frontend.savereply');
Route::get('/getcomments',[FrontendController::class,'getcomments'])->name('getcomments');