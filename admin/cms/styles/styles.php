<?php

$view = $_POST['view'];


 $filename = "../../../brytweb/brytwebweb.css";
  $file = fopen( $filename, "w" );
  if( $file == false ) {
    echo ( "Error in opening new file" );
     exit();
   }
   fwrite( $file, $view );
  fclose( $file );


    ?>
