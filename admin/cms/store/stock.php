<?php


include '../../sql.php';



$result = mysqli_query($con,"SELECT * FROM brytweb_wms_store");

while($row = mysqli_fetch_array($result)){
  echo '

  <div class="col-md-4">
  <div class="panel panel-primary" style="padding:25px;">
  <h3><a href="store/'.$row['itemPage'].'.html">'.$row['item_name'].' @ '.$row['item_cost'].'</a></h3>
  <img src="'.$row['itemCoverImg'].'" style="width:200px;"/>

  '.$row['itemDescription'].'</div>
  </div>

  ';

}









 ?>
