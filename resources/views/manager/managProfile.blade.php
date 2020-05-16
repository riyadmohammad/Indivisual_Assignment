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
    <a href="{{route('manager_home')}}">back</a>
    
    <a href="{{route('add_counter')}}">add counter</a>
    <a href="{{route('view_counter')}}">View counter</a>
    <a href="{{route('logout')}}">Logout</a>

	<table border="1">
		<tr>
		
			<th>NAME</th>
            <th>Email</th>
			<th>Password</th>
			
		</tr>
        </table>

<form method="post" action="{{route('manag_profile_update',['id'=>$data->id])}}">
{{csrf_field()}}
	
<input type="text"  name="name" value="{{$data->name}}" >
<input type="text"  name="email" value="{{$data->email}}" >
<input type="password"  name="password" value="{{$data->password}}" ><br>
<button type="submit" >Update</button>
		

    </form>

</body>
</html>






