<div class="modal fade" tabindex="-1" role="dialog" id="updateitemModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Update Item</h4>
      </div>
      <div class="modal-body">
        <div id="itemDiv"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="updateItem()" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="InsertPicModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Upload Picture</h4>
      </div>
      <div class="modal-body">
        <p><input type="file" name="file" size="50" id="file" />
<br />



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php

include '../../sql.php';

$result = mysqli_query($con,"SELECT * FROM brytweb_wms_store");
echo '<table class="table"><thead><tr><th>update</th><th>Delete</th><th>Item</th><th>Cost</th></tr></thead>
<tbody>';

while($row = mysqli_fetch_array($result))

{




echo '<tr><td><button class="btn btn-primary" onclick="update_item('.$row["id"].')"><i class="fa fa-recycle"></i>Update</button></td>
<td><button class="btn btn-danger" onclick="getrid('.$row["id"].')"><i class="fa fa-warning"></i>Delete</button></td>
<td>'.$row["item_name"].'</td>
<td>'.$row["item_cost"].'</td></tr>';
}
echo '</tbody></table>';

 ?>

<script>

function update_item(itemid){


$("#updateitemModal").modal('show');

$.post("admin/cms/store/getitem.php",{id:itemid})
.done(function(data, status, xhr){
console.log('succes:' + data );

$("#itemDiv").html(data);
$("#updateitemModal").modal('show');
})
.fail(function(data, status, xhr){
// Runs on failure
console.log(data);
$("#procesingModal").modal('hide');
 $("#errorModal").modal('show');
})
.always(function(data, status, xhr){
// Both success and failure
console.log(data);
});

};


function insertPic(){

  $("#coverimger").html('');
  $("#coverimger").html('<img src="" id="coverimgv" class="img img-thumbnail" style="width:30%">');

$('#InsertPicModal').modal('show');

};



var uploadfiles = document.querySelector('#file');
uploadfiles.addEventListener('change', function () {


var files = this.files;
for(var i=0; i < files.length; i++){



uploadFile(this.files[i]);
// call the function to upload the file
}
}, false);

function uploadFile(file){

var url = 'admin/cms/uploader.php';
var xhr = new XMLHttpRequest();
var fd = new FormData();

xhr.open("POST", url, true);
xhr.onreadystatechange = function() {
if (xhr.readyState == 4 && xhr.status == 200) {
// Every thing ok, file uploaded

document.getElementById('coverimg').value = xhr.responseText;
document.getElementById('coverimgv').src = xhr.responseText;



console.log(xhr.responseText); // handle response.
}
};
fd.append("upload_file", file);
xhr.send(fd);



$('#InsertPicModal').modal('hide');



console.log(file);
}















function getrid(itemid){

  $("#procesingModal").modal('show');


  $.post("admin/cms/store/delete.php",{id:itemid})
  .done(function(data, status, xhr){
  console.log('succes:' + data );

  $("#procesingModal").modal('hide');
  })
  .fail(function(data, status, xhr){
  // Runs on failure
  console.log(data);
  $("#procesingModal").modal('hide');
   $("#errorModal").modal('show');
  })
  .always(function(data, status, xhr){
  // Both success and failure
  console.log(data);
  });



}


function updateItem(){

 $("#procesingModal").modal('show');
var id = document.getElementById('id').value
var item_name = document.getElementById('itemname').value
var item_cost = document.getElementById('itemcost').value
var item_description = document.getElementById('itemdescription').value
var item_coverImg = document.getElementById('coverimg').value



$.post("admin/cms/store/update.php",{id:id, name:item_name, cost: item_cost, description:item_description, cover: item_coverImg})
.done(function(data, status, xhr){
console.log('succes:' + data );
$("#procesingModal").modal('hide');
})
.fail(function(data, status, xhr){
// Runs on failure
console.log(data);

 $("#errorModal").modal('show');
})
.always(function(data, status, xhr){
// Both success and failure
console.log(data);
});


};





</script>
