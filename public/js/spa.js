(function($) { // Se isola a variável $ dentro de um escopo fechado
	
	'use strict';

	$(document).ready(function() { // Se inicia o uso da jQuery apenas após o DOM ter sido totalmente carregado
	
		var 	$txtEmail = $('#txtEmail'),
				$selectCity = $('#selectCity'),
				$spaUserList = $('.spa-user-list'),
				$selectOrdenacao = $('#selectOrdenacao')
		;

		$spaUserList.on('mouseenter', '.spa-user-item', function(event) {
		
			$(event.currentTarget).find('.spa-acoes').show();
		});

		$spaUserList.on('mouseleave', '.spa-user-item', function(event) {
		
			$(event.currentTarget).find('.spa-acoes').hide();
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