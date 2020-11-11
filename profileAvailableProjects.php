
<?php
include('session.php');
?>

<!DOCTYPE html>

<html>
<head>
<title>AGILE METHODOLOGY</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="http://localhost/agile/profileStyle.css" rel="stylesheet" type="text/css" />
   
 
   <style>
    
       .table1{
           position: absolute;
           left: 200px;  
       }
        .table2{
           position: absolute;
           left: 800px;
            
            
       }
    </style>
    
    
</head>
<body>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SECOND HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->  
    
    <div id="top-text">
       
       <span style="font-size:30px;cursor:pointer;color:white;float:left;margin-left:10px" onclick="openNav()" >&#9776;</span>
       
    <img style="margin-left:55px" class="logo floatLeft" alt="Logo"  />
      
    <h1 class="textheader2 textheader2-1size" style="text-align:left">AGILE METHODOLOGY</h1>
    <h2 class="textheader2 textheader2-2size" style="text-align:left">Simplify your Development</h2>
    </div>
<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    
    
   
    <div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="http://localhost/agile/logout.php/">Log Out</a></b>

</div>
    
   
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Navigation bar~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--Navbar-->
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" onclick="available()">Available Projects</a>
  <a href="#" onclick="create()">Create Project</a>
</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
    function available(){
         window.location = "http://localhost/agile/profileAvailableProjects.php";
    }
    function create(){
         window.location = "http://localhost/agile/profileCreateProject.php?value=&value2=";
}
</script>
<!-- Top Navigation Menu -->

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
   
   

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~MAIN CONTENT~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> 
   <br><br>
   
   <div class="wrap-table100">
				<div class="table100">

<table align="center">
    <thead>
  <tr>
    <th style= text-align:center>Project Name</th>
    <th style= text-align:center>Role</th> 
    <th></th>
       <th></th>
    </tr>
        </thead>
       <tbody>
      <?php
    include ('dbConfig.php');
    
$sql = "SELECT * FROM members WHERE username='".$userid."'";
    
$result = $db->query($sql);


      if ($result->num_rows > 0) {
   

    // output data of each row
    while($row = $result->fetch_assoc()) {
         
   
      
      
       
         
        $newUser2="SELECT * FROM team WHERE team_id ='".$row["team_id"]."'";
       $result2 = $db->query($newUser2);
        $projectname='';

      if ($result2->num_rows > 0) {
   

    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
      $projectname=$row2['project_name'];  
    }}
    $update = 'updatefun()';
    $delete = 'delete1()';
        $bu = 'button';
        $st = 'width:100px;height:30px;font-size: 12px;';
        echo "
        <tr>

<td> ".$projectname."</td>
<td>". $row["role"]."</td>
<td> <button  id='" .$projectname."' class='".$bu."' style='".$st."' onclick='".$update."'>Project Details</button> </td>
<td> <button  id='" .$projectname.'/'. $row["role"]."' class='".$bu."' style='".$st."' onclick='".$delete."'>Open Project</button> </td>

</tr>";
                
    }
} else {
    echo "0 results";
}
?>
       </tbody>
  
</table>
          </div></div>  
  <script>
      function updatefun(){
    var e = window.event,
        btn = e.target || e.srcElement;
    var id = btn.id;
     window.location = "http://localhost/agile/projectdetail.php?value="+id;
}
       function delete1(){
       
             var e = window.event,
        btn = e.target || e.srcElement;
    var id = btn.id;
             var nameArr = id.split('/');
          
           if(nameArr[1] == 'Client'){
     window.location = "http://localhost/agile/projectprogress2.php?value="+nameArr[0];
           }
           else{
     window.location = "http://localhost/agile/projectprogress.php?value="+nameArr[0];
           }
    
}
      </script>    
 
    
  

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> 

    
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~FOOTER 2~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--
<div class="footer2">
   
<div class="row">

     <div class="column" style="width:6%">
    </div>
   
  <div class="column" style="width:44%">
  <h1 class="heading">ABOUT SCRS</h1><hr class="linehr">
  <p class="para">To promote research in soft computing and allied areas, Soft Computing Research Society (SCRS) is established in 2013 with its headquarter in Delhi, India.</p>
  </div>
   
 
   
  <div class="column" style="width:44%">
  <h1 class="heading">CONTACT US</h1><hr  class="linehr">
  <p class="para"><i class="fa fa-map-marker" style="color:white"></i>   &nbsp;&nbsp; Maharishi Markandeshwar University, Mullana, Ambala – 133202. </p>
      <p class="para"><i class="fa fa-envelope-o" style="color:white"></i> &nbsp;&nbsp; gargpuneet217@gmail.com</p>
<p class="para"> <i class="fa fa-phone" style="color:white"></i> &nbsp;&nbsp; +91-9996778910</p>
  </div>
   
 

    <div class="column" style="width:6%">
    </div>
</div>
</div>
-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> 
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~LAST FOOTER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="footer">
  <div class="w3-row-padding">
  <div class="w3-third" style="text-align:left; margin-left:20px">
    <p>All Rights Reserved - @2019 Agile Methodology</p>
    <p>Designed And Developed By - editerzframes.com</p>
  </div>

 
  <div class="w3-third" style="float:right">
    <p>Access Webmail | Last Updated on Jan. 2019 | Hit Counter: 279994</p>
  </div>
</div>
</div>
   
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</body>
</html>
