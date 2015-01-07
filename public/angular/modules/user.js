/**
* User module
*/
(function() {

	'use strict';

	var app = angular.module('user', ['angular.filter', 'ui.spa', 'service.spa']);

	app.controller('UserController', ['$scope', '$window', 'UserService', function($scope, $window, UserService) {

		$scope.users = [];

		$scope.user = {};

		$scope.$watch('filter_cities', function(value) {

			if(value !== undefined) $scope.fetchUsers();
		});

		$scope.$watch('filter_orderBy', function(value) {

			if(value !== undefined) $scope.fetchUsers();
		});

		$scope.clear = function() {

			$scope.filter_cities = undefined;
			$scope.filter_orderBy = undefined;
			$scope.fetchUsers();
		}

		$scope.new = function() {

			$scope.user = {
				// fullname: 'Ved',
				// username: 'vedovelli',
				// email: 'vedovelli@gmail.com',
				// city: 'Sao Paulo',
				// state: 'SP'
			};
		}

		$scope.edit = function(user) {

			$scope.user = user;
		}

		$scope.save = function(){

			UserService.save($scope.user).success(function(data) {

				if(data.success){

					var form = angular.element(userForm);
						form.find('input:password').val('');
						form.modal('hide');

					$scope.user = {};
					$scope.fetchUsers();

				}
			});
		}

		$scope.remove = function(user) {

			bootbox.confirm('Remover '+ user.fullname +'?', function(action) {

				if(action) {

					UserService.remove(user).success(function(data) {

						if(data.success){

							$scope.fetchUsers();
						}
					});
				}
			});
		}

		$scope.fetchUsers = function() {

			if($scope.filter_cities == '') {

				$scope.filter_cities = undefined;
			}

			if($scope.filter_orderBy == '') {

				$scope.filter_orderBy = undefined;
			}

			UserService.fetch({

				cities: $scope.filter_cities,
				orderBy: $scope.filter_orderBy,
				limit: 6,
				page: 1
			}).success(function(data) {

				$scope.users = data.users;
			});
		};

		$scope.fetchUsers();
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