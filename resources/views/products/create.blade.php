@extends('layout')

@section('content')
	<div class="col-8">
		<h2>
			Nuevo producto
			<a class="btn btn-primary pull-right" href="{!! route('products.index') !!}">
				<i class="fa fa-list-ul"></i>
				Listado
			</a>
		</h2>	
		{!! Form::open(['route' => 'products.store']) !!}
	
			@include('products.partials.form')

		{!! Form::close() !!}
		@include('products.partials.error')
	</div>
	<div class="col-4">
		@include('products.partials.aside')
	</div>
@endsection
