
<?php
include('session.php');
include ('dbConfig.php');
?>
<?php
$members = $_GET['value'];
$projectName = $_GET['value2'];
$error=$_GET['value3'];
?>
<!DOCTYPE html>
<html>
<head>
<title>AGILE METHODOLOGY</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="http://localhost/agile/profileStyle.css" rel="stylesheet" type="text/css" />
   
</head>
    <style>
        .create{
            position: absolute;
            left: 300px;
        }
    </style>
<body>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SECOND HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
   <div id="top-text">
       
       <span style="font-size:30px;cursor:pointer;color:white;float:left;margin-left:10px" onclick="openNav()" >&#9776;</span>
       
    <img class="logo floatLeft" alt="Logo"  />
      
    <h1 class="textheader2 textheader2-1size" style="text-align:left">AGILE METHODOLOGY</h1>
        
       <b id="logout" style="margin-right:50px"><a href="http://localhost/agile/logout.php/">Log Out</a></b>
       
    <h2 class="textheader2 textheader2-2size" style="text-align:left">Simplify your Development</h2>
    </div>

    <script>
function openForm(){
        window.location = "http://localhost/agile/index.php";
    }
function openForm2(){
        window.location = "http://localhost/agile/registerPage.php";
    }
    </script>
<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
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
         window.location = "http://localhost/agile/profileCreateProject.php";
}
</script>
<!-- Top Navigation Menu -->

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
   
   

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~MAIN CONTENT~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> 
   <form action="entermembers.php?value1=<?php echo $members ?>&value2=<?php echo $projectName ?>" method="post">
    <div class="create">
<br><br>
        <span><?php echo $error; ?></span>
<!--  <input type="hidden" id="projectname" name="projectname" value="<?php echo $projectName ?>">-->
        
  <h3>Member </h3>
  
    <?php
for ($x = 0; $x < $members; $x++) {
       
   echo '<label for="member">Member ID: </label>
  <input type="input" name="member'.$x.'" id="member" value="">
<select for="member" id ="combo1'.$x.'" name = "combo1'.$x.'">
    <option value="default" selected="selected">Select Role --</option>
  <option value="Product owner">Product Owner</option>
  <option value="scrum master">Scrum Master</option>
  <option value="Developer">Developer</option>
  <option value="Tester">Tester</option>
    <option value="Client">Client</option>
</select><br><br>';
  
}
?>
    <br><br>

    <input type="submit" id="submit" value="Create project">
        
    </div>
    </form>
        <?php
           
           
        ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> 

    
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~FOOTER 2~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
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
  <p class="para"><i class="fa fa-map-marker"></i>   &nbsp;&nbsp; Maharishi Markandeshwar University, Mullana, Ambala – 133202. </p>
      <p class="para"><i class="fa fa-envelope-o"></i> &nbsp;&nbsp; gargpuneet217@gmail.com</p>
<p class="para"> <i class="fa fa-phone"></i> &nbsp;&nbsp; +91-9996778910</p>
  </div>
   
 

    <div class="column" style="width:6%">
    </div>
</div>
</div>


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
