<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment details</title>

            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!------custom style------->
            <link rel="stylesheet" type="text/css" href="{{asset('/css/index_style.css')}}" media="all"/>

</head> 
<body>
<div class="container text-cenetr py-5">
<form action="{{url('userhomepage')}}" method="get" class="form">

@csrf

     Flight id:<input type="text" value="{{$data->fl_number}}" name="flno"><br><br> 
    Flight Name:<input type="text" value="{{$data->airline}}" name="flname"><br><br>
    Departure:<input type="text" value="{{$data->dep_date}}" name="depdate"><br><br>
    Arrival:<input type="text" value="{{$data->deptime}}" name="deptime"><br><br>
    dest:<input type="text" value="{{$data->departure}}" name="depar"><br><br>
    Departure time:<input type="text" value="{{$data->destination}}" name="dest"><br><br>
    Arrival Time:<input type="text" value="{{$data->class}}" name="class"><br><br>


    Name of the passenger:<input type="text" value="{{$data->fname}}" name="fname"><br><br>
    Age:<input type="text" value="{{$data->age}}" name="age"><br><br>


    Seat:<input type="text" value="{{$data->seatsa}}" name="seatsa"><br><br>

   
        <br><br>
<input type="submit" name="submit" value="Go to your home page">

</form>
</div>
</body>
</html>
   