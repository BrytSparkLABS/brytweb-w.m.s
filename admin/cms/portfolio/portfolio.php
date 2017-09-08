<?php

include '../../sql.php';

  echo '<div class="row">';


$result = mysqli_query($con,"SELECT * FROM brytweb_wms__portfolio");

while($row = mysqli_fetch_array($result)){
  echo '

  <div class="col-md-4">
  <div class="panel panel-primary" style="padding:25px;">

  <h3>'.$row['title'].' </h3>


  '.$row['view'].'</div>
  </div>

  ';

}

echo '</div>'
 ?>
