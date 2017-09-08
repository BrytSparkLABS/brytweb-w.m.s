<?php



include '../../sql.php';

echo '<div class="row">
<h2>New Products</h2>';
$result = mysqli_query($con,"SELECT * FROM brytweb_wms_store ORDER BY id DESC LIMIT 3");

while($row = mysqli_fetch_array($result)){
  echo '

  <div class="col-md-12">
  <div class="panel panel-primary" style="padding:25px;">
  <h3><a href="store/'.$row['itemPage'].'.html">'.$row['item_name'].' @ '.$row['item_cost'].'</a></h3>
  <img src="'.$row['itemCoverImg'].'" style="width:200px;"/>

  '.$row['itemDescription'].'</div>
  </div>

  ';

}


echo '</div>

<span style="font-size:1.7em;"><a href="#" onclick="store()">See More Products</a></span>
'






 ?>
