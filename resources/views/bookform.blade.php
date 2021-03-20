<html>

<body>
<form action="{{url('booknow')}}" method="get">
<input type="hidden" name="id" value="{{$data->id}}"><br>
<input type="text" name="flname" value="{{$data->airline}}"><br>
<input type="text" name="flno" value="{{$data->fl_number}}"><br>
<input type="text" name="depar" value="{{$data->departure}}" ><br>
<input type="text" name="depdate"  value="{{$data->dep_date}}"><br>
<input type="text" name="deptime" value="{{$data->dep_time}}"><br>
<input type="text" name="dest" value="{{$data->destination}}"><br>
<input type="text" name="desdate" value="{{ $data->dest_date}}"><br>

<select name="class">
<option value="ecnomic">ecnomic
<option value="firstclass">firstclass
<option value="bussiness">bussiness</select>
<input type="text" name="fname" value=""><br>
<input type="text" name="lname" value=""><br>
<input type="text" name="age" value=""><br>

<input type="text" name="phone" value=""><br>
<input type="submit" name="submit" value="submit">

</form>

</body>
<html>