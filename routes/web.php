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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index-index');
Route::post('/claim-store', [App\Http\Controllers\ContactController::class, 'storeClaimMail'])->name('index.storeClaim');
Route::post('/claim-store/up', [App\Http\Controllers\ContactController::class, 'storeClaimTopMail'])->name('index.storeClaimTop');
Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-index');
Route::post('/contact-us/store', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/frequently-asked-questions', [App\Http\Controllers\FaqController::class, 'index'])->name('faq-index');
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news-index');
Route::get('/media', [App\Http\Controllers\MediaController::class, 'index'])->name('media-index');
