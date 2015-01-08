/**
* User module
*/
(function(angular, _) {

	'use strict';

	var app = angular.module('user', ['angular.filter', 'ui.spa', 'service.spa']);

	app.controller('UserController', ['$scope', '$window', 'UserService', function($scope, $window, UserService) {

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

			UserService.fetch({

				cities: $scope.filter_cities,
				orderBy: $scope.filter_orderBy,
				limit: $scope.itemsPerPage,
				page: $scope.currentPage
			}).success(function(data) {

				$scope.users = data.users;
				$scope.pagination = data.pagination;
				$scope.range = $scope.generatePagesArray($scope.currentPage, $scope.pagination.total, $scope.itemsPerPage, $scope.paginationRange);
				console.log($scope.range);
			});
		};

		/**
         * Generate an array of page numbers (or the '...' string) which is used in an ng-repeat to generate the
         * links used in pagination
		 *
         * Source: https://github.com/michaelbromley/angularUtils/blob/master/src/directives/pagination/dirPagination.js
         *
         * @param currentPage
         * @param rowsPerPage
         * @param paginationRange
         * @param collectionLength
         * @returns {Array}
         */
        $scope.generatePagesArray = function(currentPage, collectionLength, rowsPerPage, paginationRange) {
            var pages = [];
            var totalPages = Math.ceil(collectionLength / rowsPerPage);
            var halfWay = Math.ceil(paginationRange / 2);
            var position;

            if (currentPage <= halfWay) {
                position = 'start';
            } else if (totalPages - halfWay < currentPage) {
                position = 'end';
            } else {
                position = 'middle';
            }

            var ellipsesNeeded = paginationRange < totalPages;
            var i = 1;
            while (i <= totalPages && i <= paginationRange) {
                var pageNumber = $scope.calculatePageNumber(i, currentPage, paginationRange, totalPages);

                var openingEllipsesNeeded = (i === 2 && (position === 'middle' || position === 'end'));
                var closingEllipsesNeeded = (i === paginationRange - 1 && (position === 'middle' || position === 'start'));
                if (ellipsesNeeded && (openingEllipsesNeeded || closingEllipsesNeeded)) {
                    pages.push('...');
                } else {
                    pages.push(pageNumber);
                }
                i ++;
            }
            return pages;
        }

        /**
         * Given the position in the sequence of pagination links [i], figure out what page number corresponds to that position.
         *
         * Source: https://github.com/michaelbromley/angularUtils/blob/master/src/directives/pagination/dirPagination.js
         *
         * @param i
         * @param currentPage
         * @param paginationRange
         * @param totalPages
         * @returns {*}
         */
        $scope.calculatePageNumber = function(i, currentPage, paginationRange, totalPages) {
            var halfWay = Math.ceil(paginationRange/2);
            if (i === paginationRange) {
                return totalPages;
            } else if (i === 1) {
                return i;
            } else if (paginationRange < totalPages) {
                if (totalPages - halfWay < currentPage) {
                    return totalPages - paginationRange + i;
                } else if (halfWay < currentPage) {
                    return currentPage - halfWay + i;
                } else {
                    return i;
                }
            } else {
                return i;
            }
        }

		$scope.fetchUsers();
	}]);

	app.directive('userCard', function() {

		return {

			restrict: 'E',

			templateUrl: '/angular/partials/users.card.html',

			link: function($scope, $element) {

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
		};
	});

})(window.angular, window._);