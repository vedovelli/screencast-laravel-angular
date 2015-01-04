(function($) { // Se isola a variável $ dentro de um escopo fechado
	
	$(document).ready(function() { // Se inicia o uso da jQuery apenas após o DOM ter sido totalmente carregado
	
		var $email_input = $('#txtEmail');

		if($email_input.length > 0)
		{
			$email_input.focus();
		}
		
	});
	
})(jQuery);