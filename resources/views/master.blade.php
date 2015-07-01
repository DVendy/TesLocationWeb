<!DOCTYPE html>
<html lang="en">
<head>
	@section('head')
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/style.css">
	@show
</head>
<body>		
<div class="container-fluid">
	@yield('content')
</div>

	@section('javascript')		
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	@show

</body>
</html>
