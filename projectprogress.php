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
<link href="http://localhost/agile/projectprogress.css" rel="stylesheet" type="text/css" />
  
        
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
    /**
     * Sum elements of an array up to the index provided.
     */
    function sumArrayUpTo(arrData, index) {
      var total = 0;
      for (var i = 0; i <= index; i++) {
        if (arrData.length > i) {
          total += arrData[i];
            }
      }
      return total;
    }

    function showBurnDown(elementId, burndownData, scopeChange = []) {

      var speedCanvas = document.getElementById(elementId);

      Chart.defaults.global.defaultFontFamily = "Arial";
      Chart.defaults.global.defaultFontSize = 14;

      const totalHoursInSprint = burndownData[0];
      const idealHoursPerDay = totalHoursInSprint / 9;
      i = 0;

      var speedData = {
        labels: [ "Day 1",	"Day 2",	"Day 3",	"Day 4",	"Day 5",	"Day 6",	"Day 7",	"Day 8",	"Day 9", "Day 10"],
        datasets: [
          {
            label: "Burndown",
            data: burndownData,
            fill: false,
            borderColor: "#EE6868",
            backgroundColor: "#EE6868",
            lineTension: 0,
          },
          {
            label: "Ideal",
            borderColor: "#6C8893",
            backgroundColor: "#6C8893",
            lineTension: 0,
            borderDash: [5, 5],
            fill: false,
            data: [
              Math.round(totalHoursInSprint - (idealHoursPerDay * i++) + sumArrayUpTo(scopeChange, 0)), // 1
              Math.round(totalHoursInSprint - (idealHoursPerDay * i++) + sumArrayUpTo(scopeChange, 1)), // 2
              Math.round(totalHoursInSprint - (idealHoursPerDay * i++) + sumArrayUpTo(scopeChange, 2)), // 3
              Math.round(totalHoursInSprint - (idealHoursPerDay * i++) + sumArrayUpTo(scopeChange, 3)), // 4
              Math.round(totalHoursInSprint - (idealHoursPerDay * i++) + sumArrayUpTo(scopeChange, 4)), // 5
              Math.round(totalHoursInSprint - (idealHoursPerDay * i++) + sumArrayUpTo(scopeChange, 5)), // 6
              Math.round(totalHoursInSprint - (idealHoursPerDay * i++) + sumArrayUpTo(scopeChange, 6)), // 7
              Math.round(totalHoursInSprint - (idealHoursPerDay * i++) + sumArrayUpTo(scopeChange, 7)), // 8
              Math.round(totalHoursInSprint - (idealHoursPerDay * i++) + sumArrayUpTo(scopeChange, 8)), // 9
              Math.round(totalHoursInSprint - (idealHoursPerDay * i++) + sumArrayUpTo(scopeChange, 9))  // 10
            ]
          },
        ]
      };

      var chartOptions = {
        legend: {
          display: true,
          position: 'top',
          labels: {
            boxWidth: 80,
            fontColor: 'black'
          }
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                    max: Math.round(burndownData[0] * 1.1)
                }
            }]
        }
      };

      var lineChart = new Chart(speedCanvas, {
        type: 'line',
        data: speedData,
        options: chartOptions
      });

    }
    </script>
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

    
   
    <div style="width:800px;margin-left:200px;"><canvas id="burndown43"></canvas></div>
    <script>
    showBurnDown (
      "burndown43",
      //   1    2    3    4    5    6    7    8    9   10
      [  200, 160, 160, 140,  90,  90,  80                  ], // burndown data
      [    0,   0,   0,   0,   0,  32,   0,   0,   0,   0   ]  // scope change
    );
    </script>

    <br><br><br><br>
    
    
    
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~MAIN CONTENT~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> 
  
    <div class="wrap-table100">
				<div class="table100">

<table align="center">
    <thead>
  <tr>
    <th>S. No.</th>
    <th>Sprint No.</th>
    <th>Status</th>
    
  </tr>
       </thead>
    <tbody>
     <?php
    include ('dbConfig.php');
    
$sql = "SELECT * FROM sprints where project_name ='".$error."'ORDER BY sprint_no ASC ";

   
$result = $db->query($sql);

      if ($result->num_rows > 0) {
    

    // output data of each row
    while($row = $result->fetch_assoc()) {
        
    
$sql1 = "SELECT * FROM product_backlog where sprint_no ='".$row["sprint_no"]."' AND project_name='".$error."'AND status = 'In Progress'";
$sql2 = "SELECT * FROM product_backlog where status = 'Not Started Yet' OR status = 'Completed' AND sprint_no ='".$row["sprint_no"]."' AND project_name='".$error."'";
$sql3 = "SELECT * FROM product_backlog where sprint_no ='".$row["sprint_no"]."' AND project_name='".$error."'AND status = 'Not Started Yet'";
$sql4 = "SELECT * FROM product_backlog where sprint_no ='".$row["sprint_no"]."' AND project_name='".$error."'AND status = 'Completed'";
    
         
$result1 = $db->query($sql1);
         
$result2 = $db->query($sql2);
         
$result3 = $db->query($sql3);
         
$result4 = $db->query($sql4);
        
        if ($result1->num_rows > 0) {
            
      $padding = 'background-color: #ddede9;';
         $color = 'color:orange';
        
        echo "
        <tr style='".$padding."'>
        <td>&emsp;&emsp;&emsp;".$row["sprint_no"]."</td>
    <td>Sprint ".$row["sprint_no"]."</td>
    <td style='".$color."'>In Progress</td>
    
    
  </tr>";
       
        }
       
        else if ($result3->num_rows > 0) {
     
           $padding = 'background-color: #ddede9;';
         $color = 'color:red';
        
        echo "
        <tr style='".$padding."'>
        <td>&emsp;&emsp;&emsp;".$row["sprint_no"]."</td>
    <td>Sprint ".$row["sprint_no"]."</td>
    <td style='".$color."'>Not Started Yet</td>
    
    
  </tr>";
       
   
        }
        else if ($result4->num_rows > 0) {
    
           $padding = 'background-color: #ddede9;';
         $color = 'color:#67eb60';
        
        echo "
        <tr style='".$padding."'>
        <td>&emsp;&emsp;&emsp;".$row["sprint_no"]."</td>
    <td>Sprint ".$row["sprint_no"]."</td>
    <td style='".$color."'>Completed</td>
    
  </tr>";
       
       
    
        }
         else if ($result2->num_rows > 0) {
      
          $padding = 'background-color: #ddede9;';
         $color = 'color:orange';
        
        echo "
        <tr style='".$padding."'>
        <td>&emsp;&emsp;&emsp;".$row["sprint_no"]."</td>
    <td>Sprint ".$row["sprint_no"]."</td>
    <td style='".$color."'>In Progress</td>
    
  </tr>";
       
       
  
        }else{
             
          $padding = 'background-color: #ddede9;';
         $color = 'color:red';
        
        echo "
        <tr style='".$padding."'>
        <td>&emsp;&emsp;&emsp;".$row["sprint_no"]."</td>
    <td>Sprint ".$row["sprint_no"]."</td>
    <td style='".$color."'>Not Started Yet</td>
    
  </tr>";
       
         }
          
    }
} else {
    echo "0 results";
}
?>
 </tbody>
</table>
                     </div>
			</div>
    <br><br><br><br><br><br><br><br><br>
   
    
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
