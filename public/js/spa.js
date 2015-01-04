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
				message: 'Adicionar aqui o form'
			});
		});

		$buttonNovoUsuario.on('click', function() {
		
			bootbox.dialog({
				title: 'Criar novo usuário',
				message: 'Adicionar aqui o form'
			});
		});

		$selectCity.select2({
			width: '100%',
			placeholder: 'Inicie digitando o nome de uma cidade'
		});

		$selectOrdenacao.select2({
			width: '100%',
			placeholder: 'Selecione uma nova ordenação para a lista'
		});

		if($txtEmail.length > 0)
		{
			$txtEmail.focus();
		}
		
	});
	
})(jQuery);