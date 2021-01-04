@extends('layouts.layout')

@section('content')
	<h2>Pizzas | {{$pizza->id}}</h2>

	<p>
		{{$pizza->name}} | {{$pizza->type }} | {{$pizza->base}}
	</p>
@endsection

@section('footer')
	<a href="/pizzas">Show all Pizzas</a>
@endsection
