@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-sm-6 col-xs-12">
			<h3>Editar Categoría: {{ $categoria->nombre }}</h3>

			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			{!! Form::model($categoria, ['method' => 'PATCH', 'route' => ['almacen.categoria.update', $categoria->idcategoria]]) !!}
			{{Form::token()}}

			<div class="form-group">
				{!! Form::label('nombre', 'Nombre:', ['class' => 'font-weight-bold']) !!}
				{!! Form::text('nombre', $categoria->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre...', 'required']) !!}

				{!! Form::label('descripcion', 'Descripción:', ['class' => 'font-weight-bold']) !!}
				{!! Form::text('descripcion', $categoria->descripcion, ['class' => 'form-control', 'placeholder' => 'Descripción...', 'required']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
				{!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection