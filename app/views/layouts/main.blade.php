<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SPA</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/spa.css">
</head>
<body>

	@include('layouts.partials.navigation')

	<div class="container">
	@yield('content')
	</div>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
    <script src="/js/spa.js"></script>

</body>
</html>