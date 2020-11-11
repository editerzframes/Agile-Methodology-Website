<?php
// Include the database configuration file
include ('dbConfig.php');
$project_name = $_POST['project_name'];
$sprint_no = $_POST['sprint_no'];
$use_case = $_POST['review'];

header('Location: http://localhost/agile/sprintbacklog.php?value='.$project_name.'');

$statusMsg = '';



if(isset($_POST["submit"])){
 
 $project_name = stripslashes($project_name);
$project_name = mysqli_real_escape_string($db, $project_name);
     $use_case = stripslashes($use_case);
$use_case = mysqli_real_escape_string($db, $use_case);
    
 
    
            $insert = mysqli_query($db, "UPDATE sprints SET review = '".$use_case."' WHERE sprint_no ='".$sprint_no."' AND project_name = '".$project_name."'");
            
          
        }



?>