<?php
// Include the database configuration file
include ('dbConfig.php');
include('session.php');

$project_name = '';
$statusMsg = '';
// File upload path
$EventId = $_POST['var1'];
$targetDir = "upload/";

$sql = "SELECT * FROM sprints where sprint_id ='".$EventId."'";

$result = $connection->query($sql);

      if ($result->num_rows > 0) {
    

    // output data of each row
    while($row = $result->fetch_assoc()) {
        $project_name = $row['project_name'];
       $final = $row['project_name']."_Sprint".$row['sprint_no']."/";
      $targetDir =  $targetDir.$final;
      }
}

if(!is_dir($targetDir)){
    mkdir($targetDir, 0755);
}

$fileName = basename($_FILES["file"]["name"]);

$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

 $statusMsg = "1";

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    
  
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

            $link = mysqli_connect("localhost", "root", "", "agile_team5");
            
            $insert = mysqli_query($link, "INSERT into deliverables (file_name, sprint_id, submitted_by, uploaded_on) VALUES ( '".$targetFilePath."', '".$EventId."','".$userid."', NOW())");
        $phoneChunks = explode("_", $targetFilePath);
             $phoneChunks1 = explode("/", $phoneChunks[0]);
            header('Location: http://localhost/agile/deliverables.php?value='.$phoneChunks1[1].'');
            
            if($insert){
                $statusMsg = "The file ".$targetFilePath. " has been uploaded successfully.";
                
            }else{
                $statusMsg =  "Error: <br>" . mysqli_error($link);
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    
}else{
    $statusMsg = 'Please select a file to upload.';
}
$phoneChunks = explode("_", $targetFilePath);

echo $statusMsg;
 
?>