<?php
// Include the database configuration file
include ('dbConfig.php');
$project_name = $_POST['project_name'];

header('Location: http://localhost/agile/addproductbacklog.php?value='.$project_name.'');

$statusMsg = '';

// File upload path

$use_name = $_POST['use_name'];
$description = $_POST['description'];
$date =$_POST['date'];


if(isset($_POST["submit"])){
 
 $project_name = stripslashes($project_name);
$project_name = mysqli_real_escape_string($db, $project_name);
     $use_name = stripslashes($use_name);
$use_name = mysqli_real_escape_string($db, $use_name);
     $description = stripslashes($description);
$description = mysqli_real_escape_string($db, $description);
     $date = stripslashes($date);
$date = mysqli_real_escape_string($db, $date);
 
    
    
            $insert = mysqli_query($db, "INSERT into product_backlog (name, description, estimated_time, project_name, sprint_no, status, assigned_to) VALUES ('".$use_name."',  '".$description."', '".$date."', '".$project_name."', '', 'Not Started', ' ')");
            
            if($insert){
                $statusMsg = "The file has been uploaded successfully.";
                
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }



?>