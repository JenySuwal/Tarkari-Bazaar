<?php
session_start();
require('connection.inc.php');
require('function.inc.php');
if(isset($_POST['submit'])){

$username=get_safe_value($con,$_POST['username']);
$password=get_safe_value($con,$_POST['password']);
$res=mysqli_query($con,"SELECT * from users where password='$password'");
$check_user=mysqli_num_rows($res);
if($check_user>0){
    $row=mysqli_fetch_assoc($res);
    $_SESSION['USER_LOGIN']='yes';
    $_SESSION['USER_ID']=$row['id'];
    $_SESSION['USER_NAME']=$row['username'];
      header('location:home.php');

}else{
    header('location:login.php');
    
}

}


?>