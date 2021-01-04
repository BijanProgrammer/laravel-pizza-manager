<?php

	namespace App\Http\Controllers;

	use App\Models\Pizza;

	class PizzaController extends Controller {
		public function index() {
			$pizzas = Pizza::all();

			return view("pizzas.index", [
				"pizzas" => $pizzas
			]);
		}

		public function show($id) {
			$pizza = Pizza::findOrFail($id);

			if (isset($pizza))
				return view("pizzas.show", ["pizza" => $pizza]);
			else
				return view("home");
		}

		public function create() {
			return view("pizzas.create");
		}

		public function store() {
			$pizza = new Pizza();
			$pizza->name = request('name');
			$pizza->type = request('type');
			$pizza->base = request('base');
			$pizza->toppings = request('toppings');

			$pizza->save();

			return redirect('/')->with('message', 'The order has been successfully added!');
		}

		public function destroy($id) {
			$pizza = Pizza::findOrFail($id);
			$pizza->delete();

			return redirect('/pizzas')->with('message', 'The order has been successfully completed!');
		}
	}
