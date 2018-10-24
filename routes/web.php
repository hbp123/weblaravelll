<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blog', 'Blogcontroller@index' );
Route::get('/blog/{id}','Blogcontroller@show' );



