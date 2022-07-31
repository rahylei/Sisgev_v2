@inject('users', 'App\Models\User')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TEST</title>
</head>
<body>

	

	@foreach($users->role('encargado')->get() as $user)
		<h1>{{$user->name}}</h1>
		<h3>{{$user->role}}</h3>
	@endforeach

	
</body>
</html>