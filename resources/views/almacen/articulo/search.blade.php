{!! Form::open(['url'=>'almacen/articulo', 'method'=>'GET', 'autocomplete'=>'off', 'role'=>'search']) !!}

<div class="form-group">
	<div class="input-group">
		{!! Form::text('searchText', $searchText, ['class' => 'form-control', 'placeholder' => 'Buscar...']) !!}
		<span class="input-group-btn">
			{!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
		</span>
	</div>
</div>

{!! Form::close() !!}