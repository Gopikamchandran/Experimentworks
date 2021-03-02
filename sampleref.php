<!DOCTYPE html>
<html><center>
<title>Login</title>
<head>
<!-- these are links to nconnect with google fonts  -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Magra:wght@700&family=Open+Sans:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


 <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" onload="loaded=true;" > 
    </script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Lato&family=Source+Sans+Pro:wght@490;600&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="onlinecss.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Khula:wght@800&display=swap" rel="stylesheet">
<meta charset = "UTF-8" /><!-- provided to convert your typed characters into machine readable form -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="sample.js"></script><!-- link to connect with script page -->
</head>
<body>

<div class="container " id="container">
	<!-- first container class for outsife form -->
	<div class="form-container sign-in-container"><!-- child container class in which we create forms -->
		<form action="login.php" name="login-form" id="login-form" method="post"><!-- first form for login page -->
			<br></br><h1>Login</h1> 
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook aria-hidden"></i></a>
				<a href="#" class="social"><i class="fa fa-twitter aria-hidden"></i></a>
			</div>
			<center><span>or use your account</span></center>
			<input type="email" placeholder="Email" name="email" id="email" required/>
			<input type="password" placeholder="Password" name="password" id="password" required/>
			<center><!-- <p>New User?<a href="#" onclick="document.getElementById('login-form').style.display = 'none'; "><r class="underline">Register</r></a></p> --><!-- provided inline js code for dynamic paging -->
				<p>New User?<a href="#"  id="reg" class="underline">Register</a></p>
			</center>
			<button name="login" id="login">Log in</button>
		</form>
	
<!--  <div class="overlay-container">
		<div class="overlay">
				
			
		</div>
	</div>
</div>  -->
	<form action="register.php" name="register-form" id="register-form" method="post"><!-- second form for register page -->
	
			<br></br><h1>Register</h1> 
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook aria-hidden='true'"></i></a>
				<a href="#" class="social"><i class="fa fa-twitter aria-hidden='true'"></i></a>
			
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email" id="email" required >
			
			<input type="password" name="password" id="rpassword" placeholder="Password" onKeyUp="checkStrength();return false;" minlength="6" required /><!-- password validation with onkeyup function -->
			<div id="error-nwl">
				
			</div><!-- div for providing message about password validity -->

			<p>Already have a n account?<a href="#" class="underline" id="log">Login</u></a></p>
			<button name="register" id="register">Register</button>
	</form>


</div>
	
<div class="overlay-container">
		<div class="overlay">
				
			
		</div>
</div>
</div>




</body>
</html>
