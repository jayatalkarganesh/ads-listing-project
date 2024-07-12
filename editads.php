<?php
session_start();
if($_SESSION['login']!=='a')
{
  header("location:login.php");
}
include('parts/header.php');

  extract($_GET);
  if(isset($_GET['id']))
{
  include_once 'DBconfig.php';

  $sql = "select * from advertise where AdID=$id";

  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  
  if(!$row)
  {
    header("Location:ListFriends.php");
    die();
  }

}
?>
<body onload="myFunction()"> 

 
<script> 
		function myFunction() { 
			//document.getElementById( 
            //"mySelect").selectedIndex = "2";
           // temp=$row['categories'];
            document.getElementById('mySelect').value = "<?php echo($row['categories']); ?>"
		} 
    function fun() { 
			//document.getElementById( 
            //"mySelect").selectedIndex = "2";
           // temp=$row['categories'];
           alert("Ad editted successfully");
		} 
	</script>  


<div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">Edit Ads</h2>
              <ol class="breadcrumb">
                <li><a href="index.php">Home /</a></li>
                <li class="current">Edit Ads</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
   
     
      
        
    <div style="padding-top:20px;padding-bottom:20px;" class=" col-md-8  mx-auto">
    <div class="row page-content">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                <div class="inner-box">
                  <div class="dashboard-box">
                  <?php
                  if(isset($_SESSION['edit']))
                  {
                    ?>
                    <h6 style="padding-left:20px; color:green;">Edited successfully <a href="dashboard.php">Go to dashboard</a></h6>   
                 <?php
                 unset($_SESSION['edit']);
                  }
                  ?>
                    <h2 class="dashbord-title">Ad Detail</h2>
                  </div>
                  
                  <form action="con_editads.php" method="post" enctype="multipart/form-data">
                  <div class="dashboard-wrapper">
                    <?php if(isset($_GET['id']))
           {
            ?>
            <input type="hidden" name="AdID" value="<?php echo($row['AdID']); ?>">     
            <?php
          } 
          ?>
                    <div class="form-group mb-3 tg-inputwithicon">
                      <label class="control-label">Categories</label>
                      <div class="tg-select form-control">
                        <select name="categories" id="mySelect">    
                 
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
                      <input class="form-control input-md" name="title"
                      <?php if(isset($_GET['id']))
                {
                  ?>
                      value="<?php echo($row['title']); ?>"  placeholder="Title" type="text">
                      <?php
                } ?>
                    </div>
                    <div class="form-group mb-3">
                      <label class="control-label">Price Title</label>
                      <input class="form-control input-md" name="price"
                      <?php if(isset($_GET['id']))
                {
                  ?> 
                      value="<?php echo($row['price']); ?>" placeholder="Ad your Price" type="text">
                      <?php
                } ?>
                      <div class="tg-checkbox">
                        
                      </div>
                    </div>

                    <div>
                    <label class="control-label">Ad description</label><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name='description'   rows="5">
                    <?php if(isset($_GET['id']))
                {
                  ?>
                    <?php echo($row['description']); ?>
                    <?php
                }
                 ?>
                 </textarea>
                    </div>
                   
                    <label class="tg-fileuploadlabel" for="tg-photogallery">
                      <span>Drop files anywhere to upload</span>
                      <span>Or</span>
                      
                      <span>Maximum upload file size: 500 KB</span>
                      <input class="btn btn-common" type="file" name="image"
                      <?php if(isset($_GET['id']))
                {
                  ?> 
                      value="<?php echo($row['image']); ?>" >
                      <?php
                }
                 ?>
                    
                    </label>
                   
                    <button class="btn btn-common" type="submit" onclick="fun()">Edit Ad</button>
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
    </body>
    <?php
include("parts/footer.php");
    ?>