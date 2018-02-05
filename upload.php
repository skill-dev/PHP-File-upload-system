<?php 

$target_dir = "photo/";
$target_file = $_FILES["file"]["name"];
$main_image = $target_dir.$target_file;
$tem_image = $_FILES["file"]["tmp_name"];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(move_uploaded_file($tem_image, $main_image)){
	echo 'Upload completed';
}else{
	echo 'try again';
}
?>