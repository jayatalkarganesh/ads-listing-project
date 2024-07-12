<?php
session_start();
if($_SESSION['login']!=='a')
{
  header("location:login.php");
}
include('parts/header.php')
?>
    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/hero2-area.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">My Favorites</h2>
              <ol class="breadcrumb">
                <li><a href="#"></a></li>
                
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->  

    <?php
    include('parts/startcontent.php')
    ?>
              <div class="widget">
                <h4 class="widget-title"></h4>
                
              </div>
            </aside>
          </div>

          <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="page-content">
              <div class="inner-box">
                <div class="dashboard-box">
                  <h2 class="dashbord-title">My Favourites</h2>
                </div>
                <div class="dashboard-wrapper">
                <?php
                  include_once 'DBconfig.php';
                $sql="SELECT COUNT(AdID) as co FROM wishlist";
              $result= mysqli_query($con,$sql);
              $n=mysqli_fetch_assoc($result);
               ?>
                 <nav class="nav-table">
                    <ul>
                      <li class="active"><a href="#">Toal Ads : <?php echo($n['co']);?> </a></li>
                    </ul>
                  </nav>
                  <table class="table dashboardtable tablemyads">
                    <thead>
                      <tr>
                        <th>
                          <span class="checkbox">
                            <input id="checkedall" type="checkbox" name="myads" value="checkall">
                            <label for="checkedall"></label>
                          </span>
                        </th>
                        <th>Photo</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <?php
                    $name1=$_SESSION['uid'];
            include_once 'DBconfig.php';
          
            $sql = "SELECT * FROM advertise, wishlist WHERE  advertise.AdID = wishlist.AdID";

            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($result))
            {
              ?>
                    <tbody>
                      <tr data-category="active">
                        <td>
                          <span class="checkbox">
                            <input id="adone" type="checkbox" name="myads" value="myadone">
                            <label for="adone"></label>
                          </span>
                        </td>
                        <td class="photo"><img class="img-fluid" src="upload/<?php echo($row['image']); ?>" alt=""></td>
                        <td data-title="Title">
                          <h3><?php echo($row['title']); ?></h3>
                          <span>Ad ID: <?php echo($row['AdID']); ?></span>
                        </td>
                        <td data-title="Category"><span class="adcategories"><?php echo($row['categories']); ?></span></td>
                        <td data-title="Price">
                          <h3>Rs : <?php echo($row['price']); ?></h3>
                        </td>
                        <td data-title="Action">
                          <div class="btns-actions">
                            <a class="btn-action btn-view" href="ads-details.php?id=<?php echo($row['AdID']); ?>"><i class="lni-eye"></i></a>
                            
                            <a class="btn-action btn-delete" href="con_deleteads1.php?id=<?php echo($row['AdID']); ?>" onclick="return confirm('Are you sure you want to delete?')"><i class="lni-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                      
                     
                    </tbody>
                    <?php
            }
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>      
    </div>
    <!-- End Content -->

<?php
include('parts/footer.php')
?>