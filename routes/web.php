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

Route::get('/', function(){ return view('pages.frontend.index'); })->name('frontend-home');
Route::get('faq', [App\Http\Controllers\Faq::class, 'index'])->name('frontend-faq');
Route::get('contact', function(){ return view('pages.frontend.contact'); })->name('frontend-contact');
Route::post('/send-contact', [App\Http\Controllers\ContactUsController::class, 'submitForm'])->name('send-contact');
Route::get('/send-mail-test', [App\Http\Controllers\ContactUsController::class, 'sendMailTest'])->name('send-mail-test');
Route::get('/clear',function(){
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
});
