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

//Route::get('foo', 'Viet@hello');


Route::get('/about', function() {
    return "this is about page";
});


Route::get('/contact', function() {
    return "this is my contact page";
});

Route::redirect('/contact', '/about');

Route::view('/welcome', 'welcome');





Route::get('user/{id}', function ($id) {
    return 'My user id is' . $id;
})->where('id', '[0-4]');

Route::get('users/{name}', function($name) {
    return "My name is " . $name;
});


Route::get('/user/profile', function() {
    return 'profile redirect';
})->name('profile');


Route::get('/user/viet', function() {
    $url = route('profile', ['id' => 2]);
    //return redirect()->route('profile');
    return $url;
});


Route::get('user/{id}/profile', function($id) {
    return 'user ' . $id;
})->name('profile');


Route::get('post/{id}', 'PostController@index');


Route::resource('posts', 'PostController');












