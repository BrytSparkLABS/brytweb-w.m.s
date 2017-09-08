<?php

include '../../sql.php';

$result = mysqli_query($con,"SELECT * FROM brytweb_wms_settings");

  while($row = mysqli_fetch_array($result)){

$webName = $row['site_name'];


$facebook_profile_url = $row['facebook_profile'];

$instagram_profile_url = $row['instagram_profile'];

$youtube_profile_url = $row['youtube_profile'];

$linkedin_profile_url = $row['linkedin_profile'];


$twitter_profile_url = $row['twitter_profile'];

$google_plus_profile_url = $row['google_plus_profile'];

$github_profile_url = $row['github_profile'];



}

  mysqli_close($con);


  include 'footersv.php';


// the number of the footer passed
$footer = $_POST['footerno'];

// assign variable to custom incase of custom footer
$custom = $_POST['cfoot'];




if($footer === '1'){



  $filename = "../../../footer/foot.html";
   $file = fopen( $filename, "w" );
   if( $file == false ) {
     echo ( "Error in opening new file" );
      exit();
    }
    fwrite( $file, $footer1 );
   fclose( $file );
}
if($header === '1'){
   $filename = "../../../footer/foot2.html";
    $file = fopen( $filename, "w+" );
    if( $file == false ) {
      echo ( "Error in opening new file" );
       exit();
     }
     fwrite( $file, $footer3 );
     fclose( $file );


}
else if ($footer === '2') {


    $filename = "../../../footer/foot.html";
     $file = fopen( $filename, "w+" );
     if( $file == false ) {
       echo ( "Error in opening new file" );
        exit();
      }
      fwrite( $file, $footer2 );
      fclose( $file );

}
else if ($footer === '2') {
      $filename = "../../../footer/foot2.html";
       $file = fopen( $filename, "w+" );
       if( $file == false ) {
         echo ( "Error in opening new file" );
          exit();
        }
        fwrite( $file, $footer4 );
        fclose( $file );





}

else if ($footer === '3') {

$filename = "../../../footer/foot.html";
     $file = fopen( $filename, "w+" );
     if( $file == false ) {
       echo ( "Error in opening new file" );
        exit();
      }
      fwrite( $file, $custom );
      fclose( $file );

}

$filename = "../../../footer/foot2.html";
 $file = fopen( $filename, "w+" );
 if( $file == false ) {
   echo ( "Error in opening new file" );
    exit();
  }
  fwrite( $file, $footer3 );
  fclose( $file );




?>
