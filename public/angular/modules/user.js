/**
* User module
*/
(function(angular, _) {

	'use strict';

	var app = angular.module('user', ['angular.filter', 'ui.spa', 'service.spa']);

	app.controller('UserController', ['$scope', '$window', 'UserService', 'PaginationService', function($scope, $window, UserService, PaginationService) {

		$scope.ready = false;

		$scope.users = [];

		$scope.user = {};

		$scope.pagination = {};

		$scope.currentPage = 1;

		$scope.itemsPerPage = 6;

		$scope.paginationRange = 16;

		$scope.$watch('filter_cities', function(value) {

			if(value !== undefined) {

				$scope.currentPage = 1;
				$scope.fetchUsers();
			}
		});

		$scope.$watch('filter_orderBy', function(value) {

			if(value !== undefined) {

				$scope.currentPage = 1;
				$scope.fetchUsers();
			}
		});

		$scope.prevPage = function () {
	        if ($scope.currentPage > 0) {
	            $scope.currentPage--;
	            $scope.fetchUsers();
	        }
	    };

	    $scope.nextPage = function () {
	        if ($scope.currentPage < $scope.pagination.last_page) {
	            $scope.currentPage++;
	            $scope.fetchUsers();
	        }
	    };

	    $scope.setPage = function () {
	        $scope.currentPage = this.n;
	        $scope.fetchUsers();
	    };

		$scope.clear = function() {

			$scope.filter_cities = undefined;
			$scope.filter_orderBy = undefined;
			$scope.fetchUsers();
		};

		$scope.new = function() {

			$scope.user = {};
		};

		$scope.edit = function(user) {

			$scope.user = user;
		};

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
		};

		$scope.remove = function(user) {

			$window.bootbox.confirm('Remover '+ user.fullname +'?', function(action) {

				if(action) {

					UserService.remove(user).success(function(data) {

						if(data.success){

							$scope.fetchUsers();
						}
					});
				}
			});
		};

		$scope.fetchUsers = function() {

			if($scope.filter_cities == '') {

				$scope.filter_cities = undefined;
			}

			if($scope.filter_orderBy == '') {

				$scope.filter_orderBy = undefined;
			}

			$scope.ready = false;

			UserService.fetch({

				cities: $scope.filter_cities,
				orderBy: $scope.filter_orderBy,
				limit: $scope.itemsPerPage,
				page: $scope.currentPage
			}).success(function(data) {

				$scope.users = data.users;
				$scope.pagination = data.pagination;
				$scope.range = PaginationService.generatePagesArray($scope.currentPage, $scope.pagination.total, $scope.itemsPerPage, $scope.paginationRange);
				$scope.ready = true;
			});
		};

		$scope.fetchUsers();
	}]);

	app.directive('userCard', function() {

		return {

			restrict: 'E',

			templateUrl: '/angular/partials/users.card.html',

			link: function(scope, element) {

				/**
				* TODO: ao inves de manipular aqui, on mouse enter ou leave
				* setar propriedade no Ctrl e usar ng-show na view. (y)
				*/

				element.on('mouseenter', '.spa-user-item', function(event) {

					$(event.currentTarget).find('.spa-user-actions').show();
				});

				element.on('mouseleave', '.spa-user-item', function(event) {

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
		};
	});

})(window.angular, window._);