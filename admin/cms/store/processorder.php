<?php

$name = $_POST['name'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$street = $_POST['street'];

$suburb = $_POST['suburb'];

$postcode = $_POST['postcode'];

$order = $_POST['order'];


$order ='<p>'.$name.'</p><p>'.$email.'</p><p>'.$order.'</p>';



include '../../sql.php';


  $sql="INSERT INTO orders(weborder)

  VALUES
  ('$order')";


  if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }



  mysqli_close($con);










/*
 $filename = "cj.html";
  $file = fopen( $filename, "w" );
  if( $file == false ) {
    echo ( "Error in opening new file" );
     exit();
   }
   fwrite( $file, '<p>'.$name.'</p><p>'.$email.'</p><p>'.$order.'</p>' );
  fclose( $file );

*/

?>
