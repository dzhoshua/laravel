<!DOCTYPE html>     
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>@section('title') Default title @show</title>
  <style>
    table{
      border: 2px solid black;
      border-collapse: collapse;
    }
    td, th{
      padding: 5px;
      border: 1px solid black;
    }
    th{
      background-color: #fcd4db;
    }
    li{
      display:inline;
      padding-right:20px;
    }
    a{
      text-decoration: none; 
    }
  </style> 
</head>
<body>
    
    @include('partials.header')

    @section('content')
    @show
    <hr>
    @include('partials.footer')

</body>
</html>