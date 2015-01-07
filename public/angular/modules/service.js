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

		this.fetch = function() {

			return $http.get(apiUrl);
		}

		this.save = function(input, callback) {

			if(input.id > 0) {

				$http.put(apiUrl).success(function(data) {

					callback(data);
				});
			} else {

				$http.post(apiUrl).success(function(data) {

					callback(data);
				});
			}
		}

		this.remove = function(input) {

			return $http.delete(apiUrl+'/'+input.id);
		}
	}]);
})();