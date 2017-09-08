<?php

$page = 'pageViews'.$_POST['page'];


$os = 'OS'.$_POST['os'];

include '../admin/cms/analytics/anadata.php';

echo $page;
echo $os;


$analytics[$page] = $analytics[$page] + 1;
$analytics[$os] = $analytics[$os] + 1;


$filename = "../admin/cms/analytics/anadata.php";
 $file = fopen( $filename, "w" );
 if( $file == false ) {
   echo ( "Error in opening new file" );
    exit();
  }
  fwrite( $file, '<?php
 $analytics["pageViewshomeland"] = '.$analytics["pageViewshomeland"].';
 $analytics["pageViewsabout"] = '.$analytics["pageViewsabout"].';
 $analytics["pageViewscontact"] = '.$analytics["pageViewscontact"].';
 $analytics["pageViewsblog"] = '.$analytics["pageViewsblog"].';
 $analytics["pageViewsstore"] = '.$analytics["pageViewsstore"].';
 $analytics["OSWindows"] = '.$analytics["OSWindows"].';
 $analytics["OSAndroid"] = '.$analytics["OSAndroid"].';
 ?>');
 fclose( $file );
 ?>
