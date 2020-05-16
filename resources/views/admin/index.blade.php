<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>{{session('uname')}} </h2>

    <h1>All User </h1>&nbsp
    <a href="">back</a>
	<a href="{{route('admin_profile')}}"> profile</a>
    <a href="{{route('add_manager')}}">Add Manager</a>
    <a href="{{route('add_buses')}}">Add Buses</a>
    <a href="{{route('view_buses')}}">show Buses</a>
	<a href="{{route('add_counter')}}">add counter</a>
    <a href="{{route('view_counter')}}">View counter</a>
    <a href="{{route('logout')}}">Logout</a>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
            <th>Email</th>
            <th>Company</th>
			<th>Action</th>
			
		</tr>

		@foreach($all as $user)
		<tr>

			<td>{{$user['id']}}</td>
			<td>{{$user['name']}}</td>
			<td>{{$user['email']}}</td>
			<td>{{$user['company']}}</td>
			<td>
                <form action="{{route('destroy_manager', $user['id'])}}" method="get">
                    <button type="submit"> Delete</button>
                </form>

			</td>
			
		</tr>
		@endforeach
	</table>

</body>
</html>


