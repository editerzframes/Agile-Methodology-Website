<?php
include('session.php');
?>
<?php
$error = $_GET['value'];
?>
<!DOCTYPE html>
<html>
<head>
<title>AGILE METHODOLOGY</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="http://localhost/agile/addproductbacklog.css" rel="stylesheet" type="text/css" />
	<link href="http://localhost/agile/css/buttoncss.css" rel="stylesheet" type="text/css" />
 

        
  
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
   
   
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Navigation bar~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--Navbar-->
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <a href="http://localhost/agile/projectprogress.php?value=<?php echo $error ?>">Project Progress</a>
  <a href="http://localhost/agile/projectdetail2.php?value=<?php echo $error ?>">Project Detail</a>
 <a href="http://localhost/agile/addproductbacklog.php?value=<?php echo $error ?>">Product Backlog</a>
       <a href="http://localhost/agile/sprintbacklog.php?value=<?php echo $error ?>">Sprint Backlog</a>
        <a href="http://localhost/agile/deliverables.php?value=<?php echo $error ?>">Deliverables</a>
      <a href="http://localhost/agile/meetings.php?value=<?php echo $error ?>">Meetings</a>
      <a href="http://localhost/agile/faq.php?value=<?php echo $error ?>">FAQ</a>
       <a href="http://localhost/agile/logout.php">Logout</a>
</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<!-- Top Navigation Menu -->
<br><br>
<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 	<a onclick="openForm()" class="button" style="float:right;width:150px;margin-right:20px">Add</a>
<!--    <button class="header2button header2button-login" onclick="openForm()">Add</button>       -->
    
    <br><br><br><br>
      <div class="wrap-table100">
				<div class="table100">

<table align="center">
        <h1>Product Backlog</h1>
    <thead>
  <tr>
    <th>Use Case</th>
    <th>Description</th>
    <th>Estimated Time</th>
    <th></th>
  </tr>
    </thead>
    <tbody>
   <?php
    include ('dbConfig.php');
    
$sql = "SELECT * FROM product_backlog where project_name ='".$error."'";
       
  
       
       
$result = $db->query($sql);

      if ($result->num_rows > 0) {
    

    // output data of each row
    while($row = $result->fetch_assoc()) {
         
        $padding = 'padding:15px;';
           $delete ='myown()';
        
        
        echo "
        <tr>

<td style='".$padding."'> ".$row["name"]."</td>
<td style='".$padding."'>".$row["description"]."</td>
<td style='".$padding."'>".$row["estimated_time"]."</td>
 <td>   <button  id='" .$row["usecase_id"]. "' onclick='".$delete."'>Remove</button> </td>
</tr>";
                
    }
} else {
    echo "0 results";
}
?>
    </tbody>
  
</table>
          </div></div>
    <br><br><br><br><br><br><br><br><br>
   
    <script>
function openForm(){
        window.location = "http://localhost/agile/addproductbacklog2.php?value=<?php echo $error ?>";
    }
    </script>
    
    <script>
     function myown() {
  var txt;
      var e = window.event,
       btn = e.target || e.srcElement;
  
  if (confirm("Press a button!")) {
    okPressed(btn.id);
  } else {
//     cancel pressed
  }
}
function okPressed(clicked_id){
    
    window.location = "deletebacklog.php?value="+clicked_id+"&value3=<?php echo $error ?>";
    
   
}
    </script>
    
    
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~MAIN CONTENT~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> 

    <br><br><br><br>
    
    
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
  <p class="para"><i class="fa fa-map-marker"></i>   &nbsp;&nbsp; Maharishi Markandeshwar University, Mullana, Ambala – 133202. </p>
      <p class="para"><i class="fa fa-envelope-o"></i> &nbsp;&nbsp; gargpuneet217@gmail.com</p>
<p class="para"> <i class="fa fa-phone"></i> &nbsp;&nbsp; +91-9996778910</p>
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
