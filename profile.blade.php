@extends('JPEG_project/bootstrapfileformain')
<html>
<head>
<title>JPEG</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ URL::asset('layout.css') }}" />
<style type="text/css">

ul li.abc {
    float:left;
}
ul li.break {
    clear: right;
}

</style>
</head>
<body > 

<div id="main_body">
  <hr style="margin-left: 100px;">
  <br>
  <div style="margin-left: 200px;">
  <img style="margin-left: 300px; max-width: 250px" src="images/{{$username}}.jpg" name="aboutme"  border="0" class="img-circle"></a>
  
          {{-- <input type="file" class="form-control"> --}}
          <form action="edit_profile" method='POST' enctype='multipart/form-data'>
          <p style="margin-left: 270px;">Upload a picture: <input type="file"  name="pic" accept="image/*"></p>
          <input type="hidden" name="username" value="{{$username}}">
        <p style="margin-left: 480px;margin-top: -50px;" ><input type="submit" onclick="myFunction()" class="btn btn-xs" value="Submit"></p>
        <script>
        function myFunction() 
        {
            alert("Your picture has been uploaded!");
            location.reload(true);
        }
      </script>
      </form>
      <h3 class="media-heading">{{ $fullname }} <small> JIIT</small></h3>
                <span><strong>Skills: </strong></span>
                <span class="label label-success" style="font-size: 20px;">{{$interest}}</span>
                <span class="label label-warning">wildlife</span>
                <span class="label label-info">portrait</span>
                <span class="label label-info">street photogrphy</span>
    </center>
    <hr>
    <center>
    <p class="text-left"><strong>Pictures by you: </strong><br>
    
      <ul>
      @foreach ($pictures as $file)
      <?php
$i = 0;
 ?>
<li class="abc"<?php if ( $i % 3 == 0 ) echo ' class="break"' ?>>
      <img style="padding-right: 50px; max-width: 250px" src="images/profile_pictures/{{$file-> filename}}">
      <?php $i++; // Increment counter
 ?>
      @endforeach
      </ul>
      <br>
      </center>          
    </div>
</div>
</body>
</html>