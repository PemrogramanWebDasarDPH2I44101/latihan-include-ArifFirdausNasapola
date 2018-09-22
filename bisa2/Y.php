<?php
$file = $_FILES['dokumen'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "foto/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
?>
<img src="<?php echo $upload_dir.$nama_file; ?>">