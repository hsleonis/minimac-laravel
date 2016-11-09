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

Route::get('/', 'Front\HomeController@index')->name('home');

Route::get('home', 'Front\HomeController@index')->name('home');

Route::get('about', array('as' => 'about', function(){
    return View::make('global.about');
}));

Route::get('contact', array('as' => 'contact', function(){
    return View::make('global.contact');
}));

Route::get('post', array('as' => 'post', function(){
    return View::make('global.post');
}));

/*Route::get('post/{id}', array('as' => 'post_detail', function($id){
    return $id;
}));*/

Route::get('post/{id}', function ($id) {
    return 'User '.$id;
});

Auth::routes();

// ===============================================
// ADMIN SECTION =================================
// ===============================================
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');

    Route::get('/', function(){
        return Redirect::route('dashboard');
    });

    Route::get('newpost', 'Admin\DashboardController@newpost')->name('newpost');

    Route::post('savepost', 'Admin\DashboardController@savepost')->name('savepost');
});