<?php

include '../../sql.php';

$admin_email = array('email' =>$_POST['admin_email'].$_POST['admin_email']);


$admin_hashcode = password_hash($_POST['admin_hashcode'], PASSWORD_BCRYPT, $admin_email);

$sql="UPDATE brytweb_wms_settings SET site_name = '$_POST[webname]', site_street = '$_POST[webstreet]',
  site_town_city = '$_POST[webtwncity]', site_postal_code = '$_POST[webpostalcode]',
   admin_email = '$_POST[admin_email]', admin_hashcode ='$admin_hashcode',
   facebook_app_id ='$_POST[facebookapp]', facebook_profile ='$_POST[facebookp]', instagram_profile ='$_POST[instagramp]',
    youtube_profile ='$_POST[youtubep]', linkedin_profile ='$_POST[linkedinp]', twitter_profile ='$_POST[twitterp]',
    google_plus_profile ='$_POST[googleplusp]', github_profile='$_POST[githubp]' WHERE 1";


if (mysqli_query($con,$sql))

{

mysqli_close($con);

}
else {


die('Error: ' . mysqli_error($con));

}


echo 'done';


 ?>
