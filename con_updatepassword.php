<?php
session_start();
$name1=$_SESSION['uid'];

extract($_POST);
include_once 'DBconfig.php';
$sql="UPDATE users SET username = '$username', email = '$email', password = '$password', phone = '$phone' WHERE users.UserID = $name1";
   
if(mysqli_query($con,$sql))
{
    $_SESSION['edit']="success";
header("location:updatepassword.php");

}
else{
    $_SESSION['edit1']="unsuccess";
}
?>
