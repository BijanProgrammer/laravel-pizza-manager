@extends('layouts.layout')

@section('content')
	<h2>Pizzas!</h2>

	<p>{{$name}}</p>

	@foreach($pizzas as $pizza)
		<p>
			{{$loop->index }}) {{ $pizza['type']  }} - {{$pizza['base']}}

			@if($loop->first)
				<span> - first in the loop</span>
			@endif
			@if($loop->last)
				<span> - last in the loop</span>
			@endif
		</p>
	@endforeach
@endsection
