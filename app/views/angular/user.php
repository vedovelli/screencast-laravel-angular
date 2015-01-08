<div ng-app="user" ng-controller="UserController">

	<user-form></user-form>

	<user-filter></user-filter>


<!--User List-->
	<div class="spa-user-list">
		<!-- http://plnkr.co/edit/7DHxoHNhmUepbyWQEdr5?p=preview -->
		<div class="row" ng-repeat="user_group in users | groupBy:3">
			<div class="col-md-4"
				ng-repeat="user in user_group">
				<user-card ng-model="user"></user-card>
			</div>
		</div>
	</div>
<!--/User List-->

<!-- TODO criar diretiva para a paginacao -->

<!--Pagination-->
	<nav class="text-center">
		<p>Mostrando {{pagination.from}} a {{pagination.to}} de {{pagination.total}} usuários</p>
		<div>
			<ul class="pagination">
				<li ng-class="{disabled: currentPage == 1}">
					<a href ng-click="prevPage()">« Prev</a>
				</li>
				<li ng-repeat="n in range track by $index"
				ng-class="{active: n == currentPage, disabled: n == '...'}"
				ng-click="setPage()">
					<a href ng-bind="n"></a>
				</li>
				<li ng-class="{disabled: currentPage == pagination.last_page}">
					<a href ng-click="nextPage()">Next »</a>
				</li>
			</ul>
		</div>
	</nav>
<!--/Pagination-->
</div>