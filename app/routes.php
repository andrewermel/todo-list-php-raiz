<?php


Route::get('/', 'HomeController@index');
Route::get('/lista', 'ListaController@index');

Route::post('/login', 'LoginController@login');
Route::post('/add', 'ListaAddController@add');
Route::get('/del','ListaDelController@del');
Route::get('/done','ListaDoneController@done');