(function() {

	'use strict';

	var app = angular.module('user', ['angular.filter', 'ui.spa']);

	app.controller('UserListController', ['$scope','$http', function($scope, $http) {

		$scope.users = [];
	
		$scope.init = function() {
		
			$http.get('http://spa.app/api/user').success(function(data) {
			
				$scope.users = data.users;
			});
		}();
	}]);

	app.controller('FilterController', function() {});

	app.directive('userCard', function() {
	
		return {

			restrict: 'E',
			templateUrl: '/angular/partials/users.card.html'
		};
	});

	app.directive('userFilter', function() {
	
		return {

			restrict: 'E',
			templateUrl: '/angular/partials/users.filter.html',
			controller: 'FilterController',
			controllerAs: 'filterCtrl',
			link: function($scope, $element, $attrs, filterCtrl){

				$element.show();
			}
		};
	});

})();