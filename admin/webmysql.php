<?php
  include 'sql.php';

    $result = mysqli_query($con,"SELECT admin_hashcode FROM brytweb_wms_settings");


    while($row = mysqli_fetch_array($result))

    {
    $id = $row['id'];
    $hashero = $row['admin_hashcode'];
    }

    ?>
