@extends('layout')


@section('content')
<div class="col-sm-8">
	<h2>Editar Producto
		<a href="{{ route('products.index') }}" class="btn btn-default pull-right">Listado</a>
	</h2>
	@include('products.fracment.error')
	{!! Form::model($product, ['route' => ['products.update',$product->id], 'method' => 'PUT']) !!}
	@include('products.fracment.form')
	{!! Form::close()!!}

</div>


<div class="col-sm-4">
	@include('products.fracment.aside')
</div>

@endsection