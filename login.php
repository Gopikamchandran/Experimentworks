
<?php
require_once('db.php');
$email=$_POST['email'];
$password=$_POST['password'];
$email= stripslashes($email);
$password= stripslashes($password);
$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);
//$password=md5($password);
$salt="zennode";
$password_encrypted=sha1($password.$salt);

$sql="SELECT * from register where email='$email' and password='$password_encrypted'";
$result=mysqli_query($con,$sql);
//$count= mysqli_num_rows($result);
if($result)
{
  //  echo"$password_encrypted";
echo "<h1><center> Login successful </center></h1>"; 
             header("Location: time%20.html");
}
else{
   // echo"$password_encrypted";
   echo '  <script>alert
           ("Login Failed Invalid Username or Password");window.location.assign("sampleref.php");</script>';
}
?> 