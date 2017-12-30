@extends('JPEG_project/bootstrapfile')

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign up to JPEG</title>
<style type="text/css">


.uppercase { text-transform: uppercase; }
form fieldset input[type="text"], input[type="password"],input[type="email"],input[type="tel"] {
border: thick black;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 10px;
height: 39px;
outline: none;
padding: 0px 10px;
width: 220px;
-webkit-appearance:none;
}
</style>
</head>

<body>

<div id="signup">
<form action="main_screen_control" method="post">
<fieldset class="scheduler-border">
<h1 ><i  style="color:#047171; font-size: 16px;"><strong>Sign up to the world of JPEG.</strong></i></h1>
<p style="color:#047171" >USER NAME    *<input type="text"  placeholder="Username"	 required="" name="username" ></p>
<p style="color:#047171" >PASSWORD     <input type="password" placeholder="password" name="password" ></p>
<p style="color:#047171" >FULL NAME    <input type="text" placeholder="full name"  name="fullname" ></p>
<p style="color:#047171" >CONTACT NO:  *<input type="tel" placeholder="contact"  name="contact"></p>
<p style="color:#047171" >EMAIL ID     *<input type="email" placeholder="email id" name="emailid" ></p>
<p style="color:#047171" >INTERESTED IN 
<select name="interest">
  <option value="baby">Baby</option>
  <option value="food">Food</option>
  <option value="birthday">Birthday</option>
  <option value="fashion">Fashion</option>
  <option value="school">School</option>
  <option value="wedding">Wedding</option>
  <option value="floral">Floral</option>
  <option value="party">Party</option>
  <option value="sports">Sports</option>
  <option value="fitness">Fitness</option>
</select></p>
<p><input type="submit" class="btn btn-primary btn-md" value="Sign Up"></p>
<p style="color: black">       Already have an account?
<a style="font-size: 18px; color: #047171;" href="login"> Login</a>
</fieldset>
</form>

</div>


<script type="text/javascript">
$(function() {
	$( "#Datepicker1" ).datepicker(); 
});
</script>
</body>
</html>
