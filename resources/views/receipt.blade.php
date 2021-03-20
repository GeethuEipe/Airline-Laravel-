<!DOCTYPE html>
<html>
<head>
<title>flight book</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

 <style>
 
  .top1{
background-color:#5c00e6;

}
body{
background-image: url("../img/im2a.png");
background-size: cover;
background-attachment: fixed;
}


</style>
</head>
<body>



<!--nav end-->
<section>

<div class="container ">
<div class="row">
<div class="container col-5 ms-5">
<h3 class="text-center text-primary mt-5">Receipt</h3>
<form  method="get" action="{{url('payment')}}" >

<fieldset>
@foreach($data as $row)
<input type="hidden" name="id" value="{{$row->id}}">
<label class=>Flight Name:</label>
<input type="text" name="flname" value="{{$row->airline}}">

<label class="">Departure:</label>
<input type="text" name="flno"  value="{{$row->fl_number}}">


<label class="form-label">Destination:</label>
<input type="text" name="depar" value="{{$row->departure}}" required class="form-control" readonly><br>

<label class="form-label">Date:</label>
<input type="text" name="depdate" value="{{$row->dep_date}}" required class="form-control" readonly><br>

<label class="form-label">Depart Time:</label>
<input type="text" name="deptime" value="{{$row->dep_time}}" required class="form-control" readonly><br>

<label class="form-label">Arrival Time:</label>
<input type="text" name="dest" value="{{$row->destination}}" required class="form-control" readonly><br>

<form action=""></form>
<label class="form-label">Name of Traveller:</label>
<input type="text" name="desdate" value="{{$row->dest_date}}" required class="form-control" readonly><br>

<label class="">Age:</label>
<input type="text" name="age" value="{{$row->age}}" required class="form-control" readonly><br>

<label class="form-label">name:</label>
<input type="text" name="fname" value="{{$row->fname}}" required class="form-control" readonly><br>
<input type="text" name="lname" value="{{$row->lname}}" required class="form-control" readonly><br>
<label class="form-label">Class:</label>
<input type="text" name="class" value="{{$row->class}}"><br>
<input type="text" name="phone" value="{{$row->phone}}" ><br>


<label class="form-label">Cost:</label>
<?php $cost=0;
$red=0;
if($row->class=='bussiness' && $row->age < 65)
{
    $cost=$row->bcost;
    $age=$row->bccost;  
    
}
elseif($row->class=='ecnomic')
{
    $cost=$row->ecost;
}


else{
    $cost=$row->fcost;
}
if($row->age>=65)
{
    $red=$cost-1000;
}
?>

<input type="text" name="class" value="<?php echo $cost; ?>" required class="form-control" readonly><br>
<input type="text" name="class" value="<?php echo $red; ?>" required class="form-control" readonly><br>


<div class="container text-center">

<input type="submit" name="update" value="Pay" class="btn btn-primary w-50 mt-3  mb-3">
</div>
@endforeach



</fieldset>


</form>

</div>

<div class="col-7">
</div>

</div class="">
</div>
</section >

</body>
</html>