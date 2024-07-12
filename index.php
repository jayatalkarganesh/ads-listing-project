<?php
session_start();
  include('parts/header.php');


            //$sql = "SELECT  AdID,UID, title, categories,description, price, date, image FROM advertise WHERE AdID=$id";
            //$sql="SELECT users.UserID,phone,city, advertise.AdID,UID, title, categories,description, price, date, image FROM users INNER JOIN advertise WHERE advertise.AdID=$id AND users.UserID=$name1";
            //$result = mysqli_query($con,$sql);
            //$row = mysqli_fetch_assoc($result);
  
?>

      <!-- Hero Area Start -->
      <div id="hero-area" style="background: url(assets/img/hero19-area.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 text-center">
              <div class="contents">
                <h1 class="head-title">Welcome to <span class="year">AgriMarket</span></h1>
                <p>Buy And Sell Agriculture products</p>
                <div class="search-bar">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Trending Categories Section Start -->
    <section class="trending-cat section-padding">
      <div class="container">
        <h1 class="section-title">Product Categories</h1>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a href="category.php">
              <div class="box">
                <div class="icon">
                  <img src="assets/img/cat/img-u.png" alt="">
                </div>
                <h4>Vegetables</h4>
                <?php
                  include_once 'DBconfig.php';
                $sql="SELECT COUNT(AdID) as co FROM advertise WHERE categories= 'vegetables'";
              $result= mysqli_query($con,$sql);
              $n=mysqli_fetch_assoc($result);
               ?>
                <strong><?php echo($n['co']);?> Ads</strong>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a href="category.php">
              <div class="box">
                <div class="icon">
                  <img class="img-fluid" src="assets/img/cat/img-f.png" alt="">
                </div>
                <h4>Furits</h4>
                <?php
                
                $sql="SELECT COUNT(AdID) as co FROM advertise WHERE categories= 'fruits'";
              $result= mysqli_query($con,$sql);
              $n=mysqli_fetch_assoc($result);
               ?>
                <strong><?php echo($n['co']);?> Ads</strong>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a href="category.php">
              <div class="box">
                <div class="icon">
                  <img class="img-fluid" src="assets/img/cat/img-g.png" alt="">
                </div>
                <h4>Grains</h4>
                <?php
                
                 $sql="SELECT COUNT(AdID) as co FROM advertise WHERE categories= 'grains'";
               $result= mysqli_query($con,$sql);
               $n=mysqli_fetch_assoc($result);
                ?>
                <strong><?php echo($n['co']);?> Ads</strong>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a href="category.php">
              <div class="box">
                <div class="icon">
                  <img class="img-fluid" src="assets/img/cat/img-n.png" alt="">
                </div>
                <h4>Nuts</h4><?php
                
                $sql="SELECT COUNT(AdID) as co FROM advertise WHERE categories= 'nuts'";
              $result= mysqli_query($con,$sql);
              $n=mysqli_fetch_assoc($result);
               ?>
                <strong><?php echo($n['co']);?> Ads</strong>
              </div>
            </a>
          </div>
          
           
        </div>
      </div>
    </section>
    <!-- Trending Categories Section End -->

    <!-- Featured Section Start -->
    <section class="featured section-padding">
      <div class="container">
        <h1 class="section-title">Recent Ads</h1>
        <div class="row">
        
        <?php
                
               include_once 'DBconfig.php';
               
                $sql = "SELECT * FROM advertise, users  where users.UserID= advertise.UID ORDER BY advertise.date DESC LIMIT 6  ";
              
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_assoc($result))
                {
               ?>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
            <div class="featured-box">
              <figure>
                <div class="icon">
                  <a href="con_wishlist.php?id=<?php echo($row['AdID']); ?>" onclick="return confirm('Add to wishlist.')"><i class="lni-heart"></i></a>
                </div>
                <a href="#"><img style="width:320px; height: 215px ; " class="img-fluid" src="upload/<?php echo($row['image']); ?>" alt=""></a>
              </figure>
             
              <div class="feature-content">
                <div class="tg-product">
                  <a href="#"><?php echo($row['categories']); ?></a>
                </div>
                <h4><a href="ads-details.php?id=<?php echo($row['AdID']); ?>"><?php echo($row['title']); ?></a></h4>
                <span>Last Updated: 5 hours ago</span>
                <ul class="address">
                  <li>
                    <a href="#"><i class="lni-map-marker"></i> <?php echo($row['city']); ?></a>
                  </li>
                  <li>
                    <a href="#"><i class="lni-alarm-clock"></i> <?php echo($row['date']); ?></a>
                  </li>
                  <li>
                    <a href="#"><i class="lni-user"></i> <?php echo($row['username']); ?></a>
                  </li>
                  <li>
                    <a href="#"><i class="lni-package"></i> Used</a>
                  </li>
                </ul>
                <div class="btn-list">
                  <a class="btn-price" href="#">Rs : <?php echo($row['price']); ?></a>
                  <a class="btn btn-common" href="ads-details.php?id=<?php echo($row['AdID']); ?>">
                    <i class="lni-list"></i>
                    View Details
                  </a>
                </div>
              </div>
             
            </div>
          </div>
         <?php
                }
         ?>
        </div>
      </div>
    </section>
    <!-- Featured Section End -->

    <!-- Featured Listings Start -->
    <section class="featured-lis section-padding" >
      <div class="container">
        <div class="row">
          <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
            <h3 class="section-title">Featured Products</h3>
            <div id="new-products" class="owl-carousel">
            <?php
                
               include_once 'DBconfig.php';
               
                $sql = "SELECT * FROM advertise, users  where users.UserID= advertise.UID ORDER BY advertise.date DESC LIMIT 6  ";
              
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_assoc($result))
                {
               ?>
              <div class="item">
                <div class="product-item">
              
                  <div class="carousel-thumb">
                  
                    <img class="img-fluid" style="width:320px; height: 215px ; " src="upload/<?php echo($row['image']);?>" alt=""> 
                    <div class="overlay">
                    </div> 
                    <span class="price">Rs : <?php echo($row['price']);?></span>
                  </div>    
                  <div class="product-content">
                    <h3 class="product-title"><a href="ads-details.php"><?php echo($row['title']);?></a></h3>
                    <a href="#"><i class="lni-bookmark"></i><?php echo($row['city']);?></a>
                   
                    <div class="icon">
                    <a href="con_wishlist.php?id=<?php echo($row['AdID']); ?>" onclick="return confirm('Add to wishlist.')"><i class="lni-heart"></i></a>
                    </div> 
                    <div class="card-text">
                      <div class="meta">
                       
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                }
              ?>
              
            </div>
          </div> 
        </div>
      </div>
    </section>
    <!-- Featured Listings End -->

   
     <!-- Counter Area Start-->
     <section class="counter-section section-padding">
      <div class="container">
        <div class="row">
          <!-- Counter Item -->
          <div class="col-md-3 col-sm-6 work-counter-widget text-center">
            <div class="counter">
              <div class="icon"><i class="lni-layers"></i></div>
              
              <p>Regular Ads</p>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-3 col-sm-6 work-counter-widget text-center">
            <div class="counter">
              <div class="icon"><i class="lni-map"></i></div>
              
              <p>All India Locations</p>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-3 col-sm-6 work-counter-widget text-center">
            <div class="counter">
              <div class="icon"><i class="lni-user"></i></div>
              
              <p>Reguler Members</p>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-3 col-sm-6 work-counter-widget text-center">
            <div class="counter">
              <div class="icon"><i class="lni-briefcase"></i></div>

              <p>Genuine Ads</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Area End-->


    
    

<?php 
include('parts/footer.php')
?>