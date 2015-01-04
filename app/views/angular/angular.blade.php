@extends('layouts.admin')

@section('content')
	<!-- @include('angular.strictly_angular') -->
	

<!--Modal-->
	<div class="modal fade" id="userModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					<p>One fine body&hellip;</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!--/Modal-->


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
				<button class="btn btn-primary" data-toggle="modal" data-target="#userModal">Criar novo usuário</button>
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
	<nav class="text-center">
		<ul class="pagination">
			<li>
				<a href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
				</a>
			</li>
			<li><a href="#">1</a></li>
			<li class="active"><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li><a href="#">7</a></li>
			<li><a href="#">8</a></li>
			<li><a href="#">9</a></li>
			<li><a href="#">10</a></li>
			<li><a href="#">11</a></li>
			<li>
				<a href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			</a>
			</li>
		</ul>
	</nav>
<!--/Pagination-->



@stop