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
  <form action="uploadPhotoGallery.php" method="post" enctype="multipart/form-data">
    
    
        <input type="hidden" id="var1" name="var1" value="<?php echo $var1 ?>" />

       <input type="file" name="file">
    <input name="submit" type="submit" value="Upload" />
<br><br>
      <h5><b>Note:</b> &nbsp; Please choose the file you want to upload</h5>
  </form>
</div>
    



</body>
</html> 