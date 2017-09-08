<?php

include '../../sql.php';



$result = mysqli_query($con,"SELECT * FROM brytweb_wms_blog");

while($row = mysqli_fetch_array($result)){
  echo '<div class="panel panel-primary" style="padding:25px;">
  <div class="row">
  <div class="col-md-12">
  <h3><a href="'.$row['page'].'" class="navigBloger">'.$row['title'].'</a> </h3>
  </div>
  </div>
  <div class="row">
  <div class="col-md-12">

  '.$row['article'].'</div>
  </div>
  </div>
  ';

}


 ?>
