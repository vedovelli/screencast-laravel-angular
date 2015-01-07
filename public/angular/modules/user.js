/**
* User module
*/
(function() {

	'use strict';

	var app = angular.module('user', ['angular.filter', 'ui.spa', 'service.spa']);

	app.controller('UserController', ['$scope', '$window', 'UserService', function($scope, $window, UserService) {

		$scope.users = [];

		$scope.user = {};

		$scope.new = function() {

			$scope.user = {};
		}

		$scope.edit = function(user) {

			$scope.user = user;
		}

		$scope.save = function(){

			UserService.save($scope.user).success(function(data) {

				if(data.success){

					angular.element(userForm).modal('hide');
					$scope.user = {};
					$scope.init();

				}
			});
		}

		$scope.remove = function(user) {

			bootbox.confirm('Remover '+ user.fullname +'?', function(action) {

				if(action) {

					UserService.remove(user).success(function(data) {

						if(data.success){

							$scope.init();
						}
					});
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

			templateUrl: '/angular/partials/users.card.html',

			link: function($scope, $element, $attrs) {

				/**
				* TODO: ao inves de manipular aqui, on mouse enter ou leave
				* setar propriedade no Ctrl e usar ng-show na view. (y)
				*/

				$element.on('mouseenter', '.spa-user-item', function(event) {

					$(event.currentTarget).find('.spa-user-actions').show();
				});

				$element.on('mouseleave', '.spa-user-item', function(event) {

					$(event.currentTarget).find('.spa-user-actions').hide();
				});
			}
		};
	});

	app.directive('userFilter', function() {

		return {

			restrict: 'E',

			templateUrl: '/angular/partials/users.filter.html'
		};
	});

	app.directive('userForm', function() {

		return {

			restrict: 'E',

			templateUrl: '/angular/partials/users.form.html'
		}
	});

})();