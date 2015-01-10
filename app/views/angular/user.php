<div ng-app="user" ng-controller="UserController" class="spa-user-container" ng-show="users.length > 0">

	<user-form></user-form>

	<user-filter></user-filter>

	<div class="spa-user-list">
		<!-- http://plnkr.co/edit/7DHxoHNhmUepbyWQEdr5?p=preview -->
		<div class="row spa-card-row" ng-repeat="user_group in users | groupBy:3">
			<div class="col-md-4"
				ng-repeat="user in user_group">
				<user-card ng-model="user"></user-card>
			</div>
		</div>
	</div>

	<nav class="text-center">
		<pagination template="/angular/partials/app.pagination.html"></pagination>
	</nav>

</div>