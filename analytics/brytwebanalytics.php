<?php

$page = $_POST['page'];
$language = $_POST['vlang'];
$vbrowser = $_POST['vbrowser'];
$os = $_POST['os'];
$date = Date('yyyy/mm/dd');
$route = $_POST['route'];
$timeonsite = $_POST['timeonsite'];
$ip_address = $_SERVER['REMOTE__ADDR'].$_SERVER['HTTP_HOST'];
$country = $_POST['country'];
$returnv = $_POST['returnv'];


$year = $_POST['year'];
$month = $_POST['month'];
$dayofweek = $_POST['dayofweek'];
$dayofweek = $_POST['dayofweek'];



include '../admin/sql.php';


$sql="INSERT INTO brytweb_wms_analytics(returnVISITOR, page, os, browser, thedate, year, month, day, dayofweek, route, language, timeonsite, ip_address, country)

VALUES
($returnv, '$page','$os', '$vbrowser', '$date', '$year', '$month','$day','$dayofweek', '$route', '$language','$timeonsite', '$ip_address', '$country')";



if (mysqli_query($con,$sql))

{

mysqli_close($con);

}
else {


die('Error: ' . mysqli_error($con));

}




//mysqli_close($con);







 ?>
