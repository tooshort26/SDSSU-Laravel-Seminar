<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@foreach($posts as $post) 
	<h1>{{ $post->title }}</h1>
	<p>{{ $post->body }}</p>
	<p>Comment : </p>
		@foreach($post->comments as $comment)
			<p>&nbsp;<b>{{ $comment->message }}</b></p>
		@endforeach
		<hr>
	@endforeach
</body>
</html>