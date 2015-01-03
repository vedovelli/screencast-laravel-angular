<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			{{link_to_route('home', 'Single Page Applications', null, ['class' => 'navbar-brand'])}}
		</div>
		@if( $currentUser )
		<ul class="nav navbar-nav navbar-right">
			<li>{{ link_to_route('logout', 'Logout')}}</li>
		</ul>
		@endif
	</div>
</nav>