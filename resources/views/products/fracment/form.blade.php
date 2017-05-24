<div class="form-group">
	{!! Form::label('name', 'Nombre del Producto')!!}
	{!! Form::text('name', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('short', 'Descripción corta')!!}
	{!! Form::text('short', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('body', 'Descripción')!!}
	{!! Form::textarea('body', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::submit('enviar', ['class' => 'btn btn-succes'])!!}
</div>