<?php
// Include the database configuration file
include ('dbConfig.php');
$error='';
//header('Location: http://localhost/agile/mainpage.php/');

$statusMsg = '';



if(isset($_POST["submit"])){
    // File upload path
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

   $sql = "SELECT * FROM login WHERE user_id='$id'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  $error =  "taken";	
  	}
    
    else {
    $username = stripslashes($username);
$username = mysqli_real_escape_string($db, $username);
 $password = stripslashes($password);
$password = mysqli_real_escape_string($db, $password);
  $email = stripslashes($email);
$email = mysqli_real_escape_string($db, $email);
    
    
   
            // Insert image file name into database
//            $insert = $db->query("INSERT into electivecommittee-members (role, firstName, lastName, affliation, biography, file_name, uploaded_on) VALUES ('".$role."', '".$firstName."', '".$lastName."', '".$affliation."', '".$biography."', '".$fileName."', NOW())");
            $insert = mysqli_query($db, "INSERT into login (user_id, username, password, email) VALUES ('".$id."',  '".$username."', '".$password."', '".$email."')");
        header('Location: http://localhost/agile/mainpage.php/');
        
    }
        
}

echo $statusMsg;

?>