(function($) { // Se isola a variável $ dentro de um escopo fechado

	'use strict';

	$(document).ready(function() { // Se inicia o uso da jQuery apenas após o DOM ter sido totalmente carregado

		var $txtEmail = $('#txtEmail');

		if($txtEmail.length > 0)
		{
			$txtEmail.focus();
		}
	});

})(jQuery);