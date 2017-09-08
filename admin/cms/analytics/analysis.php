<?php

$view = $_POST['id'];
include 'anadata.php';

if($view === '1'){

$pageviews = $analytics['pageViewshomeland'];
$bouncerate = "";
$source = "";
$sesduration = "";
$nvsr = "";



$windows = $analytics['OSWindows'];
$android = $analytics['OSAndroid'];
}

elseif($view === '2'){

$pageviews = $analytics['pageViewsabout'];
$bouncerate = "";
$source = "";
$sesduration = "";
$nvsr = "";



$windows = $analytics['OSWindows'];
$android = $analytics['OSAndroid'];
}
elseif($view === '3'){

$pageviews = $analytics['pageViewscontact'];
$bouncerate = "";
$source = "";
$sesduration = "";
$nvsr = "";



$windows = $analytics['OSWindows'];
$android = $analytics['OSAndroid'];
}


echo'<p>Page views - '.$pageviews.'</p>';
echo'<p>Bounce Rate - '.$bouncerate.'</p>';
echo'<p>Source - '.$source.'</p>';
echo '<p>average session duration -'.$sesduration.'</p>';
echo '<p>new vs returning -'.$nvsr.'</p>';

echo '<p>Operating system</p>';

echo '<p>WINDOWS -'.$windows.'</p>';
echo '<p>ANDROID -'.$android.'</p>';


console.log($analytics['about'])
 ?>
