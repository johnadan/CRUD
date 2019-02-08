<?php

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


//Route::middleware("auth")->group(function(){

	//});

	//});
//});

Route::middleware(['auth'])->group(function(){
Route::get('/dashboard', "DashboardController@showuserDashboard");
});

Route::middleware(['admin'])->group(function(){
Route::get('/admindashboard', "AdminDashboardController@showadminDashboard");
});
// });
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
