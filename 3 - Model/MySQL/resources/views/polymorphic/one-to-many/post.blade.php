<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Post with Polymorphic One to Many Comment</h2>
	@foreach($posts as $post)
		@if(count($post->user_comments))
			<h3>Title : {{ $post->title }}</h3>
			<h4>Comments : </h4>
			@foreach($post->user_comments as $comment)
				<p>&nbsp;&nbsp;{{ $comment->body }}</p>
			@endforeach
			<hr>
		@endif
	@endforeach
</body>
</html>