@extends('layout')

@section('content')

	<div class="col-sm-8">
		<div class="container-fluid">
			
			<h2 class="text-muted text-center">Listado De Productos
				<a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo</a>
			</h2>
			
			@include('products.fragment.info')

			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th width="20px">#</th>
						<th>Nombre Del Producto</th>
						<th colspan="3">&nbsp;</th>
					</tr>
				</thead>

				<tbody>
					@foreach($products as $product)
						<tr>
							<td>{{ $product->id }}</td>
							
							<td class="text-justify">
								<span class="text-primary"><b>{{ $product->name }}</b></span>
								{{ str_limit($product->short, 100) }}
							</td>

							<td>
								<a href="{{ route('products.show', $product->id) }}" class="btn btn-success" title="Ver Info">
									<span class="glyphicon glyphicon-eye-open"></span>
								</a>
							</td>

							<td>
								<a href="{{ route('products.edit', $product->id) }}" class="btn btn-default" title="Editar">
									<span class="glyphicon glyphicon-edit"></span>
								</a>
							</td>

							<td>
								<form action="{{ route('products.destroy', $product->id) }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">    <!-- SIMULANDO USAR EL METODO DELETE -->

									<button class="btn btn-danger" title="Eliminar">
										<span class="glyphicon glyphicon-trash"></span> 	
									</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

			{!! $products->render() !!}
		</div>
	</div>

	<div class="col-sm-4">
		@include('products.fragment.aside')
	</div>
@endsection