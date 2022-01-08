<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', function () {
    return 'welcome';
});
Route::group(['namespace'=>'Admin'],function() {
    Route::get('user', 'SecondController@showUserName');
});
