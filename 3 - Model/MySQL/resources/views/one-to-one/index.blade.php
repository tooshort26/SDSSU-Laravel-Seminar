<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<td>Name</td>
				<td>Relation</td>
			</tr>
		</thead>
		<tbody>
			@foreach($samples as $sample)
				<tr>
					<td>{{ $sample->name }}</td>
					<td>{{ $sample->relation->title }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>