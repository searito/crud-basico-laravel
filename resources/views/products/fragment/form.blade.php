<div class="form-group">
	{!! Form::label('name', 'Nombre Del Producto') !!}
	{!! form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! form::label('short', 'Descripción Breve Del Producto') !!}
	{!! form::text('short', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! form::label('body', 'Descripción Del Producto') !!}
	{!! form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>