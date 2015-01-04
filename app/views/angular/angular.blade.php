@extends('layouts.admin')

@section('content')
	<!-- @include('angular.strictly_angular') -->
	<h3>Filtros</h3>
	<div class="row">
		<div class="col-md-6">
			<form action="#">
				<div class="form-group">
					<label for="selectCity">filtre por Cidade</label>
					<select name="city_filter" id="selectCity" multiple>
						<option value="Santo André">Santo André</option>
						<option value="São Paulo">São Paulo</option>
						<option value="São Caetano do Sul">São Caetano do Sul</option>
					</select>
				</div>
			</form>
		</div>
		<div class="col-md-4">
			<form action="#">
				<div class="form-group">
					<label for="selectOrdenacao">ordenar por</label>
					<select name="city_filter" id="selectOrdenacao">
						<option selected></option>
						<option value="1">por Nome descendente</option>
						<option value="2">por Nome ascendente</option>
						<option value="3">por Atualização descendente</option>
						<option value="4">por Atualização ascendente</option>
					</select>
				</div>
			</form>
		</div>
		<div class="col-md-2">
			<div class="form-group spa-container-btn-novo">
				<button class="btn btn-primary">Criar novo usuário</button>
			</div>
		</div>
	</div>
@stop