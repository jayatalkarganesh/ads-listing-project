<?php
session_start();
include("parts/header.php");
?>
    <!-- Header Area wrapper End -->

    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/hero2-area.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">Ad Details</h2>
              <ol class="breadcrumb">
                <li><a href="index.php">Home /</a></li>
                <li class="current">Ad Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->  

    <!-- Ads Details Start -->
    <div class="section-padding">
      <div class="container">
        <!-- Product Info Start -->
        <div class="product-info row">
        <?php
                    $name1=$_SESSION['uid'];
                    extract($_GET);
            include_once 'DBconfig.php';

            $sql = "SELECT  AdID,UID, title, categories,description, price, date, image FROM advertise WHERE AdID=$id";
            $sql="SELECT users.UserID,phone,city, advertise.AdID,UID, title, categories,description, price, date, image FROM users INNER JOIN advertise WHERE advertise.AdID=$id AND users.UserID=$name1";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
            
            ?>
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="details-box ads-details-wrapper">
              <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                  <div class="product-img">
                    <img style="width: 800px; height: 415px;"  class="img-fluid" src="upload/<?php echo($row['image']); ?>" alt="">
                  </div>
                  <span class="price">Rs:<?php echo($row['price']); ?></span>
                </div>
               
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="details-box">
              <div class="ads-details-info">
                <h2><?php echo($row['title']); ?></h2>
                <p class="mb-2"></p>
                <div class="details-meta">
                  <span><a><i class="lni-alarm-clock"></i> <?php echo($row['date']); ?></a></span>
                  <span><a><i class="lni-map-marker"></i>  <?php echo($row['city']); ?></a></span>
                  <span><a><i class="lni-eye"></i> 299 View</a></span>
                </div>
                
              
              </div>
              <ul class="advertisement mb-4">
                <li>
                <p><strong>Type:</strong> <a href="#"><?php echo($row['categories']); ?></a>, <a href="#">For sale</a></p>
                </li>
                
              </ul>
              <div class="ads-btn mb-4">
                <a href="#" class="btn btn-common btn-reply"><i class="lni-envelope"></i> Email</a>
                <a href="#" class="btn btn-common"><i class="lni-phone-handset"></i><?php echo($row['phone']); ?></a>
              </div>
              <div class="share">
                <span>Share: </span>
                <div class="social-link">  
                  <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                  <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                  <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                  <a class="google" href="#"><i class="lni-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Product Info End -->

        <!-- Product Description Start -->
        <div class="description-info">
          <div class="row">
            <div class="col-lg-8 col-md-6 col-xs-12">
              <div class="description">
                <h4>Description</h4>
                <p><?php echo($row['description']); ?></p>
               
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="short-info">
                <h4>Short Info</h4>
                <ul>
            
                  <li><a href="#"><i class="lni-printer"></i> Print this ad</a></li>
                  <li><a href="#"><i class="lni-reply"></i> Send to a friend</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Product Description End -->
      </div>    
    </div>
    <!-- Ads Details End -->

   

 <?php
 include("parts/footer.php");
 ?>