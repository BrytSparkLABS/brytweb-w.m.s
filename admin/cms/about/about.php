<?php

$codeb = $_POST['Bcode'];

if($codeb === 'c'){

  $view = $_POST['coder'];


}
else {

$view = $_POST['view'];
}

 $filename = "../../../about.html";
  $file = fopen( $filename, "w" );
  if( $file == false ) {
    echo ( "Error in opening new file" );
     exit();
   }
   fwrite( $file, $view );
  fclose( $file );


    ?>
