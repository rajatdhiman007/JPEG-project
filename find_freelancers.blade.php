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
    .landscape {
      max-width:100%;
      max-height:100%;
      margin-left: 60px;

    }
    .center-cropped {
      width: 1200px;
      height: 400px;
      background-position: center center;
      background-repeat: no-repeat;
      opacity: 0.5;
      filter: alpha(opacity=50);
    }
    .opt{
      width: 1100px;
      height: 130px;
      margin-top: -7px;
      margin-left: 50px;
      padding-left: 40px;
      background-position: center center;
      background-repeat: no-repeat;
    }


  </style>
</head>
<body> 
  <div id="main_body">
    <hr style="margin-left: 100px;">
    <br>
    <div class="center-cropped" 
     style="background-image: url('freel.jpg');">
    </div>
    <div style="margin-top: -350px; padding-left: 200px;">
      <h2 style="font-size: 80px; color: white; ">Get your service today</h2>
      <form action="free_search" method="get">
        <input type="text" style="margin-left: -100px;" class="form-control input-lg" id="inputlg" name="search"  value="Search for your service">
        <br>
        <input type="hidden" name="username" value="{{$username}}">
        <input style="margin-left: 330px;" class="btn btn-primary" type="submit" value="Submit">
      </form>
    </div>
    <br><br><br><br><br><br>
    <div class="opt" style="background-color: #C0C0C0; " >
      <a href="#"><img style="border-right: solid white;" src="logo1.png"></a>
      <a href="#"><img style="border-right: solid white;" src="logo2.png"></a>
      <a href="#"><img style="border-right: solid white;" src="logo3.png"></a>
      <a href="#"><img style="border-right: solid white;" src="logo4.png"></a>
      <a href="#"><img style="border-right: solid white;" src="logo5.png"></a>
      <a href="#"><img style="border-right: solid white;" src="logo6.png"></a>
      <a href="#"><img style="border-right: solid white;" src="logo7.png"></a>
      <a href="#"><img style="border-right: solid white;" src="logo8.png"></a>
      <a href="#"><img style="border-right: solid white;" src="logo9.png"></a>
      <a href="#"><img src="logo10.png"></a>
      <h5>Wedding &nbsp &nbsp &nbspSchool &nbsp &nbsp &nbspFashion &nbsp &nbspBirthday &nbsp &nbsp &nbsp Food &nbsp &nbsp &nbsp &nbsp&nbsp Baby &nbsp &nbsp &nbsp &nbsp &nbspFloral &nbsp &nbsp &nbsp &nbsp Party &nbsp &nbsp &nbsp &nbsp Sports &nbsp &nbsp &nbsp &nbspFitness</h5>

    </div>
  </div>
</body>
</html>