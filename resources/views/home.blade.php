@extends('layouts.layout')

@section('content')
	<h2>Home!</h2>

	<p>{{session('message')}}</p>
@endsection

@section('footer')
	<a href="/pizzas">Show all Pizzas</a> | <a href="/pizzas/create">Order a Pizza</a>
@endsection
