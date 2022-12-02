<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UploadedContoller;
use App\Http\Controllers\ImagesController;
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

Route::get('/', [HomePageController::class, 'actionHome'])->name('actionHome');

Route::get('/uploaded', [UploadedContoller::class, 'actionUploaded'])->name('actionUploaded');

Route::post('/upload', [ImagesController::class, 'uploadImage'])->name('uploadImage');

