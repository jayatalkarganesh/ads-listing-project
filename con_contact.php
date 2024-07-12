<?php
session_start();
if(isset($_POST['contact_btn']))
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$uid=$_SESSION['uid'];

$con = mysqli_connect("localhost","root","","dbconfig");
$sql="INSERT INTO contact (UID, name, email,subject,message) VALUES ('$uid','$name','$email','$subject','$message')";
$result = mysqli_query($con,$sql);

if($result)
{
    $_SESSION['success']='success';
    header("location:contact.php");

}
else{
    $_SESSION['unsuccess']='unsuccess';
    header("location:contact.php");
}
?>