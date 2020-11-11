<?php
include ('dbConfig.php');
$members = $_GET['value1'];
$sql = "SELECT user_id FROM login";
 $emptyArray = array();

$result = $db->query($sql);
if($result){
      if ($result->num_rows > 0) {
    

    // output data of each row
    while($row = $result->fetch_assoc()) {
    array_push($emptyArray,$row["user_id"]);
} }}

  $projectname = $_GET['value2'];
 $newUser = "SELECT team_id FROM team where project_name ='".$projectname."'";
    $na='';   
$result1 = $db->query($newUser);

      if ($result1->num_rows > 0) {
    

    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
   $na = $row1["team_id"];
         echo '<script language="javascript">';
                        echo 'alert('.$na.')';  //not showing an alert box.
                        echo '</script>';
} }
                 
             $p=0;
            $k = $_GET['value1'];
            for($y = 0; $y < $k; $y++) {
                $name = $_POST['member'.$y.''];
                if (in_array($name, $emptyArray)){ 
                    $p++;
                } else { 
                    $p--;
                       
                } 
            }
          if ($p==$k){
              for($y = 0; $y < $k; $y++) {
                $name = $_POST['member'.$y.''];
                $role = $_POST['combo1'.$y.''];
                
                   $insert = mysqli_query($db,"INSERT INTO members(username, role, team_id) values('".$name."','".$role."','".$na."')");
                
            }
        header('Location: http://localhost/agile/profileAvailableProjects.php');
          }
else{
     
     header('Location: http://localhost/agile/profileCreateProject2.php?value='.$members.'&value2='.$projectname.'&value3=Please Enter Valid IDs');
}
                

        ?>