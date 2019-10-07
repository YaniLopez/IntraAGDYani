<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('shares', 'ShareController');
Route::resource('noticias', 'NoticiaController');
Route::resource('tags', 'NoticiaController');
Route::resource('areas', 'NoticiaController');