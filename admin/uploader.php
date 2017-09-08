<?php
if (isset($_FILES['upload_file'])) {
if(move_uploaded_file($_FILES['upload_file']['tmp_name'], "../images/" . $_FILES['upload_file']['name'])){
echo 'images/'.$_FILES['upload_file']['name'];
} else {
echo $_FILES['upload_file']['name']. " KO";
}
exit;
} else {
echo "No files uploaded ...";
}
?>
