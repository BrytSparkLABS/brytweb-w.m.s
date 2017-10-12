<html>
<head>

  <!-- include our libraries and css files -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../brytweb/bootstrap.css" rel="stylesheet">
  <link href="../brytweb/brytweb.css" rel="stylesheet">
  <link href="../brytweb/fonts/css/font-awesome.min.css" rel="stylesheet">
</head>




       <?php

$webtype=$_POST['webtype'];
$site_name = $_POST['webname'];
$site_street =$_POST['webstreet'];
$site_town_city =$_POST['webtwncity'];
$site_postal_code =$_POST['webpostalcode'];

$admin_email = array('email' =>$_POST['admin_email'].$_POST['admin_email']);


$admin_hashcode = password_hash($_POST['admin_hashcode'], PASSWORD_BCRYPT, $admin_email);









if($webtype == 'blog'){

  echo "<h1><i style='color:green' class='fa fa-server fa-pulse'>
  </i><span style='color:#3377ff'> Building Your Blog Website</span></h1>";

  $filename = "../subscribe.php";
   $file = fopen( $filename, "w" );
   if( $file == false ) {
     echo ( "Error in opening new file" );
      exit();
    }
    fwrite( $file, '<?php


  $to = '.$_POST["admin_email"].';
  $subject = "New Website Subscription";
  $message = "new website subscriber";
  $message.= "name: ".$_POST["name"];
  $message.= "email:".$_POST["email"];
  $from = $_POST["email"];
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  mail($to, $subject, $message, $from, $headers );



  include "admin/sql.php";



  $sql2="INSERT INTO brytweb_wms__blog_subscribers(name, email)

  VALUES
  (\'$_POST[name]\',\'$_POST[email]\')";


  if (mysqli_query($con,$sql2))

  {

  mysqli_close($con);

  }
  else {


  die(\'Error: \' . mysqli_error($con));

  }





  ?>
  ' );
   fclose( $file );




   $filename = "../index.html";
    $file = fopen( $filename, "w" );
    if( $file == false ) {
      echo ( "Error in opening new file" );
       exit();
     }
     fwrite( $file, '<html>
     <head>

   <meta name="description" content="webpage content">


       <!-- include our libraries and css files -->
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="brytweb/bootstrap.css" rel="stylesheet">
       <link href="brytweb/brytweb.css" rel="stylesheet">

       <link href="brytweb/fonts/css/font-awesome.min.css" rel="stylesheet">

       <title>webpagetitle</title>

       </head>

       <body>




       <div id="header">

       </div>


            <div class="modal fade" tabindex="-1" role="dialog" id="subscribeModal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Subscribe to stay up to date!</h4>
                  </div>
                  <div class="modal-body">
                    <form>

       <input type="text" id="name" placeholder="Your Name">
       <input type="text" id="email" placeholder="Your Email">
       <button  type="button" id="subscribe" class="btn btn-success">Subscribe</button>
                    </form>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


            <div class="modal fade" tabindex="-1" role="dialog" id="thanksModal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Thank you for subscribing!</h4>
                  </div>
                  <div class="modal-body">
                    <h1>Thanks for subscribing,<br/><small> please remember to check your email regularly</small></h1>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->





          <button id="subscribeShow" style="z-index:1;" class="btn btn-primary trolley">Subscribe</button>


       <div id="body" style="padding:60px;">

       </div>


       <div id="footer">

       </div>

       <script src="brytweb/brytweb.js"></script>

       </body>
       </html>

  ' );
    fclose( $file );







$view = '

<title>admin</title>

</head>

<body>

<div class="container">

<div class="modal fade" tabindex="-1" role="dialog" id="processingModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <h2 class="modal-title"><i class="fa fa-spinner fa-pulse"></i>Working</h2>
      </div>
      <div class="modal-footer">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->







<!-- design index modal -->
<div class="modal fade" id="designModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<div class="modal-title">
</div>
</div>

<div class="modal-body">

<p>  <button id="header" class="btn btn-lg btn-success"><i class="fa fa-connectdevelop"></i>
  Header
</button></p>

<p>  <button id="footer" class="btn btn-lg btn-success"><i class="fa fa-connectdevelop"></i>
Footer
</button></p>


<p>  <button id="styles" class="btn btn-lg btn-success"><i class="fa fa-connectdevelop"></i>
Styles
</button></p>



</div>

<div class="modal-footer">

</div>
</div>

</div>

</div>





<!--content index modal -->
  <div class="modal fade" id="contentModal">

  <div class="modal-dialog">

  <div class="modal-content">

  <div class="modal-header">

  <div class="modal-title">
  </div>
  </div>

  <div class="modal-body">

  <p>  <button id="homeland" class="btn btn-lg btn-success"><i class="fa fa-pencil"></i>
    Home Page
  </button></p>

<p>  <button id="about" class="btn btn-lg btn-success"><i class="fa fa-pencil"></i>
  About Us Page
</button></p>

<p><button id="blogAdmin" class="btn btn-lg btn-success"><i class="fa fa-pencil"></i>
Create blog
</button></p>





  </div>

  <div class="modal-footer">

  </div>
  </div>

  </div>

</div>

<!--analytics index modal -->

<div class="modal fade" id="analyticsModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<div class="modal-title">
Website Analytics

</div>
</div>

<div class="modal-body">
<h3>Select View</h3>

<select name="selview" class="select" id="selview">
<option value="0">Select View</option>
<option value="1">Home Page</option>
<option value="2">About Us Page</option>
<option value="3">Contact Us Page</option>
<option value="4">Blog</option>

</select>
<button onclick="seeView()">Go</button>

</div>

<div class="modal-footer">

</div>
</div>

</div>

</div>


<!-- profile index modal -->
<div class="modal fade" id="profileModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<div class="modal-title">
</div>
</div>

<div class="modal-body">

<p><button id="settings" class="btn btn-success btn-lg"><i class="fa fa-wrench"></i>Settings
</button></p>
<p><button id="seo" class="btn btn-info btn-lg"><i class="fa fa-envelope"></i>S.E.O
</button></p>

<p><button id="analytics" class="btn btn-success btn-lg"><i class="fa fa-bar-chart"></i>Analytics

</button></p>




</div>

<div class="modal-footer">

</div>
</div>

</div>

</div>






<!--start main menu-->



  <button id="design" class="btn btn-success btn-lg"><i class="fa fa-connectdevelop"></i>Design
  </button>

  <button id="content" class="btn btn-success btn-lg"><i class="fa fa-pencil"></i>Edit

  </button>



<button id="profile" class="btn btn-success btn-lg"><i class="fa fa-user-plus"></i>

</button>








<!--end main menu-->


<div id="renderDiv" style="padding:0px;">
</div>

</div>
<script src="brytweb/brytweb.js"></script>
<script src="admin/admin.js"></script>
<script src="admin/cms/analytics/Chart.js"></script>
</body>
</html>




';


//create blog table
$con=mysqli_connect("localhost",$_POST['dzuser'],$_POST['dzpassword'],$_POST['dzname']);
// Check connection

if (mysqli_connect_errno())

 {

echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }

  // Create tables
  $sql="CREATE TABLE brytweb_wms_blog (
    id int(11) NOT NULL AUTO_INCREMENT,

    page varchar(300) NOT NULL,
    title varchar(170) NOT NULL,
    article varchar(5000) NOT NULL,

    PRIMARY KEY (id))";
  // Execute query
  if (mysqli_query($con,$sql)) {

mysqli_close($con);

}
else {


die('Error: ' . mysqli_error($con));

}


//create subscribers table
$con=mysqli_connect("localhost",$_POST['dzuser'],$_POST['dzpassword'],$_POST['dzname']);
// Check connection

if (mysqli_connect_errno())

 {

echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }

  // Create tables
  $sql="CREATE TABLE brytweb_wms__blog_subscribers (
    id int(11) NOT NULL AUTO_INCREMENT,

    name varchar(30) NOT NULL,
    email varchar(60) NOT NULL,


    PRIMARY KEY (id))";
  // Execute query
  if (mysqli_query($con,$sql)) {

mysqli_close($con);

}
else {


die('Error: ' . mysqli_error($con));

}





$filename = "cms/header/headersv.php";
 $file = fopen( $filename, "w" );
 if( $file == false ) {
   echo ( "Error in opening new file" );
    exit();
  }
  fwrite( $file, '<?php

      $header1 = \'<nav class="navbar navbar-default">
          <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">\'.$webName .\'</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="text-left">
          <ul class="nav navbar-nav left-nav">

      <li class="" id="home" onclick="home()"><a>Home</a></li>
      <li class="" id="about" onclick="about()"><a>About us</a>
      <li  class="" id="contact" onclick="contact()"><a>Contact us</a>
      <li  class="" id="blog" onclick="blog()"><a>Our Blog</a>


         </ul>
          </div>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
          </nav>\';



      $header2 = \'<div class="modal fade" tabindex="-1" role="dialog" id="menuModal">

      <div class="modal-dialog" role="document">

      <div class="modal-content">

      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      <div class="modal-title">
        Menu
        </div>
      </div>


      <div class="modal-body">

        <ul class="nav nav-pills left-nav">

      <li class="" id="home" onclick="home()" data-dismiss="modal"><a>Home</a></li>
      <li class="" id="about" onclick="about()" data-dismiss="modal"><a>About us</a></li>
      <li  class="" id="contact" onclick="contact()" data-dismiss="modal"><a>Contact us</a></li>
      <li  class="" id="blog" onclick="blog()" data-dismiss="modal"><a>Our Blog</a></li>

        </ul>

      </div>

       <div class="modal-footer">

       </div>
       </div>

       </div>
       </div>
       <h1>\'.$webName .\' &nbsp;<button onclick="$(\\\'#menuModal\\\').modal(\\\'show\\\')" class="btn btn-success btn-fixed-top">Menu</button></h1>\';



    $header3 =

    \'<nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">\'.$webName .\'</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="text-left">
        <ul class="nav navbar-nav left-nav">

        <li>
        <a class="navigHome2" href="./">
        Home
        </a>
        </li>

        <li>
        <a id="navigAbout2" href="./">
        About us
        </a>
        </li>

        <li>
          <a href="./" id="navigContact2">
        Contact us
        </a>
        </li>

        <li>
          <a href="./" id="navigBlog2">
        Our Blog
        </a>
        </li>


        </ul>
        </div>

        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>

         <script>


         $("#navigBlog2").click(function(){

      sessionStorage.clear();


         sessionStorage.navi = "blogindex.html";

         });


         $("#navigContact2").click(function(){

      sessionStorage.clear();

         sessionStorage.navi = "contact.html";


         });
         $("#navigAbout2").click(function(){
      sessionStorage.clear();
         sessionStorage.navi = "about.html";

         });

         $(".navigHome2").click(function(){

      sessionStorage.clear();

         sessionStorage.navi = "home.html";

         });

         </script>\';



    $header4 = \'<div class="modal fade" tabindex="-1" role="dialog" id="menuModal">

    <div class="modal-dialog" role="document">

    <div class="modal-content">

    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    <div class="modal-title">
      Menu
      </div>
    </div>


    <div class="modal-body">

      <ul class="nav nav-pills left-nav">

      <li><a href="./" class="navigHome2">Home</a></li>
      <li><a href="./" id="navigAbout2">About us</a></li>
      <li><a href="./" id="navigContact2">Contact us</a></li>
      <li><a href="./" id="navigBlog2">Our Blog</a></li>

      </ul>

    </div>

     <div class="modal-footer">

     </div>
     </div>

     </div>
     </div>
     <h1>\'.$webName .\' &nbsp;<button onclick="$(\\\'#menuModal\\\').modal(\\\'show\\\')" class="btn btn-success btn-fixed-top">Menu</button></h1>

      <script>


     $("#navigBlog2").click(function(){

    sessionStorage.clear();


     sessionStorage.navi = "blogindex.html";

     });


     $("#navigContact2").click(function(){

    sessionStorage.clear();

     sessionStorage.navi = "contact.html";


     });
     $("#navigAbout2").click(function(){
    sessionStorage.clear();
     sessionStorage.navi = "about.html";

     });

     $(".navigHome2").click(function(){

    sessionStorage.clear();

     sessionStorage.navi = "home.html";

     });

     </script>\';
       ?>

' );
 fclose( $file );



$filename = "cms/footer/footersv.php";
 $file = fopen( $filename, "w" );
 if( $file == false ) {
   echo ( "Error in opening new file" );
    exit();
  }
  fwrite( $file, '<?php
  if($facebook_profile_url != ""){
    $facebook =\'<a href="\'.$facebook_profile_url.\'"><i class="fa fa-facebook connect"></i></a>\';
}
  if($instagram_profile_url != ""){
  $instagram =\'<a href="\'.$instagram_profile_url.\'"><i class="fa fa-instagram connect"></i></a>\';
}
if($youtube_profile_url != ""){
  $youtube = \'<a href="\'.$youtube_profile_url.\'"><i class="fa fa-youtube connect"></i></a>\';
}
if($linkedin_profile_url != ""){
  $linkedin = \'<a href="\'.$linkedin_profile_url.\'"><i class="fa fa-linkedin connect"></i></a>\';
}
if($twitter_profile_url != ""){
  $twitter = \'<a href="\'.$twitter_profile_url.\'"><i class="fa fa-twitter connect"></i></a>\';
}
if($google_plus_profile_url != ""){
  $google_plus =\'<a href="\'.$google_plus_profile_url.\'"><i class="fa fa-google-plus connect"></i></a>\';
}
if($github_profile_url != ""){
  $github = \'<a href="\'.$github_profile_url.\'"><i class="fa fa-github connect"></i></a>\';
  }




      $footer1 = \'
      <div class="footer basic foot">
      <div class="articles">

        <ul>
          <li class="" onClick="home()">Home</li>
          <li class="" onClick="about()">About</li>
          <li class="" onClick="contact()">Contact</li>
          <li class="" onClick="blog()">Blog</li>
        </ul>

      </div>
      <div class="address">
        <h5 class="menu-heading">Connect with us around the web</h5>
        <span style="font-size:1.5em;">


        \'.$facebook.\'
        \'.$instagram.\'
      \'.$youtube.\'
      \'. $linkedin.\'
    \'. $twitter.\'
    \'.$google_plus .\'
    \'.  $github.\'
       </span>

      </div>
      <div class="gamma">

      <ul class="address">
        <li class="menu-heading">Contact Us</li>

  <li>  <a class="btn btn-primary" href="#" onclick="contact()"><i class="fa fa-envelope"></i></a>

<li>'.$_POST['webstreet'].'</li>
<li>'.$_POST['webtwncity'].'</li>
<li>'.$_POST['webpostalcode'].'</li>


    </ul>

      </div>
      <div class="search"></div>
      <div class="epsilon"></div>
      <div class="zeta"></div>
      <div class="eta"></div>
      <div class="copy">\'.$webName .\' &copy; 2017</div>  </div>\';



      $footer2 = \'
      <div class="footer basic foot">
      <div class="articles">



        <h5 class="menu-heading">Connect with us around the web</h5>
        <span style="font-size:1.5em;">
        \'.$facebook.\'
        \'.$instagram.\'
      \'.$youtube.\'
      \'. $linkedin.\'
    \'. $twitter.\'
    \'.$google_plus .\'
    \'.  $github.\'</span>




      </div>
      <div class="address">

      <ul class="address">
        <li class="menu-heading">Contact Us</li>

  <li>  <a class="btn btn-primary" href="#" onclick="contact()"><i class="fa fa-envelope"></i></a>

<li>'.$_POST['webstreet'].'</li>
<li>'.$_POST['webtwncity'].'</li>
<li>'.$_POST['webpostalcode'].'</li>


    </ul>


      </div>
      <div class="gamma">

        <ul>
          <li><a href="#" class="footer-menu" onClick="home()">Home</a></li>
          <li><a href="#" class="footer-menu" onClick="about()">About</a></li>
          <li><a href="#" class="footer-menu" onClick="contact()">Contact</a></li>
          <li><a href="#" class="footer-menu" onClick="blog()">Blog</a></li>
        </ul>


      </div>
      <div class="search"></div>
      <div class="epsilon"></div>
      <div class="zeta"></div>
      <div class="eta"></div>
      <div class="copy">\'.$webName .\' &copy; 2017</div>
      </div>\';



    $footer3 = \'
    <div class="footer basic foot">
    <div class="articles">

      <ul>
      <li><a href="./"  class="navigHome2">Home</a></li>
      <li><a href="./"  class="navigAbout2">About</a></li>
      <li><a href="./"  class="navigContact2">Contact</a></li>
      <li><a href="./"  class="navigBlog2">Blog</a></li>
      </ul>

    </div>
    <div class="address">
      <h5 class="menu-heading">Connect with us around the web</h5>
      <span style="font-size:1.5em;">
      \'.$facebook.\'
      \'.$instagram.\'
    \'.$youtube.\'
    \'. $linkedin.\'
  \'. $twitter.\'
  \'.$google_plus .\'
  \'.  $github.\'</span>

    </div>
    <div class="gamma">

    <ul class="address">
      <li class="menu-heading">Contact Us</li>

<li>  <a href="./"  class="navigContact2"><i class="fa fa-envelope"></i></a>

<li>'.$_POST['webstreet'].'</li>
<li>'.$_POST['webtwncity'].'</li>
<li>'.$_POST['webpostalcode'].'</li>


  </ul>


    </div>
    <div class="search"></div>
    <div class="epsilon"></div>
    <div class="zeta"></div>
    <div class="eta"></div>
    <div class="copy">\'.$webName .\' &copy; 2017</div>
    </div>


         <script>


         $(".navigBlog2").click(function(){

      sessionStorage.clear();


         sessionStorage.navi = "blogindex.html";

         });


         $(".navigContact2").click(function(){

      sessionStorage.clear();

         sessionStorage.navi = "contact.html";


         });
         $(".navigAbout2").click(function(){
      sessionStorage.clear();
         sessionStorage.navi = "about.html";

         });

         $(".navigHome2").click(function(){

      sessionStorage.clear();

         sessionStorage.navi = "home.html";

         });

         </script>\';



    $footer4 =\'
    <div class="footer basic foot">
    <div class="articles">



      <h5 class="menu-heading">Connect with us around the web</h5>
      <span style="font-size:1.5em;">
      \'.$facebook.\'
      \'.$instagram.\'
    \'.$youtube.\'
    \'. $linkedin.\'
  \'. $twitter.\'
  \'.$google_plus .\'
  \'.  $github.\'</span>



    </div>
    <div class="address">

    <ul class="address">
      <li class="menu-heading">Contact Us</li>

<li>  <a href="./"  class="navigContact2"><i class="fa fa-envelope"></i></a>

<li>'.$_POST['webstreet'].'</li>
<li>'.$_POST['webtwncity'].'</li>
<li>'.$_POST['webpostalcode'].'</li>


  </ul>


    </div>
    <div class="gamma">

      <ul>
      <li><a href="./"  class="navigHome2">Home</a></li>
      <li><a href="./"  class="navigAbout2">About</a></li>
      <li><a href="./"  class="navigContact2">Contact</a></li>
      <li><a href="./"  class="navigBlog2">Blog</a></li>
      </ul>


    </div>
    <div class="search"></div>
    <div class="epsilon"></div>
    <div class="zeta"></div>
    <div class="eta"></div>
    <div class="copy">\'.$webName .\' &copy; 2017</div>
    </div>




           <script>


           $(".navigBlog2").click(function(){

        sessionStorage.clear();


           sessionStorage.navi = "blogindex.html";

           });


           $(".navigContact2").click(function(){

        sessionStorage.clear();

           sessionStorage.navi = "contact.html";


           });
           $(".navigAbout2").click(function(){
        sessionStorage.clear();
           sessionStorage.navi = "about.html";

           });

           $(".navigHome2").click(function(){

        sessionStorage.clear();

           sessionStorage.navi = "home.html";

           });

           </script> \';
       ?>

' );
 fclose( $file );





}


else if($webtype == 'portfolio'){



  echo "<h1><i style='color:green' class='fa fa-server fa-pulse'>
  </i><span style='color:#3377ff'> Building Your Portfolio Website</span></h1>";







  $filename = "../subscribe.php";
   $file = fopen( $filename, "w" );
   if( $file == false ) {
     echo ( "Error in opening new file" );
      exit();
    }
    fwrite( $file, '<?php


  $to = '.$_POST["admin_email"].';
  $subject = "New Website Subscription";
  $message = "new website subscriber";
  $message.= "name: ".$_POST["name"];
  $message.= "email:".$_POST["email"];
  $from = $_POST["email"];
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  mail($to, $subject, $message, $from, $headers );







  ?>
  ' );
   fclose( $file );









  $filename = "../index.html";
   $file = fopen( $filename, "w" );
   if( $file == false ) {
     echo ( "Error in opening new file" );
      exit();
    }
    fwrite( $file, '<html>
<head>

  <!-- include our libraries and css files -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="brytweb/bootstrap.css" rel="stylesheet">
  <link href="brytweb/brytweb.css" rel="stylesheet">

<link href="brytweb/fonts/css/font-awesome.min.css" rel="stylesheet">

<title>Web page title</title>

</head>

<body>



<div id="header">

</div>




<div id="body" style="padding:60px;">

</div>


<div id="footer">

</div>

<script src="brytweb/brytweb.js"></script>

</body>
</html>


 ' );
   fclose( $file );








$view = '<title>admin</title>

</head>

<body>

<div class="container">

<div class="modal fade" tabindex="-1" role="dialog" id="processingModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <h2 class="modal-title"><i class="fa fa-spinner fa-pulse"></i>Working</h2>
      </div>
      <div class="modal-footer">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->







<!-- design index modal -->
<div class="modal fade" id="designModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<div class="modal-title">
</div>
</div>

<div class="modal-body">

<p>  <button id="header" class="btn btn-lg btn-success"><i class="fa fa-connectdevelop"></i>
  Header
</button></p>

<p>  <button id="footer" class="btn btn-lg btn-success"><i class="fa fa-connectdevelop"></i>
Footer
</button></p>


<p>  <button id="styles" class="btn btn-lg btn-success"><i class="fa fa-connectdevelop"></i>
Styles
</button></p>



</div>

<div class="modal-footer">

</div>
</div>

</div>

</div>





<!--content index modal -->
  <div class="modal fade" id="contentModal">

  <div class="modal-dialog">

  <div class="modal-content">

  <div class="modal-header">

  <div class="modal-title">
  </div>
  </div>

  <div class="modal-body">

  <p>  <button id="homeland" class="btn btn-lg btn-success"><i class="fa fa-pencil"></i>
    Home Page
  </button></p>

<p>  <button id="about" class="btn btn-lg btn-success"><i class="fa fa-pencil"></i>
  About Us Page
</button></p>

<p><button id="portfolioAdmin" class="btn btn-lg btn-success"><i class="fa fa-pencil"></i>
Portfolio
</button></p>





  </div>

  <div class="modal-footer">

  </div>
  </div>

  </div>

</div>

<!--analytics index modal -->

<div class="modal fade" id="analyticsModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<div class="modal-title">
Website Analytics

</div>
</div>

<div class="modal-body">
<h3>Select View</h3>

<select name="selview" class="select" id="selview">
<option value="0">Select View</option>
<option value="1">Home Page</option>
<option value="2">About Us Page</option>
<option value="3">Contact Us Page</option>
<option value="6">Portfolio</option>

</select>
<button onclick="seeView()">Go</button>

</div>

<div class="modal-footer">

</div>
</div>

</div>

</div>


<!-- profile index modal -->
<div class="modal fade" id="profileModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<div class="modal-title">
</div>
</div>

<div class="modal-body">

<p><button id="settings" class="btn btn-success btn-lg"><i class="fa fa-wrench"></i>Settings
</button></p>
<p><button id="seo" class="btn btn-info btn-lg"><i class="fa fa-envelope"></i>S.E.O
</button></p>

<p><button id="analytics" class="btn btn-success btn-lg"><i class="fa fa-bar-chart"></i>Analytics

</button></p>




</div>

<div class="modal-footer">

</div>
</div>

</div>

</div>






<!--start main menu-->



  <button id="design" class="btn btn-success btn-lg"><i class="fa fa-connectdevelop"></i>Design
  </button>

  <button id="content" class="btn btn-success btn-lg"><i class="fa fa-pencil"></i>Edit

  </button>



<button id="profile" class="btn btn-success btn-lg"><i class="fa fa-user-plus"></i>

</button>








<!--end main menu-->


<div id="renderDiv" style="padding:0px;">
</div>

</div>
<script src="brytweb/brytweb.js"></script>
<script src="admin/admin.js"></script>
<script src="admin/cms/analytics/Chart.js"></script>
</body>
</html>';




//create subscribers table
$con=mysqli_connect("localhost",$_POST['dzuser'],$_POST['dzpassword'],$_POST['dzname']);
// Check connection

if (mysqli_connect_errno())

 {

echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }


// Create tables
$sql="CREATE TABLE brytweb_wms__portfolio (
  id int(11) NOT NULL AUTO_INCREMENT,

  title varchar(170) NOT NULL,
  view varchar(5000) NOT NULL,


  PRIMARY KEY (id))";
// Execute query
if (mysqli_query($con,$sql)) {

mysqli_close($con);

}
else {


die('Error: ' . mysqli_error($con));

}




$filename = "cms/header/headersv.php";
 $file = fopen( $filename, "w" );
 if( $file == false ) {
   echo ( "Error in opening new file" );
    exit();
  }
  fwrite( $file, '<?php

      $header1 = \'<nav class="navbar navbar-default">
          <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">\'.$webName .\'</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="text-left">
          <ul class="nav navbar-nav left-nav">

      <li class="" id="home" onclick="home()"><a>Home</a></li>
      <li class="" id="about" onclick="about()"><a>About us</a>
      <li  class="" id="contact" onclick="contact()"><a>Contact us</a>
      <li  class="" id="portfolio" onclick="portfolio()"><a>Our Portfolio</a>


         </ul>
          </div>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
          </nav>\';



      $header2 = \'<div class="modal fade" tabindex="-1" role="dialog" id="menuModal">

      <div class="modal-dialog" role="document">

      <div class="modal-content">

      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      <div class="modal-title">
        Menu
        </div>
      </div>


      <div class="modal-body">

        <ul class="nav nav-pills left-nav">

      <li class="" id="home" onclick="home()" data-dismiss="modal"><a>Home</a></li>
      <li class="" id="about" onclick="about()" data-dismiss="modal"><a>About us</a></li>
      <li  class="" id="contact" onclick="contact()" data-dismiss="modal"><a>Contact us</a></li>
      <li  class="" id="portfolio" onclick="portfolio()" data-dismiss="modal"><a>Our Portfolio</a></li>

        </ul>

      </div>

       <div class="modal-footer">

       </div>
       </div>

       </div>
       </div>
       <h1>\'.$webName .\' &nbsp;<button onclick="$(\\\'#menuModal\\\').modal(\\\'show\\\')" class="btn btn-success btn-fixed-top">Menu</button></h1>\';


       ?>

' );
 fclose( $file );



$filename = "cms/footer/footersv.php";
 $file = fopen( $filename, "w" );
 if( $file == false ) {
   echo ( "Error in opening new file" );
    exit();
  }
  fwrite( $file, '<?php
  if($facebook_profile_url != ""){
    $facebook =\'<a href="\'.$facebook_profile_url.\'"><i class="fa fa-facebook connect"></i></a>\';
}
  if($instagram_profile_url != ""){
  $instagram =\'<a href="\'.$instagram_profile_url.\'"><i class="fa fa-instagram connect"></i></a>\';
}
if($youtube_profile_url != ""){
  $youtube = \'<a href="\'.$youtube_profile_url.\'"><i class="fa fa-youtube connect"></i></a>\';
}
if($linkedin_profile_url != ""){
  $linkedin = \'<a href="\'.$linkedin_profile_url.\'"><i class="fa fa-linkedin connect"></i></a>\';
}
if($twitter_profile_url != ""){
  $twitter = \'<a href="\'.$twitter_profile_url.\'"><i class="fa fa-twitter connect"></i></a>\';
}
if($google_plus_profile_url != ""){
  $google_plus =\'<a href="\'.$google_plus_profile_url.\'"><i class="fa fa-google-plus connect"></i></a>\';
}
if($github_profile_url != ""){
  $github = \'<a href="\'.$github_profile_url.\'"><i class="fa fa-github connect"></i></a>\';
  }




      $footer1 = \'
      <div class="footer basic foot">
      <div class="articles">

        <ul>
          <li class="" onClick="home()">Home</li>
          <li class="" onClick="about()">About</li>
          <li class="" onClick="contact()">Contact</li>
          <li class="" onClick="portfolio()">Portfolio</li>
        </ul>

      </div>
      <div class="address">
        <h5 class="menu-heading">Connect with us around the web</h5>
        <span style="font-size:1.5em;">


        \'.$facebook.\'
        \'.$instagram.\'
      \'.$youtube.\'
      \'. $linkedin.\'
    \'. $twitter.\'
    \'.$google_plus .\'
    \'.  $github.\'
       </span>

      </div>
      <div class="gamma">

      <ul class="address">
        <li class="menu-heading">Contact Us</li>

  <li>  <a href="./"  class="navigContact2"><i class="fa fa-envelope"></i></a>

  <li>'.$_POST['webstreet'].'</li>
  <li>'.$_POST['webtwncity'].'</li>
  <li>'.$_POST['webpostalcode'].'</li>


    </ul>

      </div>
      <div class="search"></div>
      <div class="epsilon"></div>
      <div class="zeta"></div>
      <div class="eta"></div>
      <div class="copy">\'.$webName .\' &copy; 2017</div>  </div>\';



      $footer2 = \'
      <div class="footer basic foot">
      <div class="articles">



        <h5 class="menu-heading">Connect with us around the web</h5>
        <span style="font-size:1.5em;">
        \'.$facebook.\'
        \'.$instagram.\'
      \'.$youtube.\'
      \'. $linkedin.\'
    \'. $twitter.\'
    \'.$google_plus .\'
    \'.  $github.\'</span>




      </div>
      <div class="address">

      <ul class="address">
        <li class="menu-heading">Contact Us</li>

  <li>  <a href="./"  class="navigContact2"><i class="fa fa-envelope"></i></a>

  <li>'.$_POST['webstreet'].'</li>
  <li>'.$_POST['webtwncity'].'</li>
  <li>'.$_POST['webpostalcode'].'</li>


    </ul>


      </div>
      <div class="gamma">

        <ul>
          <li><a href="#" class="footer-menu" onClick="home()">Home</a></li>
          <li><a href="#" class="footer-menu" onClick="about()">About</a></li>
          <li><a href="#" class="footer-menu" onClick="contact()">Contact</a></li>
          <li><a href="#" class="footer-menu" onClick="portfolio()">Portfolio</a></li>
        </ul>


      </div>
      <div class="search"></div>
      <div class="epsilon"></div>
      <div class="zeta"></div>
      <div class="eta"></div>
      <div class="copy">\'.$webName .\' &copy; 2017</div>
      </div>\';

       ?>

' );
 fclose( $file );









}

else if($webtype == 'e-com'){

  echo "<h1><i style='color:green' class='fa fa-server fa-pulse'></i><span style='color:#3377ff'> Building Your e-Commerce Website</span></h1>";

  $filename = "../sale.php";
   $file = fopen( $filename, "w" );
   if( $file == false ) {
     echo ( "Error in opening new file" );
      exit();
    }
    fwrite( $file, '<?php
$name = $_POST[\'name\'];

$email = $_POST[\'email\'];

$phone = $_POST[\'phone\'];

$street = $_POST[\'street\'];

$suburb = $_POST[\'suburb\'];

$postcode = $_POST[\'postcode\'];

$order = $_POST[\'order\'];

$total = $_POST[\'total\'];

  $to = "tdreyer62@gmail.com";
  $subject = "New Website Order";
  $message = "new order";
  $message.= "name: ".$name;
  $message.= "phone:".$phone;
$message.= "email:".$email;
$message.= "street:".$street;
$message.= "suburb: ".$suburb;
$message.= "postal code:".$postcode;
$message.= "order details:".$order;
$message.= "order total:".$total;
  $from = $email;
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  mail($to, $subject, $message, $from, $headers );



  include "admin/sql.php";



  $sql2="INSERT INTO brytweb_wms__customers(name, email, telephone, purchase_history)

  VALUES
  (\'$name\',\'$email\',\'$phone\',\'$order\')";


  if (mysqli_query($con,$sql2))

  {

  mysqli_close($con);

  }
  else {


  die(\'Error: \' . mysqli_error($con));

  }





  ?>
  ' );
   fclose( $file );


   $filename = "../index.html";
    $file = fopen( $filename, "w" );
    if( $file == false ) {
      echo ( "Error in opening new file" );
       exit();
     }
     fwrite( $file, '<html>
<head>

  <!-- include our libraries and css files -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


<link href="brytweb/bootstrap.css" rel="stylesheet">
  <link href="brytweb/brytweb.css" rel="stylesheet">

<link href="brytweb/fonts/css/font-awesome.min.css" rel="stylesheet">

<title>Web page title</title>

</head>

<body>





            <div class="modal fade" tabindex="-1" role="dialog" id="thanksModal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Thank you for your order!</h4>
                  </div>
                  <div class="modal-body">
                    <h1>Thank you for your order</h1>
                    <p>We\'ll contact you shortly to confirm your order</p>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->






<div id="header">

</div>

<div class="modal fade" id="cartModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1><i class="fa fa-shopping-cart"></i> &nbsp;<button id="checkOut" class="btn btn-success">Checkout</button></h1>
        <div class="modal-title">
           <div id="cartDetails">
          </div>
          <div id="cartTotal">
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div id="orders">
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<button id="showCart" class="btn btn-lg btn-primary trolley"><i class="fa fa-shopping-cart"></i></button>
<div id="body" style="padding:60px;"></div>
<div id="body1" style="padding:60px;"></div>


<script src="brytweb/brytweb.js"></script>

</body>
</html>


   ' );
    fclose( $file );





$view = '


<title>admin</title>

</head>

<body>

<div class="container">

<div class="modal fade" tabindex="-1" role="dialog" id="processingModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <h2 class="modal-title"><i class="fa fa-spinner fa-pulse"></i>Working</h2>
      </div>
      <div class="modal-footer">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->







<!-- design index modal -->
<div class="modal fade" id="designModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<div class="modal-title">
</div>
</div>

<div class="modal-body">

<p>  <button id="header" class="btn btn-lg btn-success"><i class="fa fa-connectdevelop"></i>
  Header
</button></p>

<p>  <button id="footer" class="btn btn-lg btn-success"><i class="fa fa-connectdevelop"></i>
Footer
</button></p>


<p>  <button id="styles" class="btn btn-lg btn-success"><i class="fa fa-connectdevelop"></i>
Styles
</button></p>



</div>

<div class="modal-footer">

</div>
</div>

</div>

</div>





<!--content index modal -->
  <div class="modal fade" id="contentModal">

  <div class="modal-dialog">

  <div class="modal-content">

  <div class="modal-header">

  <div class="modal-title">
  </div>
  </div>

  <div class="modal-body">

  <p>  <button id="homeland" class="btn btn-lg btn-success"><i class="fa fa-pencil"></i>
    Home Page
  </button></p>

<p>  <button id="about" class="btn btn-lg btn-success"><i class="fa fa-pencil"></i>
  About Us Page
</button></p>

<p>  <button id="contact" class="btn btn-lg btn-success"><i class="fa fa-pencil"></i>
  Contact Us Page
</button></p>

<p><button id="storeAdmin" class="btn btn-lg btn-success"><i class="fa fa-wrench"></i>
Online Store
</button></p>



  </div>

  <div class="modal-footer">

  </div>
  </div>

  </div>

</div>

<!--analytics index modal -->

<div class="modal fade" id="analyticsModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<div class="modal-title">
Website Analytics

</div>
</div>

<div class="modal-body">
<h3>Select View</h3>

<select name="selview" class="select" id="selview">
<option value="0">Select View</option>
<option value="1">Home Page</option>
<option value="2">About Us Page</option>
<option value="3">Contact Us Page</option>

<option value="5">Store</option>

</select>
<button onclick="seeView()">Go</button>

</div>

<div class="modal-footer">

</div>
</div>

</div>

</div>


<!-- profile index modal -->
<div class="modal fade" id="profileModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<div class="modal-title">
</div>
</div>

<div class="modal-body">

<p><button id="settings" class="btn btn-success btn-lg"><i class="fa fa-wrench"></i>Settings
</button></p>
<p><button id="seo" class="btn btn-info btn-lg"><i class="fa fa-envelope"></i>SEO
</button></p>

<p><button id="analytics" class="btn btn-success btn-lg"><i class="fa fa-bar-chart"></i>Analytics

</button></p>




</div>

<div class="modal-footer">

</div>
</div>

</div>

</div>






<!--start main menu-->



  <button id="design" class="btn btn-success btn-lg"><i class="fa fa-connectdevelop"></i>Design
  </button>

  <button id="content" class="btn btn-success btn-lg"><i class="fa fa-pencil"></i>Edit

  </button>



<button id="profile" class="btn btn-success btn-lg"><i class="fa fa-user-plus"></i>

</button>








<!--end main menu-->


<div id="renderDiv" style="padding:0px;">
</div>

</div>
<script src="brytweb/brytweb.js"></script>
<script src="admin/admin.js"></script>
<script src="admin/cms/analytics/Chart.js"></script>
</body>
</html>




';


//create blog table
$con=mysqli_connect("localhost",$_POST['dzuser'],$_POST['dzpassword'],$_POST['dzname']);
// Check connection

if (mysqli_connect_errno())

 {

echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }

  // Create tables
  $sql="CREATE TABLE brytweb_wms_store (
    id int(11) NOT NULL AUTO_INCREMENT,

    item_name varchar(50) NOT NULL,
    item_cost varchar(10) NOT NULL,
    itemDescription varchar(1000) NOT NULL,
    itemCoverImg varchar(100) NOT NULL,
    itemPage varchar(170) NOT NULL,
    itemImg1 varchar(100) NOT NULL,
    itemImg2 varchar(100) NOT NULL,
    itemImg3 varchar(100) NOT NULL,
    itemImg4 varchar(100) NOT NULL,
    itemImg5 varchar(100) NOT NULL,

    PRIMARY KEY (id))";
  // Execute query
  if (mysqli_query($con,$sql)) {

mysqli_close($con);

}
else {


die('Error: ' . mysqli_error($con));

}


//create subscribers table
$con=mysqli_connect("localhost",$_POST['dzuser'],$_POST['dzpassword'],$_POST['dzname']);
// Check connection

if (mysqli_connect_errno())

 {

echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }

  // Create tables
  $sql="CREATE TABLE brytweb_wms__customers (
    id int(11) NOT NULL AUTO_INCREMENT,

    name varchar(30) NOT NULL,
    email varchar(60) NOT NULL,
    telephone varchar(60) NOT NULL,
    purchase_history varchar(60) NOT NULL,

    PRIMARY KEY (id))";
  // Execute query
  if (mysqli_query($con,$sql)) {

mysqli_close($con);

}
else {


die('Error: ' . mysqli_error($con));

}


$filename = "cms/header/headersv.php";
 $file = fopen( $filename, "w" );
 if( $file == false ) {
   echo ( "Error in opening new file" );
    exit();
  }
  fwrite( $file, '<?php

        $header1 = \'<nav class="navbar navbar-default">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">\'.$webName .\'</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="text-left">
            <ul class="nav navbar-nav left-nav">

        <li class="" id="home" onclick="home()"><a>Home</a></li>
        <li class="" id="about" onclick="about()"><a>About us</a>
        <li  class="" id="contact" onclick="contact()"><a>Contact us</a>
        <li  class="" id="store" onclick="store()"><a>Shop</a>


           </ul>
            </div>
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            </nav>\';



        $header2 = \'<div class="modal fade" tabindex="-1" role="dialog" id="menuModal">

        <div class="modal-dialog" role="document">

        <div class="modal-content">

        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <div class="modal-title">
          Menu
          </div>
        </div>


        <div class="modal-body">

          <ul class="nav nav-pills left-nav">

        <li class="" id="home" onclick="home()" data-dismiss="modal"><a>Home</a></li>
        <li class="" id="about" onclick="about()" data-dismiss="modal"><a>About us</a></li>
        <li  class="" id="contact" onclick="contact()" data-dismiss="modal"><a>Contact us</a></li>
        <li  class="" id="store" onclick="store()" data-dismiss="modal"><a>Shop</a></li>

          </ul>

        </div>

         <div class="modal-footer">

         </div>
         </div>

         </div>
         </div>
         <h1>\'.$webName .\' &nbsp;<button onclick="$(\\\'#menuModal\\\').modal(\\\'show\\\')" class="btn btn-success btn-fixed-top">Menu</button></h1>\';



      $header3 =

    \'<nav class="navbar navbar-default">
          <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">\'.$webName .\'</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="text-left">
          <ul class="nav navbar-nav left-nav">

          <li>
          <a class="navigHome2" href="../">
          Home
          </a>
          </li>

          <li>
          <a id="navigAbout2" href="../">
          About us
          </a>
          </li>

          <li>
            <a href="../" id="navigContact2">
          Contact us
          </a>
          </li>

          <li>
            <a href="../" id="navigStore2">
          Store
          </a>
          </li>


          </ul>
          </div>

          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
          </nav>

           <script>


           $("#navigStore2").click(function(){

        sessionStorage.clear();


           sessionStorage.navi = "blogindex.html";

           });


           $("#navigContact2").click(function(){

        sessionStorage.clear();

           sessionStorage.navi = "contact.html";


           });
           $("#navigAbout2").click(function(){
        sessionStorage.clear();
           sessionStorage.navi = "about.html";

           });

           $(".navigHome2").click(function(){

        sessionStorage.clear();

           sessionStorage.navi = "home.html";

           });

           </script>\';



      $header4 = \'<div class="modal fade" tabindex="-1" role="dialog" id="menuModal">

      <div class="modal-dialog" role="document">

      <div class="modal-content">

      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      <div class="modal-title">
        Menu
        </div>
      </div>


      <div class="modal-body">

        <ul class="nav nav-pills left-nav">

        <li><a href="../" class="navigHome2">Home</a></li>
        <li><a href="../" id="navigAbout2">About us</a></li>
        <li><a href="../" id="navigContact2">Contact us</a></li>
        <li><a href="../" id="navigStore2">Shop</a></li>

        </ul>

      </div>

       <div class="modal-footer">

       </div>
       </div>

       </div>
       </div>
       <h1>\'.$webName .\' &nbsp;<button onclick="$(\\\'#menuModal\\\').modal(\\\'show\\\')" class="btn btn-success btn-fixed-top">Menu</button></h1>

        <script>


       $("#navigStore2").click(function(){

      sessionStorage.clear();


       sessionStorage.navi = "store/index.html";

       });


       $("#navigContact2").click(function(){

      sessionStorage.clear();

       sessionStorage.navi = "contact.html";


       });
       $("#navigAbout2").click(function(){
      sessionStorage.clear();
       sessionStorage.navi = "about.html";

       });

       $(".navigHome2").click(function(){

      sessionStorage.clear();

       sessionStorage.navi = "home.html";

       });

       </script>\';
         ?>
' );
 fclose( $file );



$filename = "cms/footer/footersv.php";
 $file = fopen( $filename, "w" );
 if( $file == false ) {
   echo ( "Error in opening new file" );
    exit();
  }
  fwrite( $file, '<?php
  if($facebook_profile_url != ""){
    $facebook =\'<a href="\'.$facebook_profile_url.\'"><i class="fa fa-facebook connect"></i></a>\';
}
  if($instagram_profile_url != ""){
  $instagram =\'<a href="\'.$instagram_profile_url.\'"><i class="fa fa-instagram connect"></i></a>\';
}
if($youtube_profile_url != ""){
  $youtube = \'<a href="\'.$youtube_profile_url.\'"><i class="fa fa-youtube connect"></i></a>\';
}
if($linkedin_profile_url != ""){
  $linkedin = \'<a href="\'.$linkedin_profile_url.\'"><i class="fa fa-linkedin connect"></i></a>\';
}
if($twitter_profile_url != ""){
  $twitter = \'<a href="\'.$twitter_profile_url.\'"><i class="fa fa-twitter connect"></i></a>\';
}
if($google_plus_profile_url != ""){
  $google_plus =\'<a href="\'.$google_plus_profile_url.\'"><i class="fa fa-google-plus connect"></i></a>\';
}
if($github_profile_url != ""){
  $github = \'<a href="\'.$github_profile_url.\'"><i class="fa fa-github connect"></i></a>\';
  }




      $footer1 = \'
      <div class="footer basic foot">
      <div class="articles">

        <ul>
          <li class="" onClick="home()">Home</li>
          <li class="" onClick="about()">About</li>
          <li class="" onClick="contact()">Contact</li>
          <li class="" onClick="contact()">Store</li>
        </ul>

      </div>
      <div class="address">
        <h5 class="menu-heading">Connect with us around the web</h5>
        <span style="font-size:1.5em;">


        \'.$facebook.\'
        \'.$instagram.\'
      \'.$youtube.\'
      \'. $linkedin.\'
    \'. $twitter.\'
    \'.$google_plus .\'
    \'.  $github.\'
       </span>

      </div>
      <div class="gamma">

      <ul class="address">
        <li class="menu-heading">Contact Us</li>

  <li>  <a class="btn btn-primary" href="#" onclick="contact()"><i class="fa fa-envelope"></i></a>

<li>'.$_POST['webstreet'].'</li>
<li>'.$_POST['webtwncity'].'</li>
<li>'.$_POST['webpostalcode'].'</li>


    </ul>

      </div>
      <div class="search"></div>
      <div class="epsilon"></div>
      <div class="zeta"></div>
      <div class="eta"></div>
      <div class="copy">\'.$webName .\' &copy; 2017</div>  </div>\';



      $footer2 = \'
      <div class="footer basic foot">
      <div class="articles">



        <h5 class="menu-heading">Connect with us around the web</h5>
        <span style="font-size:1.5em;">
        \'.$facebook.\'
        \'.$instagram.\'
      \'.$youtube.\'
      \'. $linkedin.\'
    \'. $twitter.\'
    \'.$google_plus .\'
    \'.  $github.\'</span>




      </div>
      <div class="address">

      <ul class="address">
        <li class="menu-heading">Contact Us</li>

  <li>  <a class="btn btn-primary" href="#" onclick="contact()"><i class="fa fa-envelope"></i></a>

<li>'.$_POST['webstreet'].'</li>
<li>'.$_POST['webtwncity'].'</li>
<li>'.$_POST['webpostalcode'].'</li>


    </ul>


      </div>
      <div class="gamma">

        <ul>
          <li><a href="#" class="footer-menu" onClick="home()">Home</a></li>
          <li><a href="#" class="footer-menu" onClick="about()">About</a></li>
          <li><a href="#" class="footer-menu" onClick="contact()">Contact</a></li>
          <li><a href="#" class="footer-menu" onClick="store()">Store</a></li>
        </ul>


      </div>
      <div class="search"></div>
      <div class="epsilon"></div>
      <div class="zeta"></div>
      <div class="eta"></div>
      <div class="copy">\'.$webName .\' &copy; 2017</div>
      </div>\';



    $footer3 = \'
    <div class="footer basic foot">
    <div class="articles">

      <ul>
      <li><a href="../"  class="navigHome2">Home</a></li>
      <li><a href="../"  class="navigAbout2">About</a></li>
      <li><a href="../"  class="navigContact2">Contact</a></li>
      <li><a href="../"  class="navigStore2">Store</a></li>
      </ul>

    </div>
    <div class="address">
      <h5 class="menu-heading">Connect with us around the web</h5>
      <span style="font-size:1.5em;">
      \'.$facebook.\'
      \'.$instagram.\'
    \'.$youtube.\'
    \'. $linkedin.\'
  \'. $twitter.\'
  \'.$google_plus .\'
  \'.  $github.\'</span>

    </div>
    <div class="gamma">

    <ul class="address">
      <li class="menu-heading">Contact Us</li>

<li>  <a href="./"  class="navigContact2"><i class="fa fa-envelope"></i></a>

<li>'.$_POST['webstreet'].'</li>
<li>'.$_POST['webtwncity'].'</li>
<li>'.$_POST['webpostalcode'].'</li>


  </ul>


    </div>
    <div class="search"></div>
    <div class="epsilon"></div>
    <div class="zeta"></div>
    <div class="eta"></div>
    <div class="copy">\'.$webName .\' &copy; 2017</div>
    </div>


         <script>


         $(".navigBlog2").click(function(){

      sessionStorage.clear();


         sessionStorage.navi = "store/index.html";

         });


         $(".navigContact2").click(function(){

      sessionStorage.clear();

         sessionStorage.navi = "contact.html";


         });
         $(".navigAbout2").click(function(){
      sessionStorage.clear();
         sessionStorage.navi = "about.html";

         });

         $(".navigHome2").click(function(){

      sessionStorage.clear();

         sessionStorage.navi = "home.html";

         });

         </script>\';



    $footer4 =\'
    <div class="footer basic foot">
    <div class="articles">



      <h5 class="menu-heading">Connect with us around the web</h5>
      <span style="font-size:1.5em;">
      \'.$facebook.\'
      \'.$instagram.\'
    \'.$youtube.\'
    \'. $linkedin.\'
  \'. $twitter.\'
  \'.$google_plus .\'
  \'.  $github.\'</span>



    </div>
    <div class="address">

    <ul class="address">
      <li class="menu-heading">Contact Us</li>

<li>  <a href="./"  class="navigContact2"><i class="fa fa-envelope"></i></a>

<li>'.$_POST['webstreet'].'</li>
<li>'.$_POST['webtwncity'].'</li>
<li>'.$_POST['webpostalcode'].'</li>


  </ul>


    </div>
    <div class="gamma">

      <ul>
      <li><a href="../"  class="navigHome2">Home</a></li>
      <li><a href="../"  class="navigAbout2">About</a></li>
      <li><a href="../"  class="navigContact2">Contact</a></li>
      <li><a href="../"  class="navigStore2">Store</a></li>
      </ul>


    </div>
    <div class="search"></div>
    <div class="epsilon"></div>
    <div class="zeta"></div>
    <div class="eta"></div>
    <div class="copy">\'.$webName .\' &copy; 2017</div>
    </div>




           <script>


           $(".navigBlog2").click(function(){

        sessionStorage.clear();


           sessionStorage.navi = "store/index.html";

           });


           $(".navigContact2").click(function(){

        sessionStorage.clear();

           sessionStorage.navi = "contact.html";


           });
           $(".navigAbout2").click(function(){
        sessionStorage.clear();
           sessionStorage.navi = "about.html";

           });

           $(".navigHome2").click(function(){

        sessionStorage.clear();

           sessionStorage.navi = "home.html";

           });

           </script> \';
       ?>

' );
 fclose( $file );










}

else{

echo 'there was an error';

}

$filename = "admin.php";
 $file = fopen( $filename, "w" );
 if( $file == false ) {
   echo ( "Error in opening new file" );
    exit();
  }
  fwrite( $file, $view );
 fclose( $file );




 $filename = "../".$_POST['admin-name'].".php";
  $file = fopen( $filename, "w" );
  if( $file == false ) {
    echo ( "Error in opening new file" );
     exit();
   }
   fwrite( $file, '

   <?php
   include \'admin/webmysql.php\';





   if (password_verify($_POST[\'code\'], $hashero)){

    ?>
   <html>
   <head>

     <!-- include our libraries and css files -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="brytweb/bootstrap.css" rel="stylesheet">
     <link href="brytweb/brytweb.css" rel="stylesheet">
     <link href="brytweb/fonts/css/font-awesome.min.css" rel="stylesheet"> <?php include \'admin/admin.php\'; ?>

     <?php

     }

     else{


     echo \'
       <title>Please login</title>
       <html>
       <head>

         <!-- include our libraries and css files -->
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="brytweb/bootstrap.css" rel="stylesheet">
         <link href="brytweb/brytweb.css" rel="stylesheet">
         <link href="brytweb/fonts/css/font-awesome.min.css" rel="stylesheet">
       </head>

       <body>


       <div class="container">
       <div class="row">
       <div class="col-md-7">
       <h1>Welcome please login</h1>
       <form method="post" action="#">
       <input type="email" name="email">
       <input type="password" name="code">
       <input type="submit">

       </form>
       </div>
       </div>
       </div>

       </body>
       </html>
     \';

     }
     ?>



      </body></html>' );
  fclose( $file );

  $filename = "sql.php";
   $file = fopen( $filename, "w" );
   if( $file == false ) {
     echo ( "Error in opening new file" );
      exit();
    }
    fwrite( $file, '<?php
    $con=mysqli_connect("localhost", "'.$_POST['dzuser'].'","'.$_POST['dzpassword'].'","'.$_POST['dzname'].'");
    // Check connection

    if (mysqli_connect_errno())

     {

    echo "Failed to connect to MySQL: " . mysqli_connect_error();

      }



    ?> ');
   fclose( $file );



 $con=mysqli_connect("localhost",$_POST['dzuser'],$_POST['dzpassword'],$_POST['dzname']);
 // Check connection

 if (mysqli_connect_errno())

  {

 echo "Failed to connect to MySQL: " . mysqli_connect_error();

   }

   // Create tables
   $sql="CREATE TABLE brytweb_wms_settings (
     id int(11) NOT NULL AUTO_INCREMENT,

     site_name varchar(3600) NOT NULL,
     site_street varchar(3600) NOT NULL,
     site_town_city varchar(120) NOT NULL,
     site_postal_code varchar(300) NOT NULL,
     admin_email varchar(120) NOT NULL,
     admin_hashcode varchar(300) NOT NULL,

     facebook_app_id varchar(300) NOT NULL,

     facebook_profile varchar(300) NOT NULL,
     instagram_profile varchar(300) NOT NULL,
     youtube_profile varchar(300) NOT NULL,
     linkedin_profile varchar(300) NOT NULL,
     twitter_profile varchar(300) NOT NULL,
     google_plus_profile varchar(300) NOT NULL,
     github_profile varchar(300) NOT NULL,


     PRIMARY KEY (id))";
   // Execute query
   if (mysqli_query($con,$sql)) {




     $sql2="INSERT INTO brytweb_wms_settings(site_name, site_street, site_town_city, site_postal_code, admin_email, admin_hashcode, facebook_app_id, facebook_profile, instagram_profile, youtube_profile, linkedin_profile, twitter_profile, google_plus_profile, github_profile)

     VALUES
     ('$_POST[webname]','$_POST[webstreet]','$_POST[webtwncity]','$_POST[webpostalcode]','$_POST[admin_email]','$admin_hashcode','$_POST[facebookapp]','$_POST[facebookp]','$_POST[instagramp]','$_POST[youtubep]','$_POST[linkedinp]','$_POST[twitterp]','$_POST[googleplusp]','$_POST[githubp]')";



 if (mysqli_query($con,$sql2))

 {

      // Create tables
      $sql3="CREATE TABLE brytweb_wms_analytics (
        id int(11) NOT NULL AUTO_INCREMENT,

        returnVISITOR varchar(11) NOT NULL,
        page varchar(120) NOT NULL,
        os varchar(10) NOT NULL,
        browser varchar(10) NOT NULL,
        thedate varchar(12) NOT NULL,
        year varchar(4) NOT NULL,

        month varchar(2) NOT NULL,

        day varchar(2) NOT NULL,

        dayofweek varchar(2) NOT NULL,
        route varchar(360) NOT NULL,
        language varchar(11) NOT NULL,
        timeonsite varchar(11) NOT NULL,
        ip_address varchar(60) NOT NULL,
        country varchar(20) NOT NULL,


        PRIMARY KEY (id))";
      // Execute query
    }
      if (mysqli_query($con,$sql3)) {

 mysqli_close($con);

 }
else {


 die('Error: ' . mysqli_error($con));

 }




 //mysqli_close($con);

}

$admin = $_POST['admin-name'];

header("Refresh: 10.0; URL=../$admin.php" );


 ?>
</body>
</html>
