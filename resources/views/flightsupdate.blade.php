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
        <form class="form-group" action="/update_action" method="get"><!--form-->
        @csrf
            <h1 class="text-center">Flight Details</h1>
            <div id="form"><!--form-->
                <h3 class="text-white">Add Flight</h3>
             <div id="input"><!--input-->
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="text" id="input-group" placeholder="Flight Name" name="flname" 
                 pattern=".{3,}" required title="3 characters minimum" maxlength="25" value="{{$data->airline}}">
                <input type="text" id="input-group" placeholder="Flight No" name="flno" 
                pattern=".{3,}" required title="3 characters minimum"  maxlength="25" value="{{$data->fl_number}}">
                <span class="text-white ">Departr:</span>
                <select   id="input-group"  name="depar" required minlength="1"maxlength="3" value="{{$data->departure}}">
                    <option class="text-dark">TRIVANDRUM</option> 
                    <option class="text-dark">KOCHI</option> 
                    <option class="text-dark">KOZHIKODE</option> 
                    <option class="text-dark">KANNUR</option> 
                </select>
                <input type="date"  name="depdate" value="{{$data->dep_date}}">
                <input type="time" name="deptime" value="{{$data->dep_time}}">
                </br>
                <span class="text-white ">Destntn:</span>
                <select id="input-group" name="dest">
                    <option class="text-dark">TRIVANDRUM</option> 
                    <option class="text-dark">KOCHI</option> 
                    <option class="text-dark">KOZHIKODE</option> 
                    <option class="text-dark">KANNUR</option> 
                </select>
                <input type="date" name="desdate" value="{{$data->dest_date}}">
                <input type="time" name="destime" value="{{$data->dest_time}}">
                </br>
                <input type="text" id="input-group" placeholder="Business class total seats" name="btseat" value="{{$data->btseats}}" required>
                <input type="text"  id="input-group" placeholder="First class total seats" name="ftseat" value="{{$data->ftseats}}" required>
                </br>
                <input type="text" id="input-group" placeholder=" Economic class total seats" name="etseat" value="{{$data->etseats}}" required>
                <input type="text" id="input-group" placeholder="Business class available seats" name="baseat" value="{{$data->baseat}}" required>
                </br>
                <input type="text" id="input-group" placeholder="First class available seats" name="faseat" value="{{$data->faseat}}" required>
                <input type="text" id="input-group"placeholder="Economic class available seats" name="easeat" value="{{$data->easeat}}" required>
                </br>
                <input type="text"  id="input-group" name="cost" placeholder="Amount" value="{{$data->cost}}" required >
                <input type="text"id="input-group" placeholder="Available seats" name="seatsa" value="{{$data->seatsa}}" required>
                </br>
                <input type="text" id="input-group" placeholder="Business class cost" name="bcost" value="{{$data->bcost}}" required>
                <input type="text" id="input-group" placeholder="First class cost" name="fcost" value="{{$data->fcost}}" required>
                </br>
                <input type="text" id="input-group" placeholder="Economic class cost" name="ecost" value="{{$data->ecost}}" required>
                
                <input type="text" id="input-group" placeholder="Business class concession cost" name="bccost" value="{{$data->bccost}}" required>
                </br>
                <input type="text" id="input-group" placeholder="First class concession cost" name="fccost" value="{{$data->fccost}}" required>
                <input type="text" id="input-group" placeholder="Economic class concession cost" name="eccost" value="{{$data->eccost}}" required>
                

                </div><!--input6-->
                <button type="submit" class="btn btn-warning text-white">Submit Form</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div><!--form-->

        </form><!--form-->

    
    </div><!--container-->
    </section>
</body>
</html>






