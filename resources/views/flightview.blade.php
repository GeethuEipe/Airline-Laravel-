<html>
<head>
<style>
table,tr,td
{
  border:2px solid;
  border-collapse:collapse;
}
</style>
</head>
<body>
<form action="" method="get">
<table>
<tr>
<td>Airline</td>
<td>flight Number</td>
<td>Departure</td>
<td>Departure Date</td>
<td>Departure Time</td>
<td>Destination</td>
<td>Destination Date</td>
<td>Destination Time</td>
</tr>
@foreach($users as $user)
<tr>
<td>{{$user->airline}}</td>
<td>{{$user->fl_number}}</td>
<td>{{$user->departure}}</td>
<td>{{$user->dep_date}}</td>
<td>{{$user->dep_time}}</td>
<td>{{$user->destination}}</td>
<td>{{$user->dest_date}}</td>
<td>{{$user->dest_time}}</td>
</tr>
@endforeach
</table>
</body>
</html>
