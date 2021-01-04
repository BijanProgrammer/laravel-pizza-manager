<?php

	namespace App\Http\Controllers;

	class PizzaController extends Controller {
		public function index() {
			$pizzas = [
				["type" => "hawaiian", "base" => "cheesy crust"],
				["type" => "volcano", "base" => "garlic crust"],
				["type" => "veg supreme", "base" => "thin & crust"]
			];

			return view("pizzas", [
				"pizzas" => $pizzas,
				"name" => request("name")
			]);
		}

		public function show($id) {
			return view("details", ["id" => $id]);
		}
	}
