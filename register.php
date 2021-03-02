<?php
    require_once('db.php');
    // When form submitted, insert values into the database. -->
    if (isset($_POST['register'])) {
      // it is used to connect with the table
       
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        $salt="zennode";
        $password_encrypted=sha1($password.$salt);

        $query    = "INSERT into register (email,password)
                     VALUES (  '$email','$password_encrypted')";
        $result   = mysqli_query($con, $query);
        if ($result) {
           // to display in the form of a message
           echo' <script>alert
            ("Successfully registerd");window.location.assign("sampleref.php");</script>';
            
        } else {
            echo'  <script>alert
            ("Registration Failed");window.location.assign("sampleref.php");</script>' ;
                
        }
    } 
?>
 