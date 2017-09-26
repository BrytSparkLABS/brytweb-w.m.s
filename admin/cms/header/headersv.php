<?php

      $header1 = '<nav class="navbar navbar-default">
          <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">'.$webName .'</a>
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
          </nav>';



      $header2 = '<div class="modal fade" tabindex="-1" role="dialog" id="menuModal">

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
       <h1>'.$webName .' &nbsp;<button onclick="$(\'#menuModal\').modal(\'show\')" class="btn btn-success btn-fixed-top">Menu</button></h1>';



    $header3 =  '<nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">'.$webName .'</a>
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

         </script>';



    $header4 = '<div class="modal fade" tabindex="-1" role="dialog" id="menuModal">

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
     <h1>'.$webName .' &nbsp;<button onclick="$(\'#menuModal\').modal(\'show\')" class="btn btn-success btn-fixed-top">Menu</button></h1>

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

     </script>';

       ?>
