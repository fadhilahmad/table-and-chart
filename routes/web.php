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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/november', function () {
    return view('november');
})->name('november');

//november

Route::get('/novWeek1', function () {
    return view('november/NovWeek1');
})->name('novWeek1');

Route::get('/novWeek2', function () {
    return view('november/NovWeek2');
})->name('novWeek2');

Route::get('/novWeek3', function () {
    return view('november/NovWeek3');
})->name('novWeek3');

Route::get('/novWeek4', function () {
    return view('november/NovWeek4');
})->name('novWeek4');

//december

Route::get('/decWeek1', function () {
    return view('december/decWeek1');
})->name('decWeek1');

Route::get('/decWeek2', function () {
    return view('december/decWeek2');
})->name('decWeek2');

Route::get('/decWeek3', function () {
    return view('december/decWeek3');
})->name('decWeek3');

Route::get('/decWeek4', function () {
    return view('december/decWeek4');
})->name('decWeek4');

//january

Route::get('/janWeek1', function () {
    return view('january/janWeek1');
})->name('janWeek1');

Route::get('/janWeek2', function () {
    return view('january/janWeek2');
})->name('janWeek2');

Route::get('/janWeek3', function () {
    return view('january/janWeek3');
})->name('janWeek3');

Route::get('/janWeek4', function () {
    return view('january/janWeek4');
})->name('janWeek4');

