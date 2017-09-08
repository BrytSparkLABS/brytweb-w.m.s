<?php

include '../../sql.php';


$sql = mysqli_query($con,"DELETE FROM brytweb_wms_store WHERE id = '$_POST[id]'");


 if (!mysqli_query($con,$sql))

 {

 die('Error: ' . mysqli_error($con));

 }




 mysqli_close($con);





 ?>
