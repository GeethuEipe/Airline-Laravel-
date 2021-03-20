<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking Form</title>
    <link rel="stylesheet" href="style.css">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}" media="all"/>
<style>

</style>
   
</head>
<body>
<section class="bi">
    <div class="container"><!--container-->
    <form method="get" action="notification" class="form-group">
    @csrf
            <h1 class="text-center">Notification</h1>
            <div id="form"><!--form-->
                <h3 class="text-white">Add Notification</h3>
             <div id="input"><!--input-->
                
             <body class="bg">


<center>

<fieldset class="mt-3">

<input type="text" name="fl_number">
<input type="text" name="flname">
<textarea placeholder="Notification" name="notification" class="form-control "></textarea><br><br>
<input type="date" name="currentdate" >
<a href="#" class="btn btn-secondary"> Back </a>
<input type="submit" value="Notify" class="btn btn-primary">

</fieldset>
</center>

</form>
    
    </div><!--container-->
    </section>
</body>
</html>
