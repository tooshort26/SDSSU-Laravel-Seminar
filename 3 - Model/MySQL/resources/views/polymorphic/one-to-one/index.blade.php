<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Post with Polymorphic One to one Image</h2>
	@foreach($posts as $post)
		@if(!is_null($post->image))
			<p>{{ $post->title }}</p>
			<img src="{{ $post->image->url }}" alt="">
		@endif
	@endforeach
	<hr>
	<h2>Users</h2>
	@foreach($users as $user)
	<p>{{ $user->name }}</p>
	<img src="{{ $user->image->url }}" alt="">
	@endforeach
</body>
</html>