<?php

include '../../sql.php';

$result = mysqli_query($con,"SELECT * FROM brytweb_wms_settings");

  while($row = mysqli_fetch_array($result)){

$webName = $row['site_name'];

}

  mysqli_close($con);


  include 'headersv.php';

$header = $_POST['headerno'];

$custom = $_POST['chead'];




if($header === '1'){



  $filename = "../../../header/head.html";
   $file = fopen( $filename, "w" );
   if( $file == false ) {
     echo ( "Error in opening new file" );
      exit();
    }
    fwrite( $file, $header1 );
   fclose( $file );

   $filename = "../../../header/head2.html";
    $file = fopen( $filename, "w" );
    if( $file == false ) {
      echo ( "Error in opening new file" );
       exit();
     }
     fwrite( $file, $header3 );
     fclose( $file );


}

else if ($header === '2') {
    $filename = "../../../header/head.html";
     $file = fopen( $filename, "w" );
     if( $file == false ) {
       echo ( "Error in opening new file" );
        exit();
      }
      fwrite( $file, $header2 );
      fclose( $file );

      $filename = "../../../header/head2.html";
       $file = fopen( $filename, "w" );
       if( $file == false ) {
         echo ( "Error in opening new file" );
          exit();
        }
        fwrite( $file, $header4 );
        fclose( $file );
}

else if ($header === '3') {

$filename = "../../../header/head.html";
     $file = fopen( $filename, "w" );
     if( $file == false ) {
       echo ( "Error in opening new file" );
        exit();
      }
      fwrite( $file, $custom );
      fclose( $file );

$filename = "../../../header/head2.html";
 $file = fopen( $filename, "w" );
 if( $file == false ) {
   echo ( "Error in opening new file" );
    exit();
  }
  fwrite( $file, $header3 );
  fclose( $file );

}


?>
