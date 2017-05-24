@extends('layout')


@section('content')
<div class="col-sm-8">
	<h2>Lista de Productos
		<a href="{{route('products.create')}}" class="btn btn-primary pull-right">Nuevo</a>
	</h2>
	@include('products.fracment.info')
	<table class="table table-hover table-striped">
		<thead>
		<tr>
			<th width="20px">ID</th>
			<th>Nombre del producto</th>
			<th colspan="3">&nbsp;</th>
		</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
			<td>{!!$product->id!!}</td>
			<td><strong>{!!$product->name!!}</strong> {!! $product->short!!}</td>
			<td><a href="{{route('products.show',    $product->id)}}" class="btn btn-success btn-md">Ver</a></td>
			<td><a href="{{route('products.edit',    $product->id)}}" class="btn btn-warning btn-md">Editar</a></td>
			<td>{!!Form::open(['route'=> ['products.destroy', $product->id], 'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-md'])!!}
				{!!Form::close()!!}
			</td>
			</tr>

			@endforeach
		</tbody>
	</table>
	<!-paginacion-->
	{!! $products->render() !!}
</div>
<div class="col-sm-4">
	@include('products.fracment.aside')
</div>

@endsection