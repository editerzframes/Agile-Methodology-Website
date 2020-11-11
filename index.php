<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header('Location: http://localhost/agile/profileAvailableProjects.php/');
}
?>
<!DOCTYPE html>
<html>
<head>

    
<title>Login Form in PHP with Session</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href="http://localhost/agile/indexstyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
   

            <div id="top-text">
       
       <span style="font-size:30px;cursor:pointer;color:white;float:left;margin-left:10px" onclick="openNav()" >&#9776;</span>
       
    <img style="margin-left:55px" class="logo floatLeft" alt="Logo"  />
      
    <h1 class="textheader2 textheader2-1size" style="text-align:left">AGILE METHODOLOGY</h1>
         
    <h2 class="textheader2 textheader2-2size" style="text-align:left">Simplify your Development</h2>
    </div>

            

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            
    
<div class="form-style-8">
  <h2>Login to your account</h2>
  <form action="" method="post">
    <input type="text" id="name" name="username" placeholder="User ID" />
    <input type="password" id="password" name="password" placeholder="Password" />
    <input name="submit" type="submit" value="Login" />
      
    <p style="font-family:verdana;">New User! <a href="http://localhost/agile/registerPage.php">Register Here </a></p>
    
<span><?php echo $error; ?></span>
  </form>
</div>
    



</body>
</html>