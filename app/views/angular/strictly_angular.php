<div ng-app="user">

<user-filter class="user-filter"></user-filter>


<!--User List-->
	<div class="spa-user-list" ng-controller="UserListController">
		<!-- http://plnkr.co/edit/7DHxoHNhmUepbyWQEdr5?p=preview -->
		<!-- <div class="row" ng-repeat="user in users track by $index" ng-if="$index%3==0">
			<div class="col-md-4"
				ng-repeat="i in [$index,$index+1,$index+2]"
				ng-if="users[i]!=null">
				<user-card ng-model="user"></user-card>
			</div>
		</div> -->
		<div class="row" ng-repeat="user_group in users | groupBy:3">
			<div class="col-md-4"
				ng-repeat="user in user_group">
				<user-card ng-model="user"></user-card>
			</div>
		</div>


		 <!-- <div class=row ng-repeat="letters in alphabet | groupBy:4">
    <div class="col-xs-3 letter-box" ng-repeat="letter in letters" >
      <div>Letter {{$index+1}} is: <b> {{letter}}</b></div>
    </div>
  </div> -->
	</div>
<!--/User List-->

<!--Pagination-->
	<nav class="text-center">
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