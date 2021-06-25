	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>User List</title>
	</head>
	<body>
		  
    <a href='/home'> Back </a> |
    <a href='/logout'> logout</a> 
		<h3>User List</h3>
		<table border="1">
			<tr>
 				<td>Id</td>
				<td>Name</td>  
				<td>Email</td>

			</tr>
  <!-- php version <?php foreach ($userList as $user) { ?>
    
			<tr>
				<td>{{$user['id']}}  </td>
				<td> {{$user['name']}}  </td>
				<td> {{$user['email']}} </td>

			</tr>  -->
 <!--  <?php } ?>     -->
    <!-- blade version  -->
 @foreach ($userList as $user) 
    
			<tr>
				<td>{{$user['id']}}  </td> 
				<td> {{$user['name']}}  </td>
				<td> {{$user['email']}} </td>
				<td>
					<a href = "/user/details/{{$user['id']}}/{{$user['name']}}/{{$user['email']}}"> Details| </a>
					<a href = "/user/edit/{{$user['id']}}/{{$user['name']}}/{{$user['email']}} "> Edit| </a>
					<a href = "/user/delete/{{$user['id']}}/{{$user['name']}}/{{$user['email']}}" > Delete| </a>
</td>

   
			</tr>
   @endforeach 
		</table>
	
	</body>
	</html> 