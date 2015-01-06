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
						$http.get(attrs.source).success(function(data) {
							
							var html = '';
							
							data.cities.forEach(function(city){

								html += '<option value="'+city.city+'">'+city.city+'</option>';
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