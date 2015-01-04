(function($) { // Se isola a variável $ dentro de um escopo fechado
	
	$(document).ready(function() { // Se inicia o uso da jQuery apenas após o DOM ter sido totalmente carregado
	
		var 	$txtEmail = $('#txtEmail'),
				$selectCity = $('#selectCity')
		;

		if($txtEmail.length > 0)
		{
			$txtEmail.focus();
		}
		
	});
	
})(jQuery);