@extends('JPEG_project/bootstrapfileformain')
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<form action="search_algo" method="post">
	<fieldset class="scheduler-border" style="padding-left: 50px;margin-left: 500px;margin-right: 300px;">
	<h1 ><i  style="color:#047171; font-size: 16px;"><strong>Search for the user:</strong></i></h1>
	<p ><input style="color:#047171" type="text" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' " name="search_username">
	<p><input type="submit" class="btn btn-primary btn-md" value="Search"></p>
</form>

</div>
@if(isset($pictures))
<div style="margin-left: 200px;position: absolute;margin-top: 700px;">
  <img style="margin-left: 300px; width: 20%;" src="images/{{$search_username}}.jpg" name="aboutme"  border="0" class="img-circle"></a>
  <h3 class="media-heading">{{ $fullname }} <small> JIIT</small></h3>
                <span><strong>Skills: </strong></span>
                <span class="label label-warning">wildlife</span>
                <span class="label label-info">portrait</span>
                <span class="label label-info">street photogrphy</span>
                <span class="label label-success">adobe photoshop</span>
    </center>
    <hr>
    <center>
    <p class="text-left"><strong>Pictures by {{$search_username}}: </strong><br>
    
      <ul>
      @foreach ($pictures as $file)
      <?php
$i = 0;
 ?>
<li class="abc"<?php if ( $i % 3 == 0 ) echo ' class="break"' ?>>
      <img style="padding-right: 50px; max-width: 250px" src="images/profile_pictures/{{$file-> filename}}"></li>
      <?php $i++; // Increment counter
 ?>
      @endforeach
      </ul>
      <br>
      </center>
  
</div>
@endif



</body>
</html>
