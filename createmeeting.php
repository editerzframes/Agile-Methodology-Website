<?php
include('session.php');
?>
<?php

$var1 = $_GET['value'];
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="http://localhost/agile/electivecommitteestyle.css" rel="stylesheet" type="text/css">
</head>
<body>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SECOND HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
 <div id="top-text">
       
      
       
    <img style="margin-left:55px" class="logo floatLeft" alt="Logo"  />
      
    <h1 class="textheader2 textheader2-1size" style="text-align:left">AGILE METHODOLOGY</h1>
    <h2 class="textheader2 textheader2-2size" style="text-align:left">Simplify your Development</h2>
    </div>

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> 
<div class="form-style-8">
  <h2>Enter the Following Details</h2>
  <form action="uploadmeeting.php" method="post" enctype="multipart/form-data">

       <input type="hidden" id="project_name" name="project_name" value="<?php echo $var1 ?>">
      
    <input type="text" id="title" name="title" placeholder="Meeting Title"  required/>
      <br>
       <input type="text" id="description" name="description" placeholder="Description"  required/>
      <br>
       <input type="text" id="zoom_id" name="zoom_id" placeholder="Zoom Id"  required/>
      <br> 
      <input type="text" id="zoom_pass" name="zoom_pass" placeholder="Zoom Pass"  required/>
      <br> 
       <input type="time" id="appt" name="appt">    
      <br><br>
    <input name="submit" type="submit" value="Add Meeting" />
<br><br>
     
  </form>
</div>
    


</body>
</html> 