@extends('layout')

@section('content')
	
	<div class="col-sm-8">
		<div class="row">
			<a href="{{ route('products.index') }}" class="btn btn-primary pull-right" title="Regresar">
				<span class="glyphicon glyphicon-backward"></span>
			</a>

			<h2 class="text-primary text-left">Editar Producto</h2>

			@include('products.fragment.error')

			{!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}
				@include('products.fragment.form')
			{!! Form::Close() !!}
		</div>
	</div>

	<div class="col-sm-4">
		@include('products.fragment.aside')
	</div>
@endsection