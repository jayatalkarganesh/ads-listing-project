<?php



session_start();

    $e=$_POST['email'];
    
    $p=$_POST['password'];

    include_once 'DBconfig.php';
$sql="SELECT * FROM users WHERE email = '$e'  AND password='$p'" ;

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

if( $row)
{
    $sql="SELECT username FROM users WHERE email = '$e'  AND password='$p'" ;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    $_SESSION['un']=$row['username'];

    $sql="SELECT UserID FROM users WHERE email = '$e'  AND password='$p'" ;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    $_SESSION['uid']=$row['UserID'];

   $_SESSION['login']='a';
  header('Location: index.php');
}

	
else
{	
    $_SESSION['login1']='a';
    header('Location: login.php');
    
}   
?>