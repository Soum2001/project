<?
include 'connection.php';
include 'modal.php';
$table = $h->table('user_details');
$query1=$table->select()->get();
$email=$_POST['email'];
$password=md5($_POST['password']);
foreach($query1 as $v) {
    if((in_array($email,$v))&&(in_array($password,$v))){
        header('Location:dashboard.php');
    }
  }

?> 