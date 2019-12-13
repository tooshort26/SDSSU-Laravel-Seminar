<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Post with Polymorphic One to Many Comments</h2>
	@foreach($videos as $video)
		@if(count($video->user_comments))
			<h3>Title : {{ $video->title }}</h3>
			<h4>Comments : </h4>
			@foreach($video->user_comments as $comment)
				<p>&nbsp;&nbsp;{{ $comment->body }}</p>
			@endforeach
			<hr>
		@endif
	@endforeach
</body>
</html>