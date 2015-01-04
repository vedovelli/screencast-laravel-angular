<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SPA</title>
	<link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="/css/spa.css">
</head>
<body>

	@include('layouts.partials.navigation')

	<div class="container">
	@yield('content')
	</div>

	<script src="/js/min/spa-min.js"></script>

</body>
</html>