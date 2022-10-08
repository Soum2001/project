<?
include 'connection.php';
// include 'modal.php';
$table = $h->table('user_details');
$email=$_POST['email'];
$password=md5($_POST['password']);
$result=$table->select()
->where('email',$email)
->where('password',$password)
->get();
if($result)
{
    header('Location:dashboard.php');
}
else{
    $errorMsg=  "Invalid Credential.";
    header('Location:index.php?response='.$errorMsg);
    exit;
}

?> 