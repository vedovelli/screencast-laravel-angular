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

<!--Pagination-->
	<nav class="text-center">
		<p>Mostrando {{users.length}} de {{pagination.total}} usuários</p>
		<ul class="pagination">
			<li>
				<a href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
				</a>
			</li>
			<li><a href="#">1</a></li>
			<li class="active"><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li><a href="#">7</a></li>
			<li><a href="#">8</a></li>
			<li><a href="#">9</a></li>
			<li><a href="#">10</a></li>
			<li><a href="#">11</a></li>
			<li>
				<a href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			</a>
			</li>
		</ul>
	</nav>
<!--/Pagination-->
</div>