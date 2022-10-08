<?php
include 'connection.php';

$id=$_POST['id'];
$resp = array();
$table = $h->table('user_details');
$results=$table->delete()->where('id',$id)->execute();
if($results){
    $resp['success']=1;
    $resp['msg']="data deleted successfully";
}else{
    $resp['success']=0;
    $resp['msg']="Invalid data";
}

echo json_encode($resp);
?>