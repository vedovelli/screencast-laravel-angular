(function() {

	'use strict';

	var app = angular.module('user', []);

	app.controller('UserListController', ['$scope','$http', function($scope, $http) {

		$scope.users = [];
	
		$scope.init = function() {
		
			$http.get('http://spa.app/api/user').success(function(data) {
			
				$scope.users = data.data;
			});
		}();
	}]);

	app.directive('userCard', function() {
	
		return {

			restrict: 'E',
			templateUrl: '/angular/partials/users.card.html'
		};
	});

	app.controller('FilterController', function() {
	
		this.init = function(element, attrs) {

			var 
				$ = jQuery,
				$filterComponent = $(element),
				$selectOrdenacao = $($filterComponent.find('#selectOrdenacao')[0]),
				$selectCity = $($filterComponent.find('#selectCity')[0])
			;

			$selectOrdenacao.select2({
				
				width: '100%',
				placeholder: 'Selecione uma nova ordenação para a lista'
			});


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

				$filterComponent.show();

			});
		}
	});

	app.directive('userFilter', function() {
	
		return {

			restrict: 'E',
			templateUrl: '/angular/partials/users.filter.html',
			controller: 'FilterController',
			controllerAs: 'filterCtrl',
			link: function($scope, $element, $attrs, filterCtrl){

				filterCtrl.init($element, $attrs);
			}
		};
	});
})();