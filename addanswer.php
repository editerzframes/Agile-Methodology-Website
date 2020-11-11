<?php
include('session.php');
?>
<?php
$error = $_GET['value'];
$no = $_GET['value3'];
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
       
       <span style="font-size:30px;cursor:pointer;color:white;float:left;margin-left:10px" onclick="openNav()" >&#9776;</span>
       
    <img style="margin-left:55px" class="logo floatLeft" alt="Logo"  />
      
    <h1 class="textheader2 textheader2-1size" style="text-align:left">AGILE METHODOLOGY</h1>
    <h2 class="textheader2 textheader2-2size" style="text-align:left">Simplify your Development</h2>
    </div>

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<button style="margin-left:30px; margin-top:30px; float:left" class="button" onClick="parent.location='http://localhost/agile/faq.php?value=<?php echo $error ?>'">Back ></button>

    <button style="margin-right:30px; margin-top:30px; float:right" class="button" onClick="parent.location='http://localhost/agile/logout.php'">Logout</button>
    
    
<div class="form-style-8">
  <h2>Enter the Following Details</h2>
  <form action="uploadanswer.php" method="post" enctype="multipart/form-data">

        <input type="hidden" id="project_name" name="project_name" value="<?php echo $error ?>">
      
      
      <input type="hidden" id="sprint_no" name="sprint_no" value="<?php echo $no ?>">
      
      
       <textarea placeholder="Answer" id="answer" name="answer" onkeyup="adjust_textarea(this)" required></textarea>

      
      <br><br>
    <input name="submit" type="submit" value="Add" />
<br><br>
     
  </form>
</div>
    



</body>
</html> 