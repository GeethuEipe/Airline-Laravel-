<html>
    <head>
        <style>
             table,td{
        padding: 20px;
        font-size: 20px;
        border: 1px solid red;
        border-collapse:collapse;
             }
            </style>
</head>

<body>

<form action="" method="get">
@csrf

<table>
<tr>
<td>FirstNmae</td>
<td>lasttNmae</td>
<td>Age</td>
<td>Address</td>
<td>phonenumber</td>
<td>Email</td>
<td>Adhar</td>


</tr>
@foreach($user as $user)
<tr>

<td>{{ $user->firstname}}</td>
<td>{{ $user->lastname}}</td>
<td>{{ $user->age}}</td>
<td>{{ $user->address}}</td>
<td>{{ $user->phoneno}}</td>
<td>{{ $user->email}}</td>
<td>{{ $user->adhar}}</td>

</tr>
@endforeach
</table>

</form>

</body>

</html>
