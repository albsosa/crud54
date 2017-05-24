@extends('layout')


@section('content')
<div class="col-sm-8">
	<h2>Crear Producto
		<a href="{{route('products.index')}}" class="btn btn-default pull-right">Listado</a>
	</h2>
	{!! Form::open(['route' => 'products.store']) !!}
	@include('products.fracment.form')
	{!! Form::close()!!}
	

</div>


<div class="col-sm-4">
	@include('products.fracment.aside')
</div>

@endsection