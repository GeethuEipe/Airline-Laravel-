<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="{{asset('css/style.css')}}" media="all"/>
<style>
body{
    background-image:url({{asset('img/106.jpg')}});
    background-size: cover;
}

</style>
</head>
<body>
<h1 class="text-center text-white">FLIGHT LISTS</h1>
<table class="table table-striped table-dark table-hover">
  <thead>
    <tr>
    <th>ID</th>
    <th>FLIGHT NAME</th>
    <th>FLIGHT NO</th>
    <th>DEPARTURE</th>
    <th>DEPARTURE DATE</th>
    <th>DEPARTURE TIME</th>
    <th>DESTINATION</th>
    <th>DESTINATION DATE</th>
    <th>DESTINATION TIME</th>
    <th>BUSSINESS CLASS TOTAL SEATS</th>
    <th>FIRST CLASS TOTAL SEATS</th>
    <th>ECONOMIC CLASS TOTAL SEATS</th>
    <th>BUSSINESS CLASS AVAILABLE  SEATS</th>
    <th>FIRST CLASS AVAILABLE  SEATS</th>
    <th>ECONOMIC CLASS AVAILABLE  SEATS</th>
    <th>AMOUNT</th>
    <th>AVAILABLE  SEATS</th>
    <th>BUSINES CLASS COST</th>
    <th>FIRST CLASS COST</th>
    <th>ECONOMIC CLASS COST</th>
    <th>BUSINESS CLASS CONCESION COST</th>
    <th>FIRST CLASS CONCESION COST</th>
    <th>ECONOMIC CLASS CONCESION COST</th>
    <th>ACTION</th>
    <th>ACTION</th>
    <th>NOTIFICATION</th>

</tr>
@foreach($data as $user)
<tr>
    <td>{{$user['id']}}</td>
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
    <td>{{$user['cost']}}</td>
    <td>{{$user['seatsa']}}</td>
    <td>{{$user['bcost']}}</td>
    <td>{{$user['fcost']}}</td>
    <td>{{$user['ecost']}}</td>
    <td>{{$user['bccost']}}</td>
    <td>{{$user['fccost']}}</td>
    <td>{{$user['eccost']}}</td>
    <td><a href={{"update/".$user->id}}><i class="fas fa-user-edit"></i></a></td>
    <td><a href={{"delete/".$user->id}}>Delete</a></td>
    <td><a href={{"notiadd/".$user->id}}>Notification</a></td>

</tr>
@endforeach
</table>
<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">
</body>
</html>