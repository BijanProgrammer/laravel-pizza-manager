<?php
	Route::get('/', function () {
		return view('home');
	});

	Route::get('/pizzas/create', 'App\Http\Controllers\PizzaController@create');
	Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show')->middleware('auth');
	Route::delete('/pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy')->middleware('auth');
	Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store');
	Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index')->middleware('auth');

	Auth::routes(['register' => false]);

	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
