@extends('layouts.layout')

@section('content')
	<h2>Pizzas | {{$pizza->id}}</h2>

	<p>
		{{$pizza->name}} | {{$pizza->type }} | {{$pizza->base}} | {{implode(", ", $pizza->toppings)}}
	</p>

	<form action="/pizzas/{{$pizza->id}}" method="POST">
		@csrf
		@method('DELETE')
		<input class="btn btn-success" type="submit" value="Complete Order">
	</form>
@endsection

@section('footer')
	<a href="/pizzas">Show all Pizzas</a>
@endsection
