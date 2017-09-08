<?php

include '../../sql.php';




$result = mysqli_query($con,"SELECT * FROM brytweb_wms_settings");


while($row = mysqli_fetch_array($result))

{
$street = $row['site_street'];
$name = $row['site_name'];
$town_city = $row['site_town_city'];

$postal_code = $row['site_postal_code'];

$email = $row['admin_email'];

$pass = $row['admin_hashcode'];


$f_app_id = $row['facebook_app_id'];

$f_profile = $row['facebook_profile'];

$insta_profile = $row['instagram_profile'];
$y_profile = $row['youtube_profile'];
$lin_profile = $row['linkedin_profile'];

$t_profile = $row['twitter_profile'];
$gp_profile = $row['google_plus_profile'];
$gb_profile = $row['github_profile'];




}

 ?>




 <div class="container">
 <div class="row">
 <div class="col-md-7">

 <h3>Welcome to your brytweb w.m.s admin panel</h3>

 <form class="form-horizontal" method="post" action="admin/cms/settings/set.php">
 <div class="form-group">

 <p style="font-weight:800;font-style:underline;font-stretch:10px;font-size:1.3em;">Name: <?php echo $name; ?><input type="hidden" value="<?php echo $name; ?>" name="webname"></p>

  <p><label for="email">Email<input type="email" id="email" calss="inputsets" value="<?php echo $email; ?>" name="admin_email"></p>
  <p><label for="pass">Password<input type="password" id="pass" calss="inputsets" value="<?php echo $pass; ?>" name="admin_hashcode"></p>

 <h4>Postal Address</h4>
 <p><label for="street">Street:<br/><input type="text" id="street" value="<?php echo $street; ?>" name="webstreet"></p>
 <p><label for="town_city">Town/City:<br/><input type="text" id="town_city" value="<?php echo $town_city; ?>" name="webtwncity"></p>
 <p><label for="postal_code">Postal Code:<br/><input type="text" id="postal_code" value="<?php echo $postal_code; ?>" name="webpostalcode"></p>


   <h4>Social Media</h4>
<p><label for="facebookapp">facebook app id:<br/><input type="text" calss="inputsets" id="fbapp" placeholder="<?php echo $f_app_id; ?>" name="facebookapp"></p>


   <p><label for="fbp">facebook profile url:<br/><input type="text" id="fbp" value="<?php echo $f_profile; ?>" name="facebookp"></p>
   <p><label for="instap">instagram profile url:<br/><input type="text" id="instap" value="<?php echo $insta_profile; ?>" name="instagramp"></p>
   <p><label for="yp">youtube profile url:<br/><input type="text" id="yp" value="<?php echo $y_profile; ?>" name="youtubep"></p>


     <p><label for="lp">linkedin profile url:<br/><input type="text" id="lp" value="<?php echo $lin_profile; ?>" name="linkedinp"></p>
     <p><label for="tp">twitter profile url:<br/><input type="text" id="tp" value="<?php echo $t_profile; ?>" name="twitterp"></p>
     <p><label for="gpp">google plus profile url:<br/><input type="text" id="gpp" value="<?php echo $$gp_profile; ?>" name="googleplusp"></p>

      <p><label for="gbp">github profile url:<br/><input type="text" id="gbp" value="<?php echo $$gp_profile; ?>" name="githubp"></p>



 <p><input type="submit" class="btn btn-primary" value="Update"></p>
 </div>


 </form>
 </div>
 </div>
 </div>
