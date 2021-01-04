@extends('layouts.layout')

@section('content')
	<h2>Order a Pizza</h2>
	<form action="/pizzas" method="POST">
		@csrf
		<div class="form__field">
			<label class="label" for="input-name">Your name:</label>
			<input id="input-name" type="text" name="name" placeholder="ex: Bijan">
		</div>

		<div class="form__field">
			<label class="label" for="select-type">Pizza type:</label>
			<select id="select-type" name="type">
				<option value="margherita">Margherita</option>
				<option value="hawaiian">Hawaiian</option>
				<option value="veg supreme">Veg Supreme</option>
				<option value="volcano">Volcano</option>
			</select>
		</div>

		<div class="form__field">
			<label class="label" for="select-type">Pizza base:</label>
			<select id="select-type" name="base">
				<option value="cheesy crust">Cheesy Crust</option>
				<option value="garlic crust">Garlic Crust</option>
				<option value="thin & crispy">Thin & Crispy</option>
				<option value="thick">Thick</option>
			</select>
		</div>

		<div class="form__field">
			<span class="label">Extra toppings:</span>

			<div class="checkbox-group">
				<input id="checkbox-mushrooms" type="checkbox" name="toppings[]" value="mushrooms">
				<label class="label label-checkbox" for="checkbox-mushrooms">Mushrooms</label>

				<input id="checkbox-peppers" type="checkbox" name="toppings[]" value="peppers">
				<label class="label label-checkbox" for="checkbox-peppers">Peppers</label>

				<input id="checkbox-garlic" type="checkbox" name="toppings[]" value="garlic">
				<label class="label label-checkbox" for="checkbox-garlic">Garlic</label>

				<input id="checkbox-olives" type="checkbox" name="toppings[]" value="olives">
				<label class="label label-checkbox" for="checkbox-olives">Olives</label>
			</div>
		</div>

		<input class="btn btn-primary" type="submit" value="Order Pizza">
	</form>
@endsection

@section('footer')
	<a href="/">Home</a> | <a href="/pizzas">Show all Pizzas</a>
@endsection
