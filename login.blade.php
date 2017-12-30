@extends('JPEG_project/bootstrapfile')

<html>
<head>
<meta charset="utf-8">
<title>Welcome to JPEG</title>
<style type="text/css">
  form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: thick;

border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #0079ce;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;
-webkit-appearance:none;
}

</style>
</head>
<body>
	<div id="login">
		<form action="login_control" method="post">
			<fieldset class="scheduler-border">
				<h1 ><i  style="color:#047171; font-size: 16px;"><strong>Login to enter the world of JPEG.</strong></i></h1>
				<p ><input style="color:#047171" type="text" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' " name="username"></p>
				<p><input style="color:#047171" type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' " name="password"></p>
				<p><a style="color:#047171" href="#">Forgot Password?</a></p>
				<p><input type="submit" class="btn btn-primary btn-md" value="Login"></p>
		</form>
			{{-- <p><span class="btn-round">or</span></p> --}}
			
			<p style="color: black">       Don't have an account?
			<a style="font-size: 18px; color: #047171;" href="signup"> Sign Up</a>
		</fieldset>
		</p>
	</div> <!-- end login -->
		{{-- <p class="jpeg-footer">© 2017 JPEG</p> --}}

</body>
</html>