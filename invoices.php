<?php

include 'admin/sql.php';

/*
//this section updates the quantities of products
mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb1]' WHERE description = '$_POST[des1]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb2]' WHERE description = '$_POST[des2]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb3]' WHERE description = '$_POST[des3]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb4]' WHERE description = '$_POST[des4]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb5]' WHERE description = '$_POST[des5]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb6]' WHERE description = '$_POST[des6]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb7]' WHERE description = '$_POST[des7]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb8]' WHERE description = '$_POST[des8]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb9]' WHERE description = '$_POST[des9]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb10]' WHERE description = '$_POST[des10]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb11]' WHERE description = '$_POST[des11]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb12]' WHERE description = '$_POST[des12]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb13]' WHERE description = '$_POST[des13]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb14]' WHERE description = '$_POST[des14]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb15]' WHERE description = '$_POST[des15]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb16]' WHERE description = '$_POST[des16]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb17]' WHERE description = '$_POST[des17]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb18]' WHERE description = '$_POST[des18]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qlessb19]' WHERE description = '$_POST[des19]'");

mysqli_query($con,"UPDATE product_service SET quantity='$_POST[qless]' WHERE description = '$_POST[des20]'");

//end of updating quantities
*/

$sql="INSERT INTO brytweb_wms_receipt (invo)

VALUES
('$_REQUEST[invo]')";




   if($result = mysqli_query($con,$sql))


mysqli_close($con);

$response['invid'] = 'Complete';

print(json_encode($response));



?>
