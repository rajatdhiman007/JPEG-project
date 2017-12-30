<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">   
  
  <link rel="stylesheet" href="{{ URL::asset('layout.css') }}" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	#main_body{
    
		padding-bottom: 80px;
    margin-top: 450px;
    position: absolute;
    }



._pieko ._pss4f {
    margin: 10px 50px -1px -5px;
}



._5lote {
    background-color: #fafafa;
    border-radius: 50%;
    box-sizing: border-box;
    display: block;
    overflow: hidden;
    position: relative;
}

._icyx7, ._ovg3g {
    left: 0;
    position: absolute;
    top: 0;
}

#react-root, article, div, footer, header, main, nav, section {
       position: relative;
       padding-bottom: auto;
}

._j5hrx{
	margin: 10px 50px -1px 350px;
	width: 600px;

}
.logo{
height: 100px;
width: 150px;
}





</style>
</head>

<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_left">
      <ul class="clear">
        <li class="active"><a href="login">Home</a></li>
        <li><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="mentos">Our Mentors</a></li>
            <li><a href="inspiration">Our inspiration</a></li>
          </ul>
        </li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<div class="wrapper row1 colouredborder">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo">
    <img class="logo" src="logo.png">
      <h1>JPEG</h1>
      <p>Jaypee Photo Enthusiasts Guild</p>
    </div>
    <!-- ################################################################################################ -->

    <img style="margin-left: 800px; max-width: 100px; margin-top: -200px;" src="images/{{$username}}.jpg" name="aboutme"  border="0" class="img-circle"></a>

    <div style="position: absolute; margin-left: 800px;margin-top: -100px;  ">
    <h4 >Hello, {{ $username }}</h4>
    <p >
        <button type="button" class="btn btn-primary btn-xs" ><a href="login"> Logout</button>
      </p>
      </div>
  </header>
</div>
{{-- ##################################################################################### --}}
  {{-- {{ Form::hidden('invisible', $username, array('id' => 'invisible_id')) }} --}}
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="main_screen_home?username={{ $username }}" >Home</a></li>
      <li><a href="profile?username={{ $username }}">Profile</a></li>
      <li><a href="locatestore?username={{ $username }}">Locate Store</a></li>
      <li><a href="search_route?username={{$username}}">Search</a></li>
      <li><a href="find_freelancer?username={{$username}}">Find Freelancers</a></li>
      {{-- <li><a href="#">Support</a></li> --}}
      <li><a href="#">Contact Us</a></li>
    </ul>
  </nav>
</body>
</html>