/**
* Custom user interface
*/
(function() {

	'use strict';

	var app = angular.module('ui.spa', []);

	app.directive('select2', ['$http', function($http) {

		return {

			restrict: 'A',
			
			controller: function() {
			
				this.init = function(element, attrs){

					var config = {};

					if(attrs.source){

						$http.get(attrs.source).success(function(response) {
							
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

			controllerAs: 'select2Ctrl',
			
			link: function($scope, $element, $attrs, select2Ctrl){
			
				select2Ctrl.init($element, $attrs);
			}
		};
	}]);
})();