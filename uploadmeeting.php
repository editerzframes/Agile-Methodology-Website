<?php
// Include the database configuration file
include ('dbConfig.php');
include('session.php');

$project_name = $_POST['project_name'];
$title = $_POST['title'];
$description = $_POST['description'];
$zoom_id = $_POST['zoom_id'];
$zoom_pass = $_POST['zoom_pass'];
$time = $_POST['appt'];

header('Location: http://localhost/agile/meetings.php?value='.$project_name.'');

$statusMsg = '';

// File upload path

if(isset($_POST["submit"])){
// 
// $project_name = stripslashes($project_name);
//$project_name = mysqli_real_escape_string($db, $project_name);
//     $title = stripslashes($title);
//$title = mysqli_real_escape_string($db, $title);
//     $description = stripslashes($description);
//$description = mysqli_real_escape_string($db, $description);
//     $zoom_id = stripslashes($zoom_id);
//$zoom_id = mysqli_real_escape_string($db, $zoom_id);
//    $zoom_pass = stripslashes($zoom_pass);
//$zoom_pass = mysqli_real_escape_string($db, $zoom_pass);
// 
     $link = mysqli_connect("localhost", "root", "", "agile_team5");
            
    
            $insert = mysqli_query($link, "INSERT into meetings (project_name, title, description, created_by, time, zoom_id, zoom_pass) VALUES ('".$project_name."',   '".$title."', '".$description."',  '".$userid."', '".$time."', '".$zoom_id."', '".$zoom_pass."')");
            
            if($insert){
                $statusMsg = "The file has been uploaded successfully.";
                
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }



?>