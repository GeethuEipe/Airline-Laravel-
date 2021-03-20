<html>
<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="admin/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="admin/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="admin/assets/css/material-dashboard" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="admin/assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}" media="all"/>
</head>
<body>
<table class="table">
<tr>
<td>Flight Name </td>
<td> Flight number</td>
<td> issued date</td>
<td> Action</td>
</tr>

@foreach($user as $data)
<tr>
<td> {{$data->fl_name}}</td>

<td> {{$data->fl_number}}</td>
    <td> {{$data->created_at}}</td>  
      

            <td><a href="storage/{{$data->file_path}}" download="{{$data->file_path}}">
            <button class=" btn btn-rounded bg-primary">Download<i class="fas fa-download"></i></button></a></td>
</tr>

@endforeach

</table>
</body>

</html>