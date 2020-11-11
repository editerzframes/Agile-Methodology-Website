<?php
// Include the database configuration file
include ('dbConfig.php');
$project_name = $_GET['value'];
$usecase_id = $_GET['value3'];

header('Location: http://localhost/agile/sprintbacklog.php?value='.$project_name.'');

$statusMsg = '';


     $usecase_id = stripslashes($usecase_id);
$usecase_id = mysqli_real_escape_string($db, $usecase_id);
     

    
            $insert = mysqli_query($db, "UPDATE product_backlog SET sprint_no ='' WHERE usecase_id='".$usecase_id."'");
            
     

?>