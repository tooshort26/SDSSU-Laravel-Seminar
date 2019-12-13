<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Hello Welcome to my page.</h1>
	@if(is_array($sample))
		<p>Sample variable is array</p>
		@foreach($sample as $data)
		{{ $data['firstname'] }}
		{{ $data['middlename'] }}
		{{ $data['lastname'] }}
		@endforeach
	@else
	 	<p>Sammple variable is not array</p>
	@endif
	
</body>
</html>