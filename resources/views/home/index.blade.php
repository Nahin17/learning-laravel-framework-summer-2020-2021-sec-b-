 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
</head>
<body>
	<h1> Welcome Home, {{session('uname')}} :: {{$id}} </h1>
<!--	<?php echo $name; ?>   or aita same <?= $name ?> -->

	<a href= "/user/create"> Create New | </a>
	<a href="/user/list"> User List| </a>
	<a href= "/login" > Logout </a>

</body>
</html>     