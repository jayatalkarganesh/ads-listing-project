<?php
session_start();
include('parts/header.php')
?>
 
 <!--<script> 
	
    function fu() { 
			//document.getElementById( 
            //"mySelect").selectedIndex = "2";
           // temp=$row['categories'];
           alert("Logged In successfull");
		} 
	</script> 
    
     Header Area wrapper End -->

    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/hero2-area.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">Login</h2>
              <ol class="breadcrumb">
                <li><a href="index.html">Home /</a></li>
                <li class="current">Login</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->  

    <!-- Content section Start --> 
    <section class="login section-padding">
    
      <div class="container">

             
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="login/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form"  method='post' action="con_login.php">
					<span class="login100-form-title">
				Login
          
          </span>
          
                  
          <?php
    
    if(isset($_SESSION['login']))
    {
      ?>
      
                      <div style="padding-left:55px;color:green;padding-bottom:15px;"   >
                       
                        <h6>Login Already Done.</h6>
                      </div>
                      
                  
      <?php
           
    }
    elseif(isset($_SESSION['login1']))
    {
      ?>
      <div style="padding-left: 55px;padding-bottom: 20px;">
      <lable style="color:red;"> Incorrect Username and password!! <a href="signup.php">Sign Up</a> </lable>
      </div>
      <?php
      session_unset();
    }
    elseif(isset($_SESSION['signup1']))
    {
    ?>
     <div >
                        
                        <h6 style="padding-left:55px;color:green;padding-bottom:20px;">Sign UP Successfull!</h6>
      </div>
    <?php
    session_unset();
    }  
    
    ?>
    
    

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
          </div>
         
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" onclick="fu()">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="forgot-password.php">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="signup.php">
						Signup/Register
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>
   
      </div>
    </section>
    <!-- Content section End --> 
    
 <?php
 include('parts/footer.php')
 ?>