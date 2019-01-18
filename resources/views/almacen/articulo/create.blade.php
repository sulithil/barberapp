@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-sm-6 col-xs-12">
			<h3>Nuevo Artículo</h3>

			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>


	{!! Form::open(['url' => 'almacen/articulo', 'method' => 'POST', 'autocomplete' => 'off', 'files' => 'true']) !!}
	{{Form::token()}}

	<div class="row">
		<div class="col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" required value="{{ old('nombre') }}" class="form-control" placeholder="Nombre...">
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="idcategoria">Categoría</label>
				<select name="idcategoria" class="form-control">	
					@foreach ($categorias as $cat)
						<option value="{{ $cat->idcategoria }}">{{ $cat->nombre }}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="codigo">Código</label>
				<input type="text" name="codigo" required value="{{ old('codigo') }}" class="form-control" placeholder="Código...">
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="stock">Stock</label>
				<input type="text" name="stock" required value="{{ old('stock') }}" class="form-control" placeholder="Stock...">
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" value="{{ old('descripcion') }}" class="form-control" placeholder="Descripción...">
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control">
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="form-group">
				{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
				{!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
			</div>
		</div>
	</div>
	{!! Form::close() !!}

@endsection