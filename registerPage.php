<?php
include('upload1.php'); // Includes Login Script

?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href="http://localhost/agile/indexstyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css'
    media="screen" />
    
</head>
<body>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SECOND HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
  <div id="top-text">
    <img class="logo floatLeft" alt="Logo"  />
    <h1 class="textheader2 textheader2-1size" style="text-align:left">AGILE METHODOLOGY</h1>
    <h2 class="textheader2 textheader2-2size" style="text-align:left">Simplify your Development</h2>
    </div>

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <script type="text/javascript" src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js'></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
    
<div class="form-style-8">
  <h2>Register Here</h2>
  <form action="" method="post">
      
       <input type="text" id="id" name="id" placeholder="User ID" required />
      
    <input type="text" id="name" name="username" placeholder="Username" required />
      
    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required />
      
    <input type="password" id="password" name="password"  class="form-control" placeholder="Enter Password" required />
      
      <input type="password" id="txtConfirmPassword" name="txtConfirmPassword" placeholder="Confirm Password" onblur="confirmPass()" required/>
      
    <input name="submit" type="submit" value="Register" class="pure-button pure-button-primary" />
    
<p style="font-family:verdana;">Already have an account? <a href="http://localhost/agile/index.php">Log in </a></p>
 
      <span><?php echo $error; ?></span>
      
  </form>

    
</div>
    
   <script type="text/javascript">
   var password = document.getElementById("password")
  , confirm_password = document.getElementById("txtConfirmPassword");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

</body>
</html>