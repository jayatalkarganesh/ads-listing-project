<?php
session_start();
if($_SESSION['login']!=='a')
{
  header("location:login.php");
}
include('parts/header.php');
$name1=$_SESSION['uid'];
?>
    <!-- Header Area wrapper End -->

    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/hero2-area.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">Dashbord</h2>
              <ol class="breadcrumb">
                <li><a href="#"></a></li>
                <li class="current"></li>
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
                  <h2 class="dashbord-title">Dashboard</h2>
                </div>
                <div class="dashboard-wrapper">
                  <div class="dashboard-sections">
                    <div class="row">
                    <?php
                  include_once 'DBconfig.php';
                $sql="SELECT COUNT(UID) as co FROM advertise WHERE UID='$name1' ";
              $result= mysqli_query($con,$sql);
              $n=mysqli_fetch_assoc($result);
               ?>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="dashboardbox">
                          <div class="icon"><i class="lni-write"></i></div>
                          <div class="contentbox">
                            <h2><a href="#">Total Ad Posted</a></h2>
                            <h3><?php echo($n['co']);?> Add Posted</h3>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <table class="table dashboardtable tablemyads">
                    <thead>
                      <tr>
                     
                        <th>Photo</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Ad Status</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <?php
                    
            include_once 'DBconfig.php';

            $sql = "SELECT AdID,UID, title, categories, price, image FROM advertise WHERE UID=$name1";

            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
                    <tbody>
                      <tr data-category="active">
                        
                        <td class="photo"><img class="img-fluid" src="upload/<?php echo($row['image']); ?>" alt=""></td>
                        <td data-title="Title">
                          <h3><?php echo($row['title']); ?></h3>
                          <span>Ad ID: <?php echo($row['AdID']); ?></span>
                        </td>
                        <td data-title="Category"><span class="adcategories"><?php echo($row['categories']); ?></span></td>
                        <td data-title="Ad Status"><span class="adstatus adstatusactive">active</span></td>
                        <td data-title="Price">
                          <h3>Rs:<?php echo($row['price']); ?></h3>
                        </td>
                        <td data-title="Action">
                          <div class="btns-actions">
                            <a class="btn-action btn-view" href="seemyads.php?id=<?php echo($row['AdID']); ?>"><i class="lni-eye"></i></a>
                            <a class="btn-action btn-edit" href="editads.php?id=<?php echo($row['AdID']); ?>"><i class="lni-pencil"></i></a>
                            <a class="btn-action btn-delete" href="con_deleteads.php?id=<?php echo($row['AdID']); ?>" onclick="return confirm('Are you sure you want to delete?')"><i class="lni-trash"></i></a>
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