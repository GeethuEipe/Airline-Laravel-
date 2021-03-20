<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<table border = "1">
<tr>
  
    <td>Id</td>
    <td>CLASS</td>
    <td>FIRST NAME</td>
    <td>LAST NAME</td>
    <td>PHONE</td>
    <td>AGE</td>
    <td>AIRLINE</td>
    <td>FLIGHT NUMBER</td>
    <td>DEPARTURE</td>
    <td>DEPARTURE DATE</td>
    <td>DEPARTURE TIME</td>
    <td>DESTINATION </td>
    <td>DESTINATION DATE</td>
</tr>
@foreach($data as $user)
<tr>
   <td>{{$user['id']}}</td>
   <td>{{$user['class']}}</td>
    <td>{{$user['fname']}}</td>
    <td>{{$user['lname']}}</td>
    <td>{{$user['phone']}}</td>
    <td>{{$user['age']}}</td>
    <td>{{$user['airline']}}</td>
    <td>{{$user['fl_number']}}</td>
    <td>{{$user['departure']}}</td>
    <td>{{$user['dep_date']}}</td>
    <td>{{$user['dep_time']}}</td>
    <td>{{$user['destination']}}</td>
    <td>{{$user['dest_date']}}</td>


</tr>
@endforeach
</table>
</body>
</html>