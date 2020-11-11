<?php
// Include the database configuration file
include ('dbConfig.php');
$project_name = $_POST['project_name'];
$sprint_no = $_POST['sprint_no'];
$use_case = $_POST['answer'];

header('Location: http://localhost/agile/faq.php?value='.$project_name.'');

$statusMsg = '';



if(isset($_POST["submit"])){
 
 $project_name = stripslashes($project_name);
$project_name = mysqli_real_escape_string($db, $project_name);
     $use_case = stripslashes($use_case);
$use_case = mysqli_real_escape_string($db, $use_case);
    
 
    
            $insert = mysqli_query($db, "UPDATE faq SET answer = '".$use_case."' WHERE faq_id ='".$sprint_no."' AND project_name = '".$project_name."'");
            
          
        }



?>