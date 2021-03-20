<html>
    <body>
<form action="bookform" method="get">

@foreach($seats as $seat)
<input type="text" name="flname" value="{{  $seat->airline  }}">
<input type="text" name="flno" value="{{  $seat->fl_number  }}">
<input type="text" name="btseats" value="{{  $seat->btseats  }}">
<input type="text" name="etseats" value="{{  $seat->etseats  }}">
<input type="text" name="ftseats" value="{{  $seat->ftseats  }}">
<input type="text" name="baseat" value="{{  $seat->baseat  }}">
<input type="text" name="easeat" value="{{  $seat->easeat  }}">
<input type="text" name="faseat" value="{{  $seat->faseat  }}">
<a href="bookformview">confirm your booking </a>
@endforeach
<form>
</body>
    <html>