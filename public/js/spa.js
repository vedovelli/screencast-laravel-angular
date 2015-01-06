(function($) { // Se isola a variável $ dentro de um escopo fechado
	
	'use strict';

	$(document).ready(function() { // Se inicia o uso da jQuery apenas após o DOM ter sido totalmente carregado
	
		var $txtEmail = $('#txtEmail');

		if($txtEmail.length > 0)
		{
			$txtEmail.focus();
		}


		var userForm = '
	<form action="#" class="spa-user-form">
		
		<img src="/img/ved_oficial_2015_headshot.jpg" alt="Fabio Vedovelli" width="200" class="spa-user-form-image">
		
		<h4>Todos os campos são de preenchimento obrigatório</h4>
		
		<div class="row">
			<div class="col-md-5">
				<div class="form-group">
					<label for="txtFullname">Nome Completo</label>
					<input type="text" class="form-control" name="fullname" id="txtFullname" required>
				</div>		
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="txtEmail">E-mail</label>
					<input type="email" class="form-control" name="email" id="txtEmail" required>
				</div>
			</div>
			<div class="col-md-offset-3"></div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="txtUsername">Usuário</label>
					<input type="text" class="form-control" name="username" id="txtUsername" required>
				</div>		
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="txtPassword">Senha</label>
					<input type="password" class="form-control" name="password" id="txtPassword" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="txtPasswordConfirmation">Confirmação de Senha</label>
					<input type="password" class="form-control" name="password_confirmation" id="txtPasswordConfirmation" required>
				</div>
			</div>
			<div class="col-md-offset-3"></div>
		</div>

		<div class="row">
			<div class="col-md-2">
				<div class="form-group">
					<label for="txtCep">CEP</label>
					<input type="text" class="form-control" name="cep" id="txtCep" required>
				</div>		
			</div>
			<div class="col-md-5">
				<div class="form-group">
					<label for="txtCidade">Cidade</label>
					<input type="text" class="form-control" name="cidade" id="txtCidade" required>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label for="txtEstado">UF</label>
					<input type="text" class="form-control" name="estado" id="txtEstado" required>
				</div>
			</div>
			<div class="col-md-offset-3"></div>
		</div>
		
	</form>
				';
		
	});
	
})(jQuery);