<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

	<h2>Doctors' patients</h2>
	<table border="1">
		<thead>
			<tr>
				<td>Doctor name</td>
				<td>Patients</td>
			</tr>
		</thead>
		<tbody>
			@foreach($doctors as $doctor)
				<tr>
					<td>{{ $doctor->name }}</td>
					<td>
					@foreach($doctor->patients as $patient)
						{{ $patient->firstname . ' ' . $patient->middlename . ' '. $patient->lastname }},
					@endforeach
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>


	<h2>Patient's doctors</h2>
	<table border="1">
		<thead>
			<tr>
				<td>Doctor name</td>
				<td>Patients</td>
			</tr>
		</thead>
		<tbody>
			@foreach($patients as $patient)
				<tr>
					<td>{{ $patient->firstname . ' ' . $patient->middlename . ' ' . $patient->lastname }}</td>
					<td>
					@foreach($patient->doctors as $doctor)
						{{ $doctor->name }},
					@endforeach
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>