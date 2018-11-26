<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/regis', function () {
    return view('regis');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/crud', function () {
    return view('crudtest');
});

Route::post('/regise', 'regisController@insert');
Route::post('/crudin', 'loginController@login');



