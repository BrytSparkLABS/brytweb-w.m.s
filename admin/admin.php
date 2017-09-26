

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
