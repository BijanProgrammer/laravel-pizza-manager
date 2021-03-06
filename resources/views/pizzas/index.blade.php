@extends('layouts.layout')

@section('content')
	<h2>Pizzas!</h2>

	@foreach($pizzas as $pizza)
		<a class="nocolor" href="/pizzas/{{$pizza->id}}">
			{{$pizza->name}} ordered {{$pizza->type }} with {{$pizza->base}} base
		</a>
	@endforeach
@endsection

@section('footer')
	<a href="/">Home</a>
	<span class="noop">|</span>
	<a href="/pizzas/create">Order a Pizza</a>
@endsection
