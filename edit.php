<?
include 'connection.php';

$id=$_POST['id'];
$resp = array();
$table = $h->table('user_details');
$results=$table->select()->where('id',$id)->get();

if(count($results) > 0){
    $resp['success'] = 1;
    $resp['data']   = $results[0];
}else{
    $resp['success'] = 0;
    $resp['msg']   = 'Invalid user.';
}

echo json_encode($resp);
?>