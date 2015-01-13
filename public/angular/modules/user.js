/**
* User module
*/
(function(angular, _) {

	'use strict';

	var app = angular.module('user', ['angular.filter', 'ui.spa', 'service.spa', 'ngAnimate']);

	/**
	* TODO remover tudo o que for desnecessario no controller
	*/

	app.controller('UserController',

		['$scope',
		 '$window',
		 'UserService',
		 'PaginationService',
		 function($scope, $window, UserService, PaginationService) {

		$scope.submitted = false;

	 	// O overlay pode ser escondido
	 	$scope.userReady = false;

		// Guarda a lista de usuários
		$scope.users = [];

		// Guarda um único usuário inclusão/edição
		$scope.user = {};

		// Guarda informações retornadas pela API e relacionadas à paginação
		$scope.pagination = {};

		// Paginação: inicia-se a página atual como 1
		$scope.currentPage = 1;

		// Paginação: quantidade de itens na lista
		$scope.itemsPerPage = 6;

		// Paginação: tamanho máximo de itens na barra de paginação
		$scope.paginationRange = 16;

		// Observa a propriedade email de user para consultar UserService e pedir o gravatar
		$scope.$watch('user.email', function(value)
		{

			/**
			* Antes da pesquisa deleta-se a propriedade no objeto user.
			* Isso faz com que a imagem padrão seja mostrada
			*/
			delete $scope.user.gravatar;

			// Expressão regular para validar formato do e-mail
			var objER = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;

			// input[type="email"] retorna undefined enquanto o e-mail não for válido
			if(value !== undefined)
			{

				// Testa o valor informado contra a expressão regular
				var valid = objER.test(value);

				// Caso válido, faz a consulta
				if(valid)
				{
					UserService.gravatar(value).success(function(data) {

						/**
						* API retorna um objeto contendo também a URL do gravatar
						* ou a URL para a imagem padrão, caso o gravatar não tenha sido encontrado.
						* Quando a propriedade user.gravatar é preenchida, a interface
						* se modifica de acordo, mostrando o gravatar retornado.
						*/
						$scope.user.gravatar = data.gravatar;
					});
				}
			}
		});

		// Observa a propriedade zip de user para consultar UserService e pedir Cidade/Estado
		$scope.$watch('user.zip', function(value) {

			/**
			* Ao iniciar a digitação, limpa as duas propriedades
			* que serão preenchidas pela consulta ao web service
			*/
			//
			$scope.user.city = '';
			$scope.user.state = '';

			// Verifica-se a quantidade de caracteres para atender a uma estrutura de XXXXX-XXX
			if(value != undefined && value.length === 9)
			{
				// Expressão regular para validar formato do cep
				var objER = /^([0-9]){5}([-])([0-9]){3}$/;

				// Testa o valor informado contra a expressão regular
				var valid = objER.test(value);

				// Caso válido, faz a consulta
				if(valid)
				{
					UserService.address(value).success(function(data) {

						if(!data.erro)
						{
							// Seta as propriedades city e state
							$scope.user.city = data.localidade;
							$scope.user.state = data.uf;
						}
					});
				}

			}

		});

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

		$scope.prevPage = function ()
		{
	        if ($scope.currentPage > 0)
	        {
	            $scope.currentPage--;
	            $scope.fetchUsers();
	        }
	    };

	    $scope.nextPage = function ()
	    {
	        if ($scope.currentPage < $scope.pagination.last_page)
	        {
	            $scope.currentPage++;
	            $scope.fetchUsers();
	        }
	    };

	    $scope.setPage = function ()
	    {
	        $scope.currentPage = this.n;
	        $scope.fetchUsers();
	    };

		$scope.clear = function()
		{
			$scope.filter_cities = undefined;
			$scope.filter_orderBy = undefined;
			$scope.fetchUsers();
		};

		$scope.new = function()
		{

			$scope.user = {};
		};

		$scope.edit = function(user)
		{
			$scope.user = user;
		};

		$scope.save = function(form)
		{

			if(form.$valid)
			{

				$scope.userReady = false;

				UserService.save($scope.user).success(function(data) {

					if(data.success){


						var form = angular.element(userForm);
								form.find('input:password').val('');
								form.modal('hide');

						$scope.user = {};
						$scope.fetchUsers();

					}
				});

				$scope.submitted = false;
			} else {

				$scope.submitted = true;
			}


		};

		$scope.remove = function(user)
		{

			$window.bootbox.confirm('Remover '+ user.fullname +'?', function(action)
			{

				if(action)
				{

					UserService.remove(user).success(function(data)
					{

						if(data.success)
						{

							$scope.fetchUsers();
						}
					});
				}
			});
		};

		$scope.fetchUsers = function()
		{

			if($scope.filter_cities == '')
			{

				$scope.filter_cities = undefined;
			}

			if($scope.filter_orderBy == '')
			{

				$scope.filter_orderBy = undefined;
			}

			UserService.fetch(
			{

				cities: $scope.filter_cities,
				orderBy: $scope.filter_orderBy,
				limit: $scope.itemsPerPage,
				page: $scope.currentPage
			}).success(function(data)
			{

				$scope.users = data.users;
				$scope.pagination = data.pagination;
				$scope.range = PaginationService.generatePagesArray($scope.currentPage, $scope.pagination.total, $scope.itemsPerPage, $scope.paginationRange);
				$scope.userReady = true;
			});
		};

		$scope.fetchUsers();
	}]);

	app.directive('userCard', function()
	{

		return {

			restrict: 'E',

			templateUrl: '/angular/partials/users.card.html',

			link: function(scope, element)
			{

				scope.showControls = false;

				scope.toggleControls = function(state) {

					scope.showControls = state;
				};
			}
		};
	});

	app.directive('userFilter', function()
	{

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