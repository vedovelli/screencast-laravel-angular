(function() {

	'use strict';

	var app = angular.module('users', []);


	app.directive('userFilter', function() {
	
		return {

			restrict: 'E',
			templateUrl: '/angular/partials/users.filter.html',
			controller: function() {
		
				this.title = 'Usuários';	
			},
			controllerAs: 'filterCtrl'
		};
		
	})
	
})();