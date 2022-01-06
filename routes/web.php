<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\VideoUpload;
use App\Http\Controllers\ReaderController;
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
Route::middleware(['set_lang'])->group(function (){
    Route::get('/', function () {
        return view('home');
    });
    Route::get('about',function () {
        return view('about');
    });
    Route::get('contacts',function(){
        return  view('contacts');
    });
    Route::get('admin', function(){
        return view('sign-in');
    });
    Route::get('/setlang/{lang}',
        function ($lang){
            App::setLocale($lang);
            session(['lang'=>$lang]);
            return redirect()->back();
    });
});

Route::get('login',[AdminLoginController::class,'login']);
// Route::get('/post',[PostController::class,'store']);
Route::get('admin-panel',function (){
    return view('admin-panel');
});
Route::post('UploadPhoto',[UploadController::class,'storePhoto']);
Route::post('UploadVideo',[UploadController::class,'storeVideo']);
Route::get('photos',[ReaderController::class,'photos']);
Route::get('videos',[ReaderController::class,'videos']);
