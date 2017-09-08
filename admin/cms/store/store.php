<?php

include '../../sql.php';




$result = mysqli_query($con,"SELECT * FROM brytweb_wms_settings");


while($row = mysqli_fetch_array($result))

{
$facebook_app_id = $row['facebook_app_id'];

}
$item_name = $_POST['name'];
$item_cost = $_POST['cost'];
$item_description = $_POST['description'];
$item_coverImg = $_POST['cover'];
$item_Img1 = $_POST['img1'];
$item_Img2 = $_POST['img2'];
$item_Img3 = $_POST['img3'];
$item_Img4 = $_POST['img4'];
$item_Img5 = $_POST['img5'];

$page = str_replace(' ','-',$item_name);


$filename = "../../../store/".$page.".html";
 $file = fopen( $filename, "a" );
 if( $file == false ) {
   echo ( "Error in opening new file" );
    exit();
  }
  fwrite( $file, '

  <html>
   <head>

     <!-- include our libraries and css files -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../brytweb/bootstrap.css" rel="stylesheet">
     <link href="../brytweb/brytweb.css" rel="stylesheet">

   <link href="../brytweb/fonts/css/font-awesome.min.css" rel="stylesheet">

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


  <div id="storeheader">


  </div>

<div id="storebody">

<div class="container">
  <div class="row">
  <div class="col-md-12">
  <h3>'.$item_name.' @ '.$item_cost.'<button id="addToCart" class="btn btn-lg btn-success">Add to <i class="fa fa-shopping-cart"></i></button></h3>
  </div></div>

  <div class="row">
  <div class="col-md-7">
  <div id="image">
  <img src="../'.$item_coverImg.'" style="width:400px;height:400px;"/></div>
  <div class="row">
  <div class="col-md-12">
  <img src="../'.$item_Img1.'" id="img1" class="img img-thumbnail" style="width:50px;height:50px;"/>
  <img src="../'.$item_Img2.'" id="img2" class="img img-thumbnail" style="width:50px;height:50px;"/>
  <img src="../'.$item_Img3.'" id="img3" class="img img-thumbnail" style="width:50px;height:50px;"/>
  <img src="../'.$item_Img4.'" id="img4" class="img img-thumbnail" style="width:50px;height:50px;"/>
  <img src="../'.$item_Img5.'" id="img5" class="img img-thumbnail" style="width:50px;height:50px;"/>
</div>
</div>
  </div>
<div class="col-md-5">
'.$item_description.'


<!-- facebook comments -->

<div class="fb-comments"></div>

<!-- facebook comments end -->


</div>
</div>

</div>

<div id="storefooter">


</div>
<script src="../brytweb/brytweb.js"></script>


<script>


$(document).ready(function() {
  $("div#storeheader").load("../header/head2.html");
  $("div#storefooter").load("../footer/foot2.html");

  });




$("#img1").click(function(){

$("#image").html("<img src=\"../'.$item_Img1.'\" id=\"img1\" style=\"width:400px;height:400px;\"/>");

});

$("#img2").click(function(){

$("#image").html("<img src=\"../'.$item_Img2.'\" id=\"img2\" style=\"width:400px;height:400px;\"/>");

});

$("#img3").click(function(){

$("#image").html("<img src=\"../'.$item_Img3.'\" id=\"img3\" style=\"width:400px;height:400px;\"/>");

});
$("#img4").click(function(){

$("#image").html("<img src=\"../'.$item_Img4.'\" id=\"img4\" style=\"width:400px;height:400px;\"/>");

});

$("#img5").click(function(){

$("#image").html("<img src=\"../'.$item_Img5.'\" id=\"img5\" style=\"width:400px;height:400px;\"/>");

});
$("#addToCart").click(function(){


  if(localStorage.getItem(\'cart\')){

    var items = localStorage.getItem(\'cart\');

    items = JSON.parse(items);


    items.Order.push({"name":"'.$item_name.'","cost":'.$item_cost.'})



    localStorage.cart = JSON.stringify(items)


  }

  else{
    localStorage.cart = \'{ "Order" : [ {"name":"'.$item_name.'","cost":'.$item_cost.'}]}\'
  }






console.log(items);

});


</script>

</body>
</html>



' );
 fclose( $file );



include '../../sql.php';


 $sql="INSERT INTO brytweb_wms_store(item_name, item_cost, itemDescription, itemCoverImg, itemPage)

 VALUES
 ('$item_name', '$item_cost', '$item_description', '$item_coverImg', '$page')";


 if (!mysqli_query($con,$sql))

 {

 die('Error: ' . mysqli_error($con));

 }




 mysqli_close($con);


 ?>
