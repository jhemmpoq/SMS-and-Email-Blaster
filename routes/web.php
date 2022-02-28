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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/services', function () {
    return view('services.email');
});
Route::get('/contact/list', function () {
    return view('services.email');
    
});

Route::get('/contact/group', function () {
    return view('services.congroup');   
});


Route::get('/logins', function () {
    return view('auth.logins');
});


Route::get('/registers', function () {
    return view('auth.registers');
});

Route::get('/resets', function () {
    return view('auth.passwords.emails');
});

Route::get('segment', function () {
    return view('segment');   
});


Route::get('/pricing', function () {
    return view('pricing');
});


Route::get('/campaign', function () {
    return view('campaign');
});

Route::get('/congroup', function () {
    return view('services.congroup');
});

Route::get('/contacts/list/addlist', function () {
    return view('layer.addlist');
});

Route::get('/newgroup', function () {
    return view('modal.newgroup');
});

Route::get('/contacts/groups/addgroup', function () {
    return view('layer.addgroup');
});

Route::get('/contacts/groups/addsms', function () {
    return view('layer.addsms');
});

Route::get('/contacts/groups/addemail', function () {
    return view('layer.addemail');
});

Route::get('/contacts/groups/addboth', function () {
    return view('layer.addboth');
});

Route::get('/modal', function () {
    return view('modal');
});

Route::get('/sample', function () {
    return view('sample');
});