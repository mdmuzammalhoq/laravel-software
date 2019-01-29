<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todo List</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
		@include('inc.navbar')
	<div class="container">
		@include('inc.messages')
		@yield('content');
	</div>
	<footer id="footer" class="text-center">
		<p>copyright @2017 todolist</p>
	</footer>
</body>
</html>