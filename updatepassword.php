<?php
session_start();
if($_SESSION['login']!=='a')
{
  header("location:login.php");
}
include('parts/header.php')
?>
      <!-- Navbar End -->
    
    <!-- Header Area wrapper End -->

    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/hero2-area.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">Edit Details</h2>
              <ol class="breadcrumb">
                <li><a href="index.php">Home /</a></li>
                <li class="current">Edt Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->  

    <?php
    include('parts/startcontent.php');
    ?>
              <div class="widget">
                <h4 class="widget-title"></h4>
                
              </div>
            </aside>
          </div>
      
          <div class="col-sm-12 col-md-8 col-lg-9">
          <?php
          if(isset($_SESSION['edit']))
          {
            ?>
         <div>
          <h6 sytle="padding-left:110px;color:green">Edit Successfully</h6>
       </div>
          <?php
           unset($_SESSION['edit']);
          }
          elseif(isset($_SESSION['edit1'])){
          ?>
          <h6 sytle="padding-left:110px;color:green">Edit Unsccessful</h6>
          <?php
           unset($_SESSION['edit1']);
          }
          
          ?>
          <?php
            include_once("DBconfig.php");
            $sql="select * from users where UserID='$name1'";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($result);

          ?>

            <div class="row page-content">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                <div class="inner-box">
                  <div class="dashboard-box">
                    <h2 class="dashbord-title">Edit Detail</h2>
                  </div>
                  <form action="con_updatepassword.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="uid" value="<?php echo($row['UserID']); ?>">
                    <div class="form-group mb-3">
                      <label class="control-label">Username</label>
                      <input class="form-control input-md" value="<?php echo($row['username']); ?>" name="username" placeholder="Username" type="text">
                    </div>
                    <div class="form-group mb-3">
                      <label class="control-label">Email</label>
                      <input class="form-control input-md" value="<?php echo($row['email']); ?>" name="email" placeholder="Email" type="text">
                      <div class="tg-checkbox">
                        
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <label class="control-label">Password</label>
                      <input class="form-control input-md" value="<?php echo($row['password']); ?>" name="password" placeholder="Password" type="text">
                      <div class="tg-checkbox">
                        
                      </div>
                    </div>

                    </div>
                    <div class="form-group mb-3">
                      <label class="control-label">Phone Number</label>
                      <input class="form-control input-md" value="<?php echo($row['phone']); ?>" name="phone" placeholder="Phone Number" type="text">
                      <div class="tg-checkbox">
                        
                      </div>
                    </div>
                  
                    <div class="form-group mb-3">
                      <label class="control-label">State</label>
                      <input class="form-control input-md" value="<?php echo($row['state']); ?>" name="state" placeholder="State" type="text">
                      <div class="tg-checkbox">
                        
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <label class="control-label">City</label>
                      <input class="form-control input-md" value="<?php echo($row['city']); ?>" name="city" placeholder="City" type="text">
                      <div class="tg-checkbox">
                        
                      </div>
                    </div>
                   
                    <button class="btn btn-common" type="submit">Edit </button>
                  </div>
                  </form>
                </div>
              </div>
             
            </div>
          </div>
        </div>  
      </div>      
    </div>
    <!-- End Content -->

<?php 
include("parts/footer.php");
?>