@extends('layouts.admin')

@section('content')
	<!-- @include('angular.strictly_angular') -->
	<h3>Filtros</h3>
	<div class="row">
		<div class="col-md-6">
			<form action="#">
				<div class="form-group">
					<label for="selectCity">filtre por Cidade</label>
					<select name="city_filter" id="selectCity" class="form-control"></select>
				</div>
			</form>
		</div>
		<div class="col-md-3">2</div>
		<div class="col-md-3">3</div>
	</div>
@stop