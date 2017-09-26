
<html>
<head>

  <!-- include our libraries and css files -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="brytweb/bootstrap.css" rel="stylesheet">
  <link href="brytweb/brytweb.css" rel="stylesheet">
  <link href="brytweb/fonts/css/font-awesome.min.css" rel="stylesheet">




<?php


echo'
<title>Get started</title>







<style>

body{
background-color:black;
color:lavender;
}



#blogstyle{

color:silver;
background-color:#39AE00;
border:1px solid #39AE00;
border-radius:10px;


}
#portfoliostyle{

color:silver;
background-color:#072467;
border:1px solid #072467;
border-radius:10px;


}
#e-comstyle{

color:silver;
background-color:purple;
border:1px solid purple;
border-radius:10px;


}

</style>

















</head>

<body>


<div class="container">
<div class="row">
<div class="col-md-7">

<h3>Welcome to your BrytWeb-W.M.S admin panel, lets get started building your website</h3>

<form class="form-horizontal" method="post" action="admin/settings.php">
<div class="form-group">
<div style="padding:20px;border:2px solid black;">
<h4>What type of website would you like to build?</h4>

<label for="blog" id="blogstyle" style="padding:20px;border:2px solid black;">Blog Website<input type="radio" class="radio" name="webtype" id="blog" value="blog"></label>
<label for="portfolio" id="portfoliostyle" style="padding:20px;border:2px solid black;">Portfolio Website<input type="radio" class="radio" name="webtype" id="portfolio" value="portfolio"></label>
<label for="e-com" id="e-comstyle" style="padding:20px;border:2px solid black;">e-Commerce Website<input type="radio" class="radio" name="webtype" id="e-com" value="e-com"></label>
</div>
<div style="padding:20px;border:2px solid black;">
<h4>Database Details:<br/>
<small>Before you begin with building your website you will need your database details ready and enter them bellow</small></h4>

<p><input type="text" name="dzuser" id="dzuser" placeholder="Database Username"></p>
<p><input type="text" name="dzpassword" id="dzpassword" placeholder="Database Password"></p>
<p><input type="text" name="dzname" id="dzname" placeholder="Database Name"></p>
</div>

<div style="padding:20px;border:2px solid black;">
<h4>Website Name <small>please note this can not be changed once set and will be displayed
in the header as well as the footer of the website. Usually it is the same as the domain name.</small></h4>
<p><input type="text" placeholder="Website Name" name="webname"></p>

<h4>Credentials</h4>
<p><input type="email" placeholder="Your email" name="admin_email"></p>
<p><input type="password" placeholder="create password" name="admin_hashcode"></p>
</div>

<div style="padding:20px;border:2px solid black;">
<h4>Postal Address</h4>
<p><input type="text" placeholder="Street" name="webstreet"></p>
<p><input type="text" placeholder="Town/City" name="webtwncity"></p>
<p><input type="text" placeholder="Postal Code" name="webpostalcode"></p>
</div>

<div style="padding:20px;border:2px solid black;">
   <h4>Social Media<br/>
<small>Add your social media accounts bellow.(this is optional but will lead to a better experience for your site visitors).
You will need to create an app at facebook developers. Once you have created the app, copy the app id and enter it bellow.</small>
   </h4>
<p><label for="facebookapp">facebook app id:<br/><input type="text" class="inputsets" id="fbapp" placeholder="facebook app id" name="facebookapp"></p>


   <p><label for="fbp">facebook profile url:<br/><input type="text" id="fbp" placeholder="facebook page url" name="facebookp"></p>
   <p><label for="instap">instagram profile url:<br/><input type="text" id="instap" placeholder="instagram profile url" name="instagramp"></p>
   <p><label for="yp">youtube profile url:<br/><input type="text" id="yp" placeholder="youtube profile url" name="youtubep"></p>


     <p><label for="lp">linkedin profile url:<br/><input type="text" id="lp" placeholder="linkedin profile url" name="linkedinp"></p>
     <p><label for="tp">twitter profile url:<br/><input type="text" id="tp" placeholder="twitter profile url" name="twitterp"></p>
     <p><label for="gpp">google plus profile url:<br/><input type="text" id="gpp" placeholder="google plus profile" name="googleplusp"></p>

      <p><label for="gbp">github profile url:<br/><input type="text" id="gbp" placeholder="github profile url" name="githubp"></p>

<h4>Secure your site</h4>
<p>please create a unique name for your admin page, you will go here when you
log in to your admin panel. for example(http://www.yourwebsiteaddress.com/the-name-of-the-admin-page) </p>
 <p><label for="admin-name">Create a unique name:<br/><input type="text" id="admin-name" placeholder="my-unique-admin-page" name="admin-name"></p>



<p><input type="submit" class="btn btn-primary" value="Build"></p>

</div>


</div>


</form>
</div>
</div>
</div>

</body>
</html>
';




?>
