<?php


  $to = tdreyer62@gmail.com;
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
  ('$_POST[name]','$_POST[email]')";


  if (mysqli_query($con,$sql2))

  {

  mysqli_close($con);

  }
  else {


  die('Error: ' . mysqli_error($con));

  }





  ?>
  