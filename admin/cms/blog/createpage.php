<?php

include '../sql.php';




$result = mysqli_query($con,"SELECT * FROM brytweb_wms_settings");


while($row = mysqli_fetch_array($result))

{
$facebook_app_id = $row['facebook_app_id'];

}






$view = $_POST['view'];
$page = $_POST['name'];
$title = str_replace(' ','-',$page);

$title = $title.'.html';

 $filename = "../../../".$title;
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

   <title>'.$page.'</title>

   </head>

   <body>
<!-- facebook sdk start-->

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : \''.$facebook_app_id.'\',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : \'v2.10\'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, \'script\', \'facebook-jssdk\'));
</script>
<!-- facebook dk end -->



     <div id="blogheader">


     </div>



   <div style="padding:100px;">
   '.$view .'

   <!-- Your share button code -->
   <h5>Please share if you found value in our content:</h5>
   <p>
     <a class="btn btn-info" href="http://www.stumbleupon.com/submit?url=http://'.$_SERVER['SERVER_NAME'].'/'.$title.';">
       <i class="fa fa-stumbleupon"></i>
     </a>


 <a class="btn btn-info" href="https://www.facebook.com/sharer/sharer.php?u=http://'.$_SERVER['SERVER_NAME'].'/'.$title.';">
         <i class="fa fa-facebook"></i>
       </a>

       <a class="btn btn-info" href="http://twitter.com/home?status=http://'.$_SERVER['SERVER_NAME'].'/'.$title.';">
         <i class="fa fa-twitter"></i>
       </a>

       <a class="btn btn-info " href="https://plus.google.com/share?url=http://'.$_SERVER['SERVER_NAME'].'/'.$title.';">
         <i class="fa fa-google-plus"></i>
       </a>
       <a class="btn btn-info btn-social-icon btn-google-plus" href="">
         <i class="fa fa-pinterest"></i>
       </a>
   </p>




   </div>

<!-- facebook comments -->

<div class="fb-comments"></div>

<!-- facebook comments end -->



   <div id="footer">

   </div>

   <script src="brytweb/brytweb.js"></script>



   <script>
   $(document).ready(function() {
   $("div#blogheader").load("header/head2.html");
   $("div#footer").load("footer/foot2.html");

   });



   </script>




   </body>
   </html>
' );
  fclose( $file );



   include '../../sql.php';



   $sql="INSERT INTO brytweb_wms_blog(page,title, article)

   VALUES
   ('$title', '$page','$view')";


   if (!mysqli_query($con,$sql))

   {

   die('Error: ' . mysqli_error($con));

   }



include '../../sql.php';

$resulttag = mysqli_query($con,"SELECT * FROM brytweb_wms_settings");


while($row = mysqli_fetch_array($resulttag))

{
  $name = $row["site_name"];
  $webemail = $row["admin_email"];


}



include '../../sql.php';

$resultmsg = mysqli_query($con,"SELECT * FROM brytweb_wms__blog_subscribers");


while($row = mysqli_fetch_array($resultmsg))

{
  $to = $row["email"];
  $subject = "New post at ".$webname."[".$title."]";
  $message = $title;
  $message .= $view;
  $message .= "read more here: ".$view;
  $from = $webemail;
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  mail($to, $subject, $message, $from, $headers );

}










    ?>
