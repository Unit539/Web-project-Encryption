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
    return view('info');
});

Route::get("/info", function(){
    return view('info');
});

Route::name('user.')->group(function(){
    Route::match(['get', 'post'], 'home', 'HomeController@index')->middleware('auth')->name('home');
    Route::match(['get', 'post'], 'decr', 'DescController@index')->middleware('auth')->name('desc');

    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.home'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', 'LoginController@login');

    Route::get('/logout', function(){
        Auth::logout();
        Session::flush();
        return redirect(route('user.login'));
    })->name('logout');

    Route::get('/register', function(){
        if(Auth::check()){
            return redirect(route('user.home'));
        }
        return view('register');
    })->name('register');

    Route::post('/register', 'RegisterController@register');
});
