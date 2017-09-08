<?php


   include '../../sql.php';



   $sql="INSERT INTO brytweb_wms__portfolio(title, view)

   VALUES
   ('$_POST[title]', '$_POST[view]')";


   if (!mysqli_query($con,$sql))

   {

   die('Error: ' . mysqli_error($con));

   }




   mysqli_close($con);





echo 'Done';




    ?>
