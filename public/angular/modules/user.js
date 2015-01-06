/**
* User module
*/
(function() {

	'use strict';

	var app = angular.module('user', ['angular.filter', 'ui.spa', 'service.spa']);

	app.controller('UserListController', ['$scope', 'UserService', function($scope, UserService) {

		$scope.users = [];

		$scope.edit = function(user) {
		
			console.log(user);
		}

		$scope.remove = function(user) {
		
			UserService.remove(user).success(function(data) {
			
				if(data.success){

					$scope.init();
				}				
			});
		}
	
		$scope.init = function() {

			UserService.fetch().success(function(data) {
			
				$scope.users = data.users;
			});
		};

		$scope.init();
	}]);

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

			controller: function() {
			
				this.init = function($element, $attrs) {

					var button = $element.find('.spa-container-btn-novo').find('button');
				
					button.on('click', function() {
		
						bootbox.dialog({
							
							title: 'Criar novo usuário',
							message: 'placeholder para o form'
						});
					});
				}	
			},

			link: function($scope, $element, $attrs, filterCtrl) {
			
				filterCtrl.init($element, $attrs);
			}
		};
	});

})();