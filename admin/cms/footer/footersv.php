<?php
  if($facebook_profile_url != ""){
    $facebook ='<a href="'.$facebook_profile_url.'"><i class="fa fa-facebook connect"></i></a>';
}
  if($instagram_profile_url != ""){
  $instagram ='<a href="'.$instagram_profile_url.'"><i class="fa fa-instagram connect"></i></a>';
}
if($youtube_profile_url != ""){
  $youtube = '<a href="'.$youtube_profile_url.'"><i class="fa fa-youtube connect"></i></a>';
}
if($linkedin_profile_url != ""){
  $linkedin = '<a href="'.$linkedin_profile_url.'"><i class="fa fa-linkedin connect"></i></a>';
}
if($twitter_profile_url != ""){
  $twitter = '<a href="'.$twitter_profile_url.'"><i class="fa fa-twitter connect"></i></a>';
}
if($google_plus_profile_url != ""){
  $google_plus ='<a href="'.$google_plus_profile_url.'"><i class="fa fa-google-plus connect"></i></a>';
}
if($github_profile_url != ""){
  $github = '<a href="'.$github_profile_url.'"><i class="fa fa-github connect"></i></a>';
  }




      $footer1 = '
      <div class="footer basic foot">
      <div class="articles">

        <ul>
          <li class="" onClick="home()">Home</li>
          <li class="" onClick="about()">About</li>
          <li class="" onClick="contact()">Contact</li>
          <li class=""><a href="store/">Store</a></li>
        </ul>

      </div>
      <div class="address">
        <h5 class="menu-heading">Connect with us around the web</h5>
        <span style="font-size:1.5em;">


        '.$facebook.'
        '.$instagram.'
      '.$youtube.'
      '. $linkedin.'
    '. $twitter.'
    '.$google_plus .'
    '.  $github.'
       </span>

      </div>
      <div class="gamma">

      <ul class="address">
        <li class="menu-heading">Contact Us</li>

  <li>  <a class="btn btn-primary" href="#" onclick="contact()"><i class="fa fa-envelope"></i></a>

<li>71 Mare Street</li>
<li>Randfontein</li>
<li>1724</li>


    </ul>

      </div>
      <div class="search"></div>
      <div class="epsilon"></div>
      <div class="zeta"></div>
      <div class="eta"></div>
      <div class="copy">'.$webName .' &copy; 2017</div>  </div>';



      $footer2 = '
      <div class="footer basic foot">
      <div class="articles">



        <h5 class="menu-heading">Connect with us around the web</h5>
        <span style="font-size:1.5em;">
        '.$facebook.'
        '.$instagram.'
      '.$youtube.'
      '. $linkedin.'
    '. $twitter.'
    '.$google_plus .'
    '.  $github.'</span>




      </div>
      <div class="address">

      <ul class="address">
        <li class="menu-heading">Contact Us</li>

  <li>  <a class="btn btn-primary" href="#" onclick="contact()"><i class="fa fa-envelope"></i></a>

<li>71 Mare Street</li>
<li>Randfontein</li>
<li>1724</li>


    </ul>


      </div>
      <div class="gamma">

        <ul>
          <li><a href="#" class="footer-menu" onClick="home()">Home</a></li>
          <li><a href="#" class="footer-menu" onClick="about()">About</a></li>
          <li><a href="#" class="footer-menu" onClick="contact()">Contact</a></li>
          <li><a href="store/" class="footer-menu" >Store</a></li>
        </ul>


      </div>
      <div class="search"></div>
      <div class="epsilon"></div>
      <div class="zeta"></div>
      <div class="eta"></div>
      <div class="copy">'.$webName .' &copy; 2017</div>
      </div>';



    $footer3 = '
    <div class="footer basic foot">
    <div class="articles">

      <ul>
      <li><a href="./"  class="navigHome2">Home</a></li>
      <li><a href="./"  class="navigAbout2">About</a></li>
      <li><a href="./"  class="navigContact2">Contact</a></li>
      <li><a href="./"  class="navigStore2">Store</a></li>
      </ul>

    </div>
    <div class="address">
      <h5 class="menu-heading">Connect with us around the web</h5>
      <span style="font-size:1.5em;">
      '.$facebook.'
      '.$instagram.'
    '.$youtube.'
    '. $linkedin.'
  '. $twitter.'
  '.$google_plus .'
  '.  $github.'</span>

    </div>
    <div class="gamma">

    <ul class="address">
      <li class="menu-heading">Contact Us</li>

<li>  <a href="./"  class="navigContact2"><i class="fa fa-envelope"></i></a>

<li>71 Mare Street</li>
<li>Randfontein</li>
<li>1724</li>


  </ul>


    </div>
    <div class="search"></div>
    <div class="epsilon"></div>
    <div class="zeta"></div>
    <div class="eta"></div>
    <div class="copy">'.$webName .' &copy; 2017</div>
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

         </script>';



    $footer4 ='
    <div class="footer basic foot">
    <div class="articles">



      <h5 class="menu-heading">Connect with us around the web</h5>
      <span style="font-size:1.5em;">
      '.$facebook.'
      '.$instagram.'
    '.$youtube.'
    '. $linkedin.'
  '. $twitter.'
  '.$google_plus .'
  '.  $github.'</span>



    </div>
    <div class="address">

    <ul class="address">
      <li class="menu-heading">Contact Us</li>

<li>  <a href="./"  class="navigContact2"><i class="fa fa-envelope"></i></a>

<li>71 Mare Street</li>
<li>Randfontein</li>
<li>1724</li>


  </ul>


    </div>
    <div class="gamma">

      <ul>
      <li><a href="./"  class="navigHome2">Home</a></li>
      <li><a href="./"  class="navigAbout2">About</a></li>
      <li><a href="./"  class="navigContact2">Contact</a></li>
      <li><a href="./"  class="navigStore2">Store</a></li>
      </ul>


    </div>
    <div class="search"></div>
    <div class="epsilon"></div>
    <div class="zeta"></div>
    <div class="eta"></div>
    <div class="copy">'.$webName .' &copy; 2017</div>
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

           </script> ';
       ?>

