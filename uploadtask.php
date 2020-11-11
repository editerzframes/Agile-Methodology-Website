<?php
// Include the database configuration file
include ('dbConfig.php');
$project_name = $_POST['project_name'];
$sprint_no = $_POST['sprint_no'];
$use_case = $_POST['use_case'];
$assigned = $_POST['assigned'];

header('Location: http://localhost/agile/sprintbacklog.php?value='.$project_name.'');

$statusMsg = '';



if(isset($_POST["submit"])){
 
 $project_name = stripslashes($project_name);
$project_name = mysqli_real_escape_string($db, $project_name);
     $use_case = stripslashes($use_case);
$use_case = mysqli_real_escape_string($db, $use_case);
     $assigned = stripslashes($assigned);
$assigned = mysqli_real_escape_string($db, $assigned);
    
 
    
    
            $insert = mysqli_query($db, "UPDATE product_backlog SET sprint_no = '".$sprint_no."', assigned_to = '".$assigned."' WHERE usecase_id='".$use_case."' AND project_name = '".$project_name."'");
            
          
        }



?>