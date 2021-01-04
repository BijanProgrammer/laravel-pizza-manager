@extends('layouts.layout')

@section('content')
	<h2>Hello, Friend!</h2>

	<p>{{session('message')}}</p>
@endsection

@section('footer')
	<a href="/pizzas">Show all Pizzas</a>
	<span class="noop">|</span>
	<a href="/pizzas/create">Order a Pizza</a>
@endsection
