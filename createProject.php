<?php
// Include the database configuration file
//include ('dbConfig.php');
//header('Location: http://localhost/agile/profileCreateProject.php/');

$error=''; // Variable To Store Error Message
$description=$_GET['value1'];

$con=mysqli_connect("localhost","root","","agile_team5");

$projectName = $_GET['value'];
$members = $_GET['value2'];
$teamName = $_GET['value3'];

$check="SELECT * FROM projects WHERE project_name = '".$projectName."'";

$rs = mysqli_query($con,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data > 1) {
    echo '<script type="text/javascript">';
    echo ' alert("Project Name Already Exist")';
    echo '</script>';
   
    header('Location: http://localhost/agile/profileCreateProject.php?value=User Already in Exist&value2='.$description.'');
}

else
{
    $newUser="INSERT INTO projects(project_name, description,num_of_team_members) values('".$projectName."','".$description."','".$members."')";
    $newUser2="INSERT INTO team(name, project_name) values('".$teamName."','".$projectName."')";
   mysqli_query($con,$newUser2);
    if (mysqli_query($con,$newUser))
    {
        header('Location: http://localhost/agile/profileCreateProject2.php?value='.$members.'&value2='.$projectName.'&value3=');
        echo '<script type="text/javascript">';
        echo ' alert("You are now registered")';
        echo '</script>';
        

    }
    else
    {
       // header('Location: http://localhost/agile/profileCreateProject.php/');
        echo '<script type="text/javascript">';
        echo  'alert("Error adding user in database")';
        echo '</script>';
        //header('Location: http://localhost/agile/profileCreateProject.php/');
    }
}

?>