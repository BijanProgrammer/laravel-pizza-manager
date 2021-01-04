@extends('layouts.layout')

@section('content')
	<h2>Pizzas!</h2>

	@foreach($pizzas as $pizza)
		<p>
			{{$pizza->name}} ordered {{$pizza->type }} with {{$pizza->base}} base
		</p>
	@endforeach
@endsection

@section('footer')
	<a href="/">Home</a> | <a href="/pizzas/create">Order a Pizza</a>
@endsection
