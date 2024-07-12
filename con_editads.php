<?php
session_start();

extract($_POST);
include_once 'DBconfig.php';
$name=$_FILES['image'] ['tmp_name'];
$name1=$_FILES['image']['name'];

if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
    move_uploaded_file($name,"upload/".$name1);
    $sql="UPDATE advertise SET title = '$title', categories = '$categories', price = '$price', description = '$description', image = '$name1' WHERE advertise.AdID = $AdID";
}
else{
    $sql="UPDATE advertise SET title = '$title', categories = '$categories', price = '$price', description = '$description' WHERE advertise.AdID = $AdID";
   

}
 




if(mysqli_query($con,$sql))
{
    $_SESSION['edit']="success";
header("location:dashboard.php");

}
else{
    $_SESSION['edit1']="unsuccess";
}
?>