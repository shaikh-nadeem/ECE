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

Auth::routes();  

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

Route::group(['middleware' => ['web']], function () {
    Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
    Route::get('/secretkey', [App\Http\Controllers\Auth\LoginController::class, 'LoginSecretKey']);
//    Route::get('/login/user', [App\Http\Controllers\Auth\LoginController::class, 'showUserLoginForm']);
//    Route::get('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm']);
//    Route::get('/register/user', [App\Http\Controllers\Auth\RegisterController::class, 'showUserRegisterForm']);

    Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);
//    Route::post('/login/user', [App\Http\Controllers\Auth\LoginController::class, 'UserLogin']);
//    Route::post('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'createAdmin']);
//    Route::post('/register/user', [App\Http\Controllers\Auth\RegisterController::class, 'createUser']);
}); 

// Admin Routes   
 Route::group(['middleware' => ['auth:admin']], function() {
     
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);  
    Route::view('/admin', 'pages/admin/index')->name('admin-index');
    
    Route::get('/admin/faq', [App\Http\Controllers\Faq::class, 'AdminFaq'])->name('admin-faq');
    Route::post('/addFaq', [App\Http\Controllers\Faq::class, 'addFaq']);
    Route::post('/editFaq', [App\Http\Controllers\Faq::class, 'EditFaq']);
    Route::post('/deleteFaq', [App\Http\Controllers\Faq::class, 'DeleteFaq']);
    
    Route::get('/admin/contact', [App\Http\Controllers\ContactUsController::class, 'AdminContact'])->name('admin-contact');
    Route::post('/replycontact', [App\Http\Controllers\ContactUsController::class, 'ReplyContact']);
    Route::post('/deletecontact', [App\Http\Controllers\ContactUsController::class, 'deleteContact']);
    
    Route::view('/home', 'home');
     
 });  
 
 //User Routes
// Route::group(['middleware' => ['auth:user']], function() {
//    Route::view('/user', 'user')->middleware('auth'); 
//    
// });
