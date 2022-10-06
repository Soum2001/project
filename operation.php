<!-- <?
include 'connection.php';
// In our example we are going to execute multiple operations on the same table, 
// so instead of loading the table over and over again, we store it in a variable.
$name=$_POST['username'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$address=$_POST['address'];
$phn_no=$_POST['phn_no'];
$table = $h->table('user_details');

$results=$table->insert(
[
['user_name' => $name,'address'=>$address,'phone_no'=>$phn_no,'email' => $email,'password'=>$password]
])->execute();
if($results){
    $resp['success']=1;
    $resp['msg']="data inserted successfully";
}else{
    $resp['success']=0;
    $resp['msg']="Not inserted";
}
echo json_encode($resp);
?> -->
