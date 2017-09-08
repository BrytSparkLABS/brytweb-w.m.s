<?php

$street = $_POST['street'];

$city = $_POST['city'];

$postalcode = $_POST['postalcode'];





$f2e = $_POST['f2e'];



$contactnum = $_POST['contactnum'];



 $filename = "../../../contact.html";
  $file = fopen( $filename, "w" );
  if( $file == false ) {
    echo ( "Error in opening new file" );
     exit();
   }
   fwrite( $file, "<div class='row'>
   <div class='col-md-5'>
   <h1>Contact Us</h1>
   <form method='post' action='subscribe.php'><p>
   <input type='text' id='name' name='name' placeholder='Your Name' required></p>
   <p><textarea id='message' name='message' placeholder='Your Message' cols='50' rows='10' required></textarea></p>
   <p><input type='email' id='email' name='email' placeholder='Your Email' required></p>
   <input type='submit' value='Send'>
   </form>
   </div>
   </div>" );
  fclose( $file );






  include '../../sql.php';



  $sql="UPDATE brytweb_wms_settings SET  site_street = '$_POST[webstreet]',
    site_town_city = '$_POST[webtwncity]', site_postal_code = '$_POST[webpostalcode]',
     admin_email = '$_POST[admin_email]' WHERE 1";


  if (mysqli_query($con,$sql))

  {

  mysqli_close($con);

  }
  else {


  die('Error: ' . mysqli_error($con));

  }


  echo 'done';





















    ?>
