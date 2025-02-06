<?php

use App\Http\Controllers\Photo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WartaJemaat;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\keuangan;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PelayanController;
use App\Http\Controllers\PelayanIbadah;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\DataJemaat;
use App\Http\Controllers\TampilanJemaat;;
use App\Http\Controllers\WartaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Event;
use App\Http\Controllers\EvenHome;
use App\Http\Controllers\GaleriAbout;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\Leaders;
use App\Http\Controllers\Dashboard;






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
Route::get('/wartajemaat', 'App\Http\Controllers\WartaJemaat@index');
Route::get('/datajemaats', 'App\Http\Controllers\DataJemaat@index');
Route::get('/pelayanibadah', 'App\Http\Controllers\PelayanIbadah@index');
Route::get('/keuangan', 'App\Http\Controllers\Keuangan@index');
Route::get('/contact', 'App\Http\Controllers\Photo@index');
Route::get('/events', 'App\Http\Controllers\Event@index');
Route::get('/', 'App\Http\Controllers\EvenHome@index');
Route::get('/leaders', 'App\Http\Controllers\Leaders@index');
Route::get('/about', 'App\Http\Controllers\JemaatController@pedro');

Route::get('/jemaat', function () {
    return view('jemaat');
});



Route::prefix('/admin')->namespace('App\Http\Controllers')->group(function(){
    Route::match(['get','post'], 'login', 'AdminController@Login');
    Route::match(['get', 'post'], 'register', 'AdminController@register');
    Route::middleware('admin')->group(function(){
        Route::get('dashboard', 'AdminController@Dashboard');
        Route::get('logout', 'AdminController@logout');

    });
    Route::get('/dashboard', 'App\Http\Controllers\Dashboard@index');
    Route::get('/datajemaat', 'App\Http\Controllers\JemaatController@index');
    Route::get('/tambahjemaat', 'App\Http\Controllers\JemaatController@create');
    Route::post('/tambahjemaat', 'App\Http\Controllers\JemaatController@store');
    Route::get('/viewjemaat/{JemaatId}', 'App\Http\Controllers\TampilanJemaat@show');
    Route::delete('/hapusjemaat/{id}' , [JemaatController::class, 'destroy']);
    Route::get('/editjemaat/{jemaatID}' , [JemaatController::class, 'edit']);
    Route::post('/updatejemaat/{jemaatID}', [JemaatController::class, 'update']);
    Route::get('/warta', 'App\Http\Controllers\WartaController@index' );
    Route::get('/tambahwarta', 'App\Http\Controllers\WartaController@create' );
    Route::post('/tambahwarta', 'App\Http\Controllers\WartaController@store' );
    Route::delete('/hapuswarta/{id}', [WartaController::class, 'destroy']);
    Route::get('/editwarta/{wartaId}', 'App\Http\Controllers\WartaController@edit');
    Route::post('/updatewarta/{wartaId}', 'App\Http\Controllers\WartaController@update');
    Route::get('/pelayan', 'App\Http\Controllers\PelayanController@index');
    Route::get('/tambahpelayan', 'App\Http\Controllers\PelayanController@create');
    Route::post('/tambahpelayan', 'App\Http\Controllers\PelayanController@store');
    Route::delete('/hapuspelayan/{id}', [PelayanController::class, 'destroy']);
    Route::get('/editpelayan/{pelayanId}', 'App\Http\Controllers\PelayanController@edit');
    Route::post('/updatepelayan/{pelayanId}', 'App\Http\Controllers\PelayanController@update');
    Route::get('/payment', 'App\Http\Controllers\PaymentController@index');
    Route::get('/tambahpayment', 'App\Http\Controllers\PaymentController@create');
    Route::post('/tambahpayment', 'App\Http\Controllers\PaymentController@store'); 
    Route::delete('/hapuspayment/{paymentId}', 'App\Http\Controllers\PaymentController@destroy');
    Route::get('/editpayment/{paymentId}', 'App\Http\Controllers\PaymentController@edit');
    Route::post('/updatepayment/{paymentId}', 'App\Http\Controllers\PaymentController@update'); 
    Route::get('/galeri', 'App\Http\Controllers\GaleriController@index');
    Route::get('/tambahgaleri', 'App\Http\Controllers\GaleriController@create');
    Route::post('/tambahgaleri', 'App\Http\Controllers\GaleriController@store');
    Route::delete('/hapusgaleri/{id}', [GaleriController::class, 'destroy']);
    Route::get('/editgaleri/{galeriId}', 'App\Http\Controllers\GaleriController@edit');
    Route::post('/updategaleri/{galeriId}', 'App\Http\Controllers\GaleriController@update');
    Route::get('/berita', 'App\Http\Controllers\BeritaController@index');
    Route::get('/tambahberita', 'App\Http\Controllers\BeritaController@create');
    Route::post('/tambahberita', 'App\Http\Controllers\BeritaController@store');
    Route::delete('/hapusberita/{id}', 'App\Http\Controllers\BeritaController@destroy');
    Route::get('/editberita/{beritaId}', 'App\Http\Controllers\BeritaController@edit');
    Route::post('/updateberita/{beritaId}', 'App\Http\Controllers\BeritaController@update');
    Route::get('/pengurus', 'App\Http\Controllers\PengurusController@index');
    Route::get('/tambahpengurus', 'App\Http\Controllers\PengurusController@create');
    Route::post('/tambahpengurus', 'App\Http\Controllers\PengurusController@store');
    Route::delete('/hapuspengurus/{pengurusId}', 'App\Http\Controllers\PengurusController@destroy');
    Route::get('/editpengurus/{pengurusId}', 'App\Http\Controllers\PengurusController@edit');
    Route::post('/updatepengurus/{pengurusId}', 'App\Http\Controllers\PengurusController@update');
    


});






