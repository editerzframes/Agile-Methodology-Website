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
       
      
       
    <img style="margin-left:55px" class="logo floatLeft" alt="Logo"  />
      
    <h1 class="textheader2 textheader2-1size" style="text-align:left">AGILE METHODOLOGY</h1>
    <h2 class="textheader2 textheader2-2size" style="text-align:left">Simplify your Development</h2>
    </div>
<br>

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<button style="margin-left:30px; margin-top:30px; float:left" class="button" onClick="parent.location='http://localhost/agile/sprintbacklog.php?value=<?php echo $error ?>'">Back </button>

    <button style="margin-right:30px; margin-top:30px; float:right" class="button" onClick="parent.location='http://localhost/agile/logout.php'">Logout</button>
    
    
<div class="form-style-8">
  <h2>Enter the Following Details</h2>
  <form action="uploadtask.php" method="post" enctype="multipart/form-data">

       <input type="hidden" id="project_name" name="project_name" value="<?php echo $error ?>">
      
       <input type="hidden" id="sprint_no" name="sprint_no" value="<?php echo $no ?>">
      
 
      <select name="use_case">
       <?php
    include ('dbConfig.php');
    
$sql = "SELECT * FROM product_backlog where project_name ='".$error."' AND sprint_no=''";
       
   
$result = $db->query($sql);

      if ($result->num_rows > 0) {
    

    // output data of each row
    while($row = $result->fetch_assoc()) {
         
        echo "
         <option value=".$row["usecase_id"].">".$row["name"]."</option>";
                
    }
} 
?>
    
</select>
      
      
      <br>
       <input type="text" id="assigned" name="assigned" placeholder="Assigned To"  required/>
      
      <br><br>
    <input name="submit" type="submit" value="Add Use Case" />
<br><br>
     
  </form>
</div>
    



</body>
</html> 