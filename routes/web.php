<?php


Route::get('/', 'TodosController@index');
Route::get('/', 'TodosController@update');
Route::resource('todos', 'TodosController');
