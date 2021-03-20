<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<table border = "1">
<tr>
    <td>id</td>
    <td>FLIGHT NAME</td>
    <td>FLIGHT NO</td>
    <td>NOTIFICATION</td>
    <td>CURRENT DATE</td>
    </tr>
@foreach($data as $user)
<tr>
    <td>{{$user['id']}}</td>
    <td>{{$user['airline']}}</td>
    <td>{{$user['fl_number']}}</td>
    <td>{{$user['notification']}}</td>
    <td>{{$user['current_date']}}</td>
    
    </tr>
@endforeach
</table>
</body>
</html>