/**
* Custom user interface
*/
(function() {

	'use strict';

	var app = angular.module('ui.spa', ['service.spa']);

	/**
	* O componente pagination herdará o escopo no qual foi inserido.
	* Cerifique-se de ter no seu escopo as seguintes variáveis:
	* range: array contendo as páginas a serem exibidas no componente visual: [1, ..., 17, 18, 19, 20, ... 299]
	* currentPage: integer
	*/
	app.directive('pagination', ['$compile', 'TemplateService', function($compile, TemplateService) {

		return {

			restrict: 'E',

			compile: function(element, attrs) {

				// Carrega o template da diretiva dinamicamente, usando o atributo 'template'
				var templateSource = TemplateService.fetch(attrs.template).success(function(html) {

					element.html(html);
				});

				// retorna após link function
				return function (scope, element) {

					// Compila ao template, transformando expressões em resultado final. Ex. {{2+2}} será exibido como 4
					templateSource.then(function (templateText) {

						element.html($compile(element.html())(scope));
					});
				};
			}
		};
	}]);

	app.directive('select2', ['CityService', function(CityService) {

		return {

			restrict: 'A',

			// TODO verificar se o acesso ao element deve continuar aqui no controller ou se devo passar para link function
			controller: function() {

				this.init = function(element, attrs){

					var config = {};

					if(attrs.allowclear) {

						config.allowClear = attrs.allowclear;
					}

					if(attrs.source){

						CityService.fetch(attrs.source).success(function(response) {

							var html = '';

							response.data.forEach(function(obj){

								html += '<option value="'+obj[attrs.property]+'">'+obj[attrs.property]+'</option>';
							});

							element.html(html);
						});
					}

					element.select2(config);
				}
			},

			link: function(scope, element, attrs, select2Ctrl){

				select2Ctrl.init(element, attrs);
			}
		};
	}]);
})();