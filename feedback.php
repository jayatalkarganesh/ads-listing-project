<?php
session_start();
if($_SESSION['login']!=='a')
{
  header("location:login.php");
}
include("parts/header.php");
?>    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/hero2-area.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">Feedback</h2>
              <ol class="breadcrumb">
                <li><a href="index.php">Home /</a></li>
                <li class="current">Feedback</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->  


    <!-- Start Contact Us Section -->
    <section id="content" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
            <h2 class="feedback-title">
              Send feedback
            </h2>
            <!-- Form -->
            <form action="con_feedback.php" method="POST" >
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                            
                        </div>                    
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">                      
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your email"> 
                      </div>
                    </div> 
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" placeholder="Massage" name="message" rows="10" data-error="Write your message" required></textarea>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" name="feedback_btn" class="btn btn-primary">Submit Now</button>
                    
                </div>

              </div> 
            </form>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            
      </div>
    </section>
    <!-- End Contact Us Section  -->    
          
<?php
include("parts/footer.php")
?>