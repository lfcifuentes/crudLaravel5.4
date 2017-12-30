@extends('layout')

@section('content')
	<div class="col-8">
		<h2>
			Listado de productos
			<a class="btn btn-primary pull-right" href="{!! route('products.create') !!}">
				<i class="fa fa-plus"></i>
				Nuevo
			</a>
		</h2>	
		@include('products.partials.info')
		<table class="table table-hover table-striped table-sm">
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th colspan="3">&nbsp;</th>
			</thead>
			<tbody>
				@foreach($products as $product)
					<tr>
						<td>{!! $product->id !!}</td>
						<td>
							<strong>{!! $product->name !!}</strong>
							{!! $product->short !!}
						</td>
						<td>
							<a href="{!! route('products.show',$product->id) !!}" class="btn btn-link">
								Ver
							</a>
						</td>
						<td>
							<a href="{!! route('products.edit',$product->id) !!}" class="btn btn-link">
								Editar
							</a>
						</td>
						<td>
							<form action="{!! route('products.destroy',$product->id) !!}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">	
								<button class="btn btn-link">
									Eliminars
								</button>	
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $products->render() !!}
	</div>
	<div class="col-4">
		@include('products.partials.aside')
	</div>
@endsection
