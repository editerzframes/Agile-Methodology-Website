<?php
// Include the database configuration file
include ('dbConfig.php');
$project_name = $_POST['project_name'];

header('Location: http://localhost/agile/faq1.php?value='.$project_name.'');

$statusMsg = '';

// File upload path

$use_name = $_POST['question'];


if(isset($_POST["submit"])){
 
 $project_name = stripslashes($project_name);
$project_name = mysqli_real_escape_string($db, $project_name);
     $use_name = stripslashes($use_name);
$use_name = mysqli_real_escape_string($db, $use_name);
 
     $link = mysqli_connect("localhost", "root", "", "agile_team5");
    
            $insert = mysqli_query($link, "INSERT into faq (project_name, question, answer) VALUES ('".$project_name."',  '".$use_name."', '')");
            
            if($insert){
                $statusMsg = "The file has been uploaded successfully.";
                
            }else{
                 $statusMsg =  "Error: <br>" . mysqli_error($link);
            } 
        }


echo $statusMsg;

?>