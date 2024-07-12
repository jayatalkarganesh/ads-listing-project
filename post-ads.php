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
              <h2 class="product-title">Post your Ads</h2>
              <ol class="breadcrumb">
                <li><a href="index.php">Home /</a></li>
                <li class="current">Post your Ads</li>
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
          if(isset($_SESSION['success']))
          {
            ?>
         
          <h6 sytle="padding-left:110px;color:green">Ad posted successfully</h6>
       
          <?php
           unset($_SESSION['success']);
          }
          elseif(isset($_SESSION['unsuccess'])){
          ?>
          <h6 sytle="padding-left:110px;color:green">Ad doesnot posted</h6>
          <?php
           unset($_SESSION['success']);
          }
          
          ?>

            <div class="row page-content">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                <div class="inner-box">
                  <div class="dashboard-box">
                    <h2 class="dashbord-title">Ad Detail</h2>
                  </div>
                  <form action="con_post-ads.php" method="post" enctype="multipart/form-data">
                  <div class="dashboard-wrapper">
                    
                    <div class="form-group mb-3 tg-inputwithicon">
                      <label class="control-label">Categories</label>
                      <div class="tg-select form-control">
                        <select name="categories">
                          <option value="none">Select Categories</option>
                          <option value="vegetables">Vegetables</option>
                          <option value="fruits">Furits</option>
                          <option value="grains">Grains</option>
                          <option value="nuts">Nuts</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <label class="control-label">Ad Title</label>
                      <input class="form-control input-md" name="title" placeholder="Title" type="text">
                    </div>
                    <div class="form-group mb-3">
                      <label class="control-label">Price Title</label>
                      <input class="form-control input-md" name="price" placeholder="Ad your Price" type="text">
                      <div class="tg-checkbox">
                        
                      </div>
                    </div>

                    <div>
                    <label class="control-label">Ad description</label><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name='description' rows="5"></textarea>

                    </div>
                   
                    <label class="tg-fileuploadlabel" for="tg-photogallery">
                      <span>Drop files anywhere to upload</span>
                      <span>Or</span>
                      
                      <span>Maximum upload file size: 500 KB</span>
                      <input class="btn btn-common" type="file" name="image">
                    </label>
                    <button class="btn btn-common" type="submit">Post Ad</button>
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