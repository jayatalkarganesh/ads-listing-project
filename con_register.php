<?php



session_start();

    $u=$_POST['username'];
    $e=$_POST['email'];
	$p=$_POST['password'];
	$ph=$_POST['phone'];
	$st=$_POST['state'];
	$ci=$_POST['city'];

    include_once 'DBconfig.php';
$sql="SELECT * FROM users WHERE username = '$u' AND email = '$e' AND password='$p'" ;

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

if( $row)
{
   $_SESSION['signup']='Username and password already registered';
   header('Location: signup.php');
}

	
else
{	

	

	$sql="INSERT INTO users (UserID, username, email, password, phone, state, city) VALUES (NULL, '$u', '$e', '$p', '$ph', '$st', '$ci')";
	
	

	if (mysqli_query($con,$sql)) 
	{
		$_SESSION['signup1']='signup1';
		
		$_SESSION['ui']=mysqli_insert_id($con);
		header("Location:login.php");
	}
    
}   
?>