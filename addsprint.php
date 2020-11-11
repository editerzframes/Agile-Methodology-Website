<?php
// Include the database configuration file
include ('dbConfig.php');
$project_name = $_GET['value'];

header('Location: http://localhost/agile/sprintbacklog.php?value='.$project_name.'');

$statusMsg = '';

$sql = "SELECT * FROM sprints where project_name ='".$project_name."'";
       
$i = 0;

$result = $db->query($sql);

      if ($result->num_rows > 0) {
    

    // output data of each row
    while($row = $result->fetch_assoc()) {
         
     $i++;
    }
} 

$i++;

$insert = mysqli_query($db, "INSERT into sprints (project_name, sprint_no, review) VALUES ('".$project_name."',  '".$i."', ' ')");

?>