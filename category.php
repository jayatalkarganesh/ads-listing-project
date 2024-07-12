<?php
include('parts/header.php')

?>
      <!-- Hero Area Start -->
      <div id="hero-area" style="background: url(assets/img/hero19-area.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
              <div class="contents-ctg">
                <div class="search-bar">
                  <fieldset>
                    <form action="category.php"  method="get">
                      <div class="form-group tg-inputwithicon">
                        <i class="lni-tag"></i>
                        <input type="text" name="search" class="form-control" placeholder="What are you looking for">
                      </div>
                      <div class="form-group tg-inputwithicon">
                        <i class="lni-map-marker"></i>
                        <input type="text" name="city" class="form-control" placeholder="Enter city">
                      </div>
                      <div class="form-group tg-inputwithicon">
                        <i class="lni-layers"></i>
                        <div class="tg-select">
                          <select name="category">
                          
                          <option value="0">-- Select Categories--</option>
                          <option value="vegetables">Vegetables</option>
                          <option value="fruits">Furits</option>
                          <option value="grains">Grains</option>
                          <option value="nuts">Nuts</option>
                          </select>
                        </div>
                      </div>
                      <input class="btn btn-common" type="submit" value="Search">
                    </form>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->
    </header>
    <!-- Header Area wrapper End -->

    <!-- Main container Start -->  
    <div class="main-container section-padding">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-9 col-md-12 col-xs-12 page-content">
            <!-- Product filter Start -->
            <div class="product-filter">
              <div class="short-name">
                
              </div>
              <div class="Show-item">
                
               
              </div>
              <ul class="nav nav-tabs">
                
                
                <span>Short by</span> &nbsp;&nbsp;
                <form action="category.php" method="get">
                  <label>
                    <select onchange="" name="order">
                      
                      <option value="popularity" >popularity</option>
                      <option value="high-low">price-High to low</option>
                      <option value="new">new</option>
                      <option value="low-high">price-Low to high</option>
                    </select>
                  </label>
                  <input type="submit" value="Apply">
                </form>
              </ul>
            </div>
            <!-- Product filter End -->

            <!-- Adds wrapper Start -->
            <div >
              <div >
                <div  >
                  <div class="row">
                  <?php 
                    //Get DB products and display them
                    include_once 'DBconfig.php';
                    $limit = 10;  // Number of entries to show in a page. 
                    // Look for a GET variable page if not found default is 1.      
                    if (isset($_GET["page"])) {  
                      $pn  = $_GET["page"];  
                    }  
                    else {  
                      $pn=1;  
                    };   
                  
                    $start_from = ($pn-1) * $limit;   
                  
                    $sql = "SELECT * FROM table1 LIMIT $start_from, $limit";   
                    

                    if (isset($_GET['order']) && $_GET['order']=="popularity"){
                      $sql="SELECT * FROM advertise, users where users.UserID= advertise.UID LIMIT $start_from, $limit";
                     
                    }
                    else if (isset($_GET['order']) && $_GET['order']=="high-low"){
                        $sql= "SELECT * FROM advertise , users  where users.UserID= advertise.UID ORDER BY advertise.price DESC LIMIT $start_from, $limit ";
                        
                      }
                    else if (isset($_GET['order']) && $_GET['order']=="new"){
                    $sql= "SELECT * FROM advertise, users  where users.UserID= advertise.UID ORDER BY advertise.AdID DESC  LIMIT $start_from, $limit    ";
                  
                  }
                  else if (isset($_GET['order']) && $_GET['order']=="low-high"){
                    $sql= "SELECT * FROM advertise, users  where users.UserID= advertise.UID ORDER BY advertise.price ASC LIMIT $start_from, $limit   ";
                    
                  }
                    //else if (isset($_GET['city']) ){
                      //$city=$_GET['city'];
                      //$sql= "SELECT * FROM advertise, users  where users.UserID= advertise.UID AND users.city= '$city'   ";
                      //echo( $_GET['category']);
                      //echo($city);
                      //}
                      
                    
                      else if (isset($_GET['category'] ) && $_GET['category']=="0" ){
                      
                        $sql= "SELECT * FROM advertise, users where users.UserID= advertise.UID  LIMIT $start_from, $limit";
                      
                     }
                     else if (isset($_GET['category'] ) && $_GET['category']=="0" && isset($_GET['city']) ){
                      $categoryname1=$_GET['category'];
                      $city1=$_GET['city'];
                    
                      $sql= "SELECT * FROM advertise, users where users.UserID= advertise.UID AND advertise.categories = '$categoryname1', users.city = '$city1'  LIMIT $start_from, $limit";
                    }
                      else if (isset($_GET['category'] )  ){
                        $categoryname=$_GET['category'];
                       $sql= "SELECT * FROM advertise, users   where users.UserID= advertise.UID AND
                         advertise.categories = '$categoryname' LIMIT $start_from, $limit";
                     
                    }
                  
                    else if (isset($_GET['city']) ){
                      $city=$_GET['city'];
                      $sql= "SELECT * FROM advertise, users  where users.UserID= advertise.UID AND users.city= '$city' LIMIT $start_from, $limit   ";
                      echo( $_GET['category']);
                      echo($city);
                      }
                    else {
                      $sql="SELECT * FROM advertise, users where users.UserID= advertise.UID LIMIT $start_from, $limit";
                      
                    }
                   
                    $result = mysqli_query($con, $sql);
                    if(mysqli_num_rows($result)>0){
                   
                      while($row = mysqli_fetch_assoc($result)){
                     
                          ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <div class="featured-box">
                        <figure>
                          <div class="icon">
                            <a href="con_wishlist.php?id=<?php echo($row['AdID']); ?>" onclick="return confirm('Add to wishlist.')"><i class="lni-heart"></i></a>
                          </div>
                          <a href="#"><img class="img-fluid" style="width: 370px; height: 300px; " src="upload/<?php echo($row['image'])?>" alt=""></a>
                        </figure>
                        <div class="feature-content">
                          <div class="tg-product">
                            <a href="#"><?php echo($row['categories']); ?></a>
                          </div>
                          <h4><a href="ads-details.html"><?php echo($row['title']); ?></a></h4>
                          <span>Last Updated: 4 hours ago</span>
                          <ul class="address">
                            <li>
                              <a href="#"><i class="lni-map-marker"></i><?php echo($row['city']); ?></a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-alarm-clock"></i><?php echo($row['date']); ?></a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-user"></i> <?php echo($row['username']); ?></a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-tag"></i> <?php echo($row['categories']); ?></a>
                            </li>
                          </ul>
                          <div class="btn-list">
                            <a class="btn-price" href="#">rs:<?php echo($row['price']); ?></a>
                            <a class="btn btn-common"  href="ads-details.php?id=<?php echo($row['AdID']); ?>">
                              <i class="lni-list"></i>
                              View Details
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                      <?php
                         }
                        }else{
                          ?>
                          <div style="color:red;">No products found in our catalog</div>
                        <?php
                        }
                       
                      ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Adds wrapper End -->
      
            <!-- Start Pagination -->
            <div class="pagination-bar">
     
        <nav>
        <ul class="pagination">
                 <?php   
        $sql = "SELECT COUNT(*) FROM advertise";   
        $result = mysqli_query($con,$sql);   
        $row = mysqli_fetch_row($result);   
        $total_records = $row[0];   
          
        // Number of pages required. 
        $total_pages = ceil($total_records / $limit);   
        $pagLink = "";                         
        for ($i=1; $i<=$total_pages; $i++) { 
          if ($i==$pn) { 
            
              $pagLink .= "<li  class='page-item' class='active'><a class='page-link active' href='category.php?page="
              .$i."'>".$i."</a></li>";
              
          }             
          else  { 
              $pagLink .= "<li class='page-item'><a class='page-link' href='category.php?page=".$i."'> 
                                                ".$i."</a></li>";   
          } 
        }; 
          
         echo ($pagLink);
         ?>
        </ul>
      </nav> 
          
            </div>
            <!-- End Pagination -->
            
          </div>
        </div>
      </div>
    </div>
    <!-- Main container End -->  
<?php
include("parts/footer.php");

?>