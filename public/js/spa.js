(function($) { // Se isola a variável $ dentro de um escopo fechado
	
	'use strict';

	$(document).ready(function() { // Se inicia o uso da jQuery apenas após o DOM ter sido totalmente carregado
	
		var 	$txtEmail = $('#txtEmail'),
				$selectCity = $('#selectCity'),
				$spaUserList = $('.spa-user-list'),
				$selectOrdenacao = $('#selectOrdenacao'),
				$buttonNovoUsuario = $('.spa-container-btn-novo').find('button');
		;

		$spaUserList.on('mouseenter', '.spa-user-item', function(event) {
		
			$(event.currentTarget).find('.spa-user-actions').show();
		});

		$spaUserList.on('mouseleave', '.spa-user-item', function(event) {
		
			$(event.currentTarget).find('.spa-user-actions').hide();
		});

		$spaUserList.on('click', '.spa-remove-user', function(event) {
		
			bootbox.confirm('Tem certeza que deseja remover o usuário?', function(action) {
			
				console.log(action);
			});
		});

		$spaUserList.on('click', '.spa-edit-user', function(event) {
			
			var fullname = $(this).data('fullname');
		
			bootbox.dialog({
				title: 'Editar Usuário ' + fullname,
				message: userForm
			});
		});

		$buttonNovoUsuario.on('click', function() {
		
			bootbox.dialog({
				title: 'Criar novo usuário',
				message: userForm
			});
		});


		$selectOrdenacao.select2({
			width: '100%',
			placeholder: 'Selecione uma nova ordenação para a lista'
		});

		if($txtEmail.length > 0)
		{
			$txtEmail.focus();
		}


		$.getJSON('http://spa.app/api/cities', function(data) {
		
			var options = '';
			$(data.cities).each(function() {
			
				options += '<option value='+this.city+'>'+this.city+'</option>';
			});

			$selectCity.html(options);

			$selectCity.select2({
				width: '100%',
				placeholder: 'Inicie digitando o nome de uma cidade'
			});

		});


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