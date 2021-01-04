<?php
	Route::get('/', function () {
		return view('home');
	});

	Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index');
	Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show');
