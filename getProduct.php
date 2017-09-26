<?php



include 'admin/sql.php';



$result = mysqli_query($con,"SELECT * FROM brytweb_wms_store WHERE id = '$_REQUEST[id]'");

while($row = mysqli_fetch_array($result)){


$response['cost'] = $row['item_cost'];
$response['item'] = $row['item_name'];
}

$result1 = mysqli_query($con,"SELECT * FROM brytweb_wms_receipt ORDER BY id DESC LIMIT 1");

while($row = mysqli_fetch_array($result1)){


$response['invid'] = $row['id'] + 1;

}
print(json_encode($response));


?>
