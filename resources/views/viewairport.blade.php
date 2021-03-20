<html>
<head>
<style>
</style>
</head>
<body>
<form action="" method="get">
@csrf
<table border="1">
<tr>
<td>AIRPORT NAME</td>
<td>CITY</td>
<td>STATE</td>
<td>ZIPCODE</td>
<td>TIMEZONE</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->airportname }}</td>
<td>{{ $user->city }}</td>
<td>{{ $user->state }}</td>
<td>{{ $user->zipcode }}</td>
<td>{{ $user->timezone }}</td>
</tr>
@endforeach
</form>
</table>
</body>
</html>
