<?php
session_start();
$title=$_POST['title'];
$categories=$_POST['categories'];
$price=$_POST['price'];
$description=$_POST['description'];
$description=$_POST['description'];
$uid=$_SESSION['uid'];
$name=$_FILES['image'] ['tmp_name'];
$name1=$_FILES['image']['name'];

move_uploaded_file($name,"upload/".$name1);
$con = mysqli_connect("localhost","root","","dbconfig");
$sql = "INSERT INTO advertise (AdID, UID, title, categories, price, description, image, date) VALUES (NULL, '$uid', '$title', '$categories', '$price', '$description', '$name1', current_timestamp())";
$result = mysqli_query($con,$sql);


if($result)
{
    $_SESSION['success']='success';
    header("location:post-ads.php");
}
else
{
    $_SESSION['unsuccess']='unsuccess';
    header("location:post-ads.php");
}
?>  