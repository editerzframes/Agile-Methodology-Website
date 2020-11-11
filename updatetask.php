<?php
// Include the database configuration file
include ('dbConfig.php');
$project_name = $_POST['project_name'];
$status = $_POST['status'];
$use_case = $_POST['sprint_no'];
$assigned = $_POST['assigned'];

header('Location: http://localhost/agile/sprintbacklog.php?value='.$project_name.'');

$statusMsg = '';



if(isset($_POST["submit"])){
 
 $project_name = stripslashes($project_name);
$project_name = mysqli_real_escape_string($db, $project_name);
     $status = stripslashes($status);
$status = mysqli_real_escape_string($db, $status);
     $assigned = stripslashes($assigned);
$assigned = mysqli_real_escape_string($db, $assigned);
    
 
    
    
            $insert = mysqli_query($db, "UPDATE product_backlog SET status = '".$status."', assigned_to = '".$assigned."' WHERE usecase_id='".$use_case."' AND project_name = '".$project_name."'");
            
          
        }



?>