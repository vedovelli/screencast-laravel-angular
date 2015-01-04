@extends('layouts.admin')

@section('content')
	<!-- @include('angular.strictly_angular') -->
	

<!--Filters-->
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
<!--/Filters-->


<!--User List-->
	<div class="spa-user-list">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-info spa-user-item">
					<div class="panel-heading">
						<h3 class="panel-title">Fábio Vedovelli
							<small class="pull-right">vedovelli@gmail.com</small></h3>
					</div>
					<div class="panel-body">
						<img src="/img/ved_oficial_2015_headshot.jpg" alt="Fábio Vedovelli" class="pull-right" width="90">
						<strong>Cidade:</strong> Santo André<br>
						<strong>Estado:	</strong> SP<br><br>
						<div class="btn-group spa-acoes">
							<button type="button" class="btn btn-default btn-sm">Ações</button>
							<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Editar</a></li>
								<li><a href="#">Remover</a></li>
							</ul>
						</div>
					</div> <!--.panel-body-->
				</div> <!--.panel panel-info spa-user-item-->
			</div> <!--.col-md-4-->
			<div class="col-md-4">
				<div class="panel panel-info spa-user-item">
					<div class="panel-heading">
						<h3 class="panel-title">Fábio Vedovelli
							<small class="pull-right">vedovelli@gmail.com</small></h3>
					</div>
					<div class="panel-body">
						<img src="/img/ved_oficial_2015_headshot.jpg" alt="Fábio Vedovelli" class="pull-right" width="90">
						<strong>Cidade:</strong> Santo André<br>
						<strong>Estado:	</strong> SP<br><br>
						<div class="btn-group spa-acoes">
							<button type="button" class="btn btn-default btn-sm">Ações</button>
							<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Editar</a></li>
								<li><a href="#">Remover</a></li>
							</ul>
						</div>
					</div> <!--.panel-body-->
				</div> <!--.panel panel-info spa-user-item-->
			</div> <!--.col-md-4-->
			<div class="col-md-4">
				<div class="panel panel-info spa-user-item">
					<div class="panel-heading">
						<h3 class="panel-title">Fábio Vedovelli
							<small class="pull-right">vedovelli@gmail.com</small></h3>
					</div>
					<div class="panel-body">
						<img src="/img/ved_oficial_2015_headshot.jpg" alt="Fábio Vedovelli" class="pull-right" width="90">
						<strong>Cidade:</strong> Santo André<br>
						<strong>Estado:	</strong> SP<br><br>
						<div class="btn-group spa-acoes">
							<button type="button" class="btn btn-default btn-sm">Ações</button>
							<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Editar</a></li>
								<li><a href="#">Remover</a></li>
							</ul>
						</div>
					</div> <!--.panel-body-->
				</div> <!--.panel panel-info spa-user-item-->
			</div> <!--.col-md-4-->
		</div> <!--.row-->
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-info spa-user-item">
					<div class="panel-heading">
						<h3 class="panel-title">Fábio Vedovelli
							<small class="pull-right">vedovelli@gmail.com</small></h3>
					</div>
					<div class="panel-body">
						<img src="/img/ved_oficial_2015_headshot.jpg" alt="Fábio Vedovelli" class="pull-right" width="90">
						<strong>Cidade:</strong> Santo André<br>
						<strong>Estado:	</strong> SP<br><br>
						<div class="btn-group spa-acoes">
							<button type="button" class="btn btn-default btn-sm">Ações</button>
							<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Editar</a></li>
								<li><a href="#">Remover</a></li>
							</ul>
						</div>
					</div> <!--.panel-body-->
				</div> <!--.panel panel-info spa-user-item-->
			</div> <!--.col-md-4-->
			<div class="col-md-4">
				<div class="panel panel-info spa-user-item">
					<div class="panel-heading">
						<h3 class="panel-title">Fábio Vedovelli
							<small class="pull-right">vedovelli@gmail.com</small></h3>
					</div>
					<div class="panel-body">
						<img src="/img/ved_oficial_2015_headshot.jpg" alt="Fábio Vedovelli" class="pull-right" width="90">
						<strong>Cidade:</strong> Santo André<br>
						<strong>Estado:	</strong> SP<br><br>
						<div class="btn-group spa-acoes">
							<button type="button" class="btn btn-default btn-sm">Ações</button>
							<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Editar</a></li>
								<li><a href="#">Remover</a></li>
							</ul>
						</div>
					</div> <!--.panel-body-->
				</div> <!--.panel panel-info spa-user-item-->
			</div> <!--.col-md-4-->
			<div class="col-md-4">
				<div class="panel panel-info spa-user-item">
					<div class="panel-heading">
						<h3 class="panel-title">Fábio Vedovelli
							<small class="pull-right">vedovelli@gmail.com</small></h3>
					</div>
					<div class="panel-body">
						<img src="/img/ved_oficial_2015_headshot.jpg" alt="Fábio Vedovelli" class="pull-right" width="90">
						<strong>Cidade:</strong> Santo André<br>
						<strong>Estado:	</strong> SP<br><br>
						<div class="btn-group spa-acoes">
							<button type="button" class="btn btn-default btn-sm">Ações</button>
							<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Editar</a></li>
								<li><a href="#">Remover</a></li>
							</ul>
						</div>
					</div> <!--.panel-body-->
				</div> <!--.panel panel-info spa-user-item-->
			</div> <!--.col-md-4-->
		</div> <!--.row-->
	</div> <!--.spa-user-list-->
<!--/User List-->

<!--Pagination-->

<!--/Pagination-->



@stop