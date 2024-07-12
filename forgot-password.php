<?php
include('parts/header.php')
?>
    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/hero2-area.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">Forgot Password</h2>
              <ol class="breadcrumb">
                <li><a href="index.php">Home /</a></li>
                <li class="current">Forgot Password</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->  

    <!-- Content section Start --> 
    <section class="section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="forgot login-area">
              <h3>
                Forgot Password
              </h3>
              <form method="POST" action="con_fpass.php" role="form" class="login-form">
                <div class="form-group">
                  <div class="input-icon">
                    
                    <h5>Send your username and email address on<u> wolf@gmail.com</u> </h5>
                    <p >We will recieve your password within two days</p>
                  </div>
                </div>     
                <div class="form-group mt-4">
                  <ul class="form-links">
                    <li class="float-left"><a href="signup.php">Don't have an account?</a></li>
                    <li class="float-right"><a href="login.php">Back to Login</a></li>
                  </ul>
                </div>  
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End --> 
    
<?php
include('parts/footer.php')
?>