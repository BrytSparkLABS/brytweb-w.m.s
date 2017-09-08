<?php

include '../../sql.php';


  $result = mysqli_query($con,"SELECT * FROM brytweb_wms_store");


  while($row = mysqli_fetch_array($result))

  {

$id = $row['id'];
  $itemPage = $row['itemPage'];
  $itemName = $row['item_name'];
  $itemCost = $row['item_cost'];
  $coverImg = $row['itemCoverImg'];
$itemDescription = $row['itemDescription'];
  }

 mysqli_close($con);

echo'
<input type="hidden" value="'.$id.'" name="id" id="id">
<input type="hidden" value="'.$itemPage.'" name="itempage" id="itempage">
<input type="text" value="'.$itemName.'" name="itemname" id="itemname">
<input type="text" value="'.$itemCost.'" name="itemcost" id="itemcost">
<input type="hidden" id="coverimg" name="coverimg" value="">
<div id="coverimger">

<img src="'.$coverImg.'" id="coverimgv" class="img img-thumbnail" style="width:30%">
</div>
<button onclick="insertPic()">Update cover pic</button>

<p><textarea name="itemdescription" id="itemdescription" cols="40" rows="10">
'.$itemDescription.'

</textarea></p>

';



 ?>
