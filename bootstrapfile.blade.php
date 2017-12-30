<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ URL::asset('layout.css') }}" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style type="text/css">
#login {
  float: right;
  position: absolute;
  margin-left: 455px;
  margin-top: 1240px;
}
#signup{
    float: right;
/*margin: 5px auto;*/
float: right;
  position: absolute;
  margin-left: 455px;
  margin-top: 1210px;
}

form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;

}
form fieldset a {
color: #5a5656;
font-size: 10px;
}
form fieldset a:hover { text-decoration: underline; }
.btn-round {
background-color: #5a5656;
border-radius: 50%;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
color: #f4f4f4;
display: block;
font-size: 12px;
height: 50px;
line-height: 50px;
margin: 30px 125px;
text-align:center;
text-transform: uppercase;
width: 50px;
}
/*body {background-color: white;}*/

.signup {
background-color: #0079ce;
border: none;
border-radius: 0px 3px 3px 0px;
-moz-border-radius: 0px 3px 3px 0px;
-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 100px;
}
.logo{
height: 100px;
width: 150px;
}
.slideshow{
width: 900px;
margin-left: 180px;


}
.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
             background-color: white;
}

.footer
{
  font-size: 17px;
  padding-top: 10px;
margin-top: 190px;

background-color: #353535;
}
.list-footer{
    display: inline-block;
    margin-right: 16px;
}
.jpeg-footer{
  float: right;
  font-size: 17px;
  color: #047171;
margin-top: -40px;
margin-left: 100px;
margin-right: 60px;  
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
    <div id="logo"><a href="login"><img class="logo" src="logo.png"></a>
      <h1><a href="login">JPEG</a></h1>
      <p>Jaypee Photo Enthusiasts Guild</p>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<div class="bgded" > 
  {{-- slideshow --}}
<div class="slideshow">
<div class="w3-content w3-section" >
  <img class="mySlides w3-animate-fading" src="a1.jpg" style="width:450%">
  {{-- <img class="mySlides w3-animate-fading" src="a2.jpg" style="width:450%"> --}}
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000);
}
</script>
</div>

{{-- slideshow end --}}

   <div class="wrapper row2">
    <div id="introblocks" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article class="one_third first"><span>A</span>
        <footer><a href="#"><i class="fa fa-angle-double-right"></i></a></footer>
        <h3 class="heading">About Us</h3>
        <p>Get to know about our photography world.</p>
      </article>
      <article class="one_third"><span>B</span>
        <footer><a href="#"><i class="fa fa-angle-double-right"></i></a></footer>
        <h3 class="heading">Contact Us</h3>
        <p>Get in touch with us.</p>
      </article>
      <article class="one_third"><span>C</span>
        <footer><a href="#"><i class="fa fa-angle-double-right"></i></a></footer>
        <h3 class="heading">Sign UP</h3>
        <p>Sign up to the world of JPEG</p>
      </article>
      <!-- ################################################################################################ -->
      <div class="clear"></div>
    </div>
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    
    <ul class="nospace group infolist areas">
      <li class="one_third first"><a href="#"><i class="fa fa-language"></i></a>
        <p class="heading"><a href="https://www.facebook.com/sharyan314/" target="_blank">Shashwat Shukla</a></p>
        <p>Photographer</p>
      </li>
      <li class="one_third first" ><a href="#"><i class="fa fa-leaf"></i></a>
        <p class="heading"><a href="https://www.facebook.com/Bodhisatwa-Roy-Photography-355733114565584/?fref=mentions" target="_blank">Bodhisatwa Roy</a></p>
        <p>Photographer</p>
      </li>

      <li class="one_third" style="margin-left: 700px; position: absolute;"><a href="#"><i class="fa fa-lastfm"></i></a>
        <p class="heading"><a href="https://www.facebook.com/Rajat-Pixography-599706370122016/?fref=mentions" target="_blank">Rajat Dhiman</a></p>
        <p>Photographer</p>
      </li>
      
      <li class="one_third" style="margin-left: 700px;margin-top: 135px; position: absolute;" target="_blank"><a href="#"><i class="fa fa-bolt"></i></a>
        <p class="heading"><a href="">Paritosh Dubey</a></p>
        <p>Photographer</p>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<div class="footer">
<span class="jpeg-footer">© 2017 JPEG</span>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->


</body>
</html>