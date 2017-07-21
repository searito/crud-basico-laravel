@extends('layout')

@section('content')
	
	<div class="col-sm-8">
		<div class="row">
			<a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary pull-right" title="Editar">
				<span class="glyphicon glyphicon-edit"></span> Editar
			</a>

			<h2 class="text-primary text-left">{{ $product->name}}</h2>

			<p class="text-left text-capitalize">
				{{ $product->short }}
			</p>

			<p class="text-justify">
				{!! $product->body !!}
			</p>
		</div>
	</div>

	<div class="col-sm-4">
		@include('products.fragment.aside')
	</div>
@endsection