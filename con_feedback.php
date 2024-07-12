<?php
session_start();
if(isset($_POST['feedback_btn']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$uid=$_SESSION['uid'];

$con = mysqli_connect("localhost","root","","dbconfig");
$sql="INSERT INTO feedback (UID, name, email,message) VALUES ('$uid','$name','$email','$message')";
$result = mysqli_query($con,$sql);

if($result)
{
    $_SESSION['success']='success';
    header("location:feedback.php");

}
else{
    $_SESSION['unsuccess']='unsuccess';
    header("location:feedback.php");
}
}
?>