<?php
	Route::get('/', function () {
		return view('home');
	});

	Route::get('/pizzas/create', 'App\Http\Controllers\PizzaController@create');
	Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show');
	Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store');
	Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index');
