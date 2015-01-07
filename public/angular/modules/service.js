/**
* All communication with the outer world
*
* Possible Improvements: centralized error handling
*/
(function() {

	'use strict';

	var app = angular.module('service.spa', []);

	app.service('UserService', ['$http', function($http) {

		var apiUrl = 'http://spa.app/api/user';

		this.fetch = function(list_state) {

			return $http.get(apiUrl+'?limit='+encodeURIComponent(list_state.limit)+'&page='+encodeURIComponent(list_state.page)+'&cities='+encodeURIComponent(list_state.cities)+'&orderBy='+encodeURIComponent(list_state.orderBy));
		}

		this.save = function(input) {

			if(input.id > 0) {

				return $http.put(apiUrl+'/'+input.id, input);
			} else {

				return $http.post(apiUrl, input);
			}
		}

		this.remove = function(input) {

			return $http.delete(apiUrl+'/'+input.id);
		}
	}]);
})();