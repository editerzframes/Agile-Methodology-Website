<?php


$var1 = $_GET['value'];
$var2 = $_GET['value3'];
echo doSomething($var1, $var2);
function doSomething($var, $var2) {
          include ('dbConfig.php');

   
    echo '<script language="javascript">';
  echo 'alert(' .$var. ')';  //not showing an alert box.
      echo '</script>';

    
$sql1 = "DELETE FROM product_backlog WHERE usecase_id='".$var."' ";
$result1 = $db->query($sql1);
      if($result1){
//               echo "<script> location.href='http://localhost/agile/addproductbacklog.php?value='".$var2."''; </script>";
          header('Location: http://localhost/agile/addproductbacklog.php?value='.$var2.'');
            }
}

  ?>