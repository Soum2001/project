<?php

include 'connection.php';;
$table = $h->table('img_upload');
$target_dir = __DIR__."/assest/uploads/avtars/";
$target_file = $target_dir . basename($_FILES["img_upload"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$uploadOk = 1;
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
if ($_FILES["img_upload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  }else{

    if(!is_dir($target_dir)){
        mkdir($target_dir,0777);
    }
    $file_path="/assest/uploads/avtars/".basename($_FILES["img_upload"]["name"]);
    if(move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file)){
        $results=$table->insert([
            ['img_path' => $file_path]
            ])->execute();
            if($results){
                echo('image uploaded successfully');
            }
    }
    else{
        echo('image not uploaded');
    }
  }
?>