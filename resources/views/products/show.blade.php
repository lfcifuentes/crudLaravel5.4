@extends('layout')

@section('content')
	<div class="col-8">
		<h2>
			{!! $product->name  !!}
			<a class="btn btn-primary pull-right" href="{!! route('products.edit',$product->id) !!}">
				<i class="fa fa-pencil"></i>
				Editar
			</a>
		</h2>	
		<p>
			{!! $product->short !!}
		</p>
		{!! $product->body !!}
	</div>
@endsection
