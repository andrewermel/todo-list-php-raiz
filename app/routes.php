<?php


Route::get('/', 'HomeController@index');
Route::post('/login', 'LoginController@login');
Route::get('/lista', 'ListaController@index');
Route::post('/add', 'ListaAddController@add');