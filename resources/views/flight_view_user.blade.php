<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<table border = "1">
<tr>
  
    <td>FLIGHT NAME</td>
    <td>FLIGHT NO</td>
    <td>DEPARTURE</td>
    <td>DEPARTURE DATE</td>
    <td>DEPARTURE TIME</td>
    <td>DESTINATION</td>
    <td>DESTINATION DATE</td>
    <td>DESTINATION TIME</td>
    <td>BUSSINESS CLASS TOTAL SEATS</td>
    <td>FIRST CLASS TOTAL SEATS</td>
    <td>ECONOMIC CLASS TOTAL SEATS</td>
    <td>BUSSINESS CLASS AVAILABLE  SEATS</td>
    <td>FIRST CLASS AVAILABLE  SEATS</td>
    <td>ECONOMIC CLASS AVAILABLE  SEATS</td>
  
    <td>AVAILABLE  SEATS</td>
    <!-- <td>BUSINES CLASS COST</td>
    <td>FIRST CLASS COST</td>
    <td>ECONOMIC CLASS COST</td>
    <td>BUSINESS CLASS CONCESION COST</td>
    <td>FIRST CLASS CONCESION COST</td>
    <td>ECONOMIC CLASS CONCESION COST</td> -->
    <td colspan="2">Action</td>
</tr>
@foreach($data as $user)
<tr>
   
    <td>{{$user['airline']}}</td>
    <td>{{$user['fl_number']}}</td>
    <td>{{$user['departure']}}</td>
    <td>{{$user['dep_date']}}</td>
    <td>{{$user['dep_time']}}</td>
    <td>{{$user['destination']}}</td>
    <td>{{$user['dest_date']}}</td>
    <td>{{$user['dest_time']}}</td>
    <td>{{$user['btseats']}}</td>
    <td>{{$user['ftseats']}}</td>
    <td>{{$user['etseats']}}</td>
    <td>{{$user['baseat']}}</td>
    <td>{{$user['faseat']}}</td>
    <td>{{$user['easeat']}}</td>
    <td>{{$user['seatsa']}}</td>
    <!-- <td>{{$user['bcost']}}</td>
    <td>{{$user['fcost']}}</td>
    <td>{{$user['ecost']}}</td>
    <td>{{$user['bccost']}}</td>
    <td>{{$user['fccost']}}</td>
    <td>{{$user['eccost']}}</td> -->
    <td><a href={{"bookformview/".$user->id}}>Book Now</a></td>
    
    

</tr>
@endforeach
</table>
</body>
</html>