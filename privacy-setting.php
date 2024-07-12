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
              <h2 class="product-title">Privacy Setting</h2>
              <ol class="breadcrumb">
                <li><a href="index.php">Home /</a></li>
                <li class="current">Privacy Setting</li>
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
                  <h2 class="dashbord-title">Privacy Settings</h2>
                </div>
                <div class="dashboard-wrapper">
                  <form class="row form-dashboard">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                      <div class="privacy-box privacysetting">
                        <div class="dashboardboxtitle">
                          <h2>Settings</h2>
                        </div>
                        <div class="dashboardholder">
                          <ul>
                            <li>
                              <div class="checkbox">
                                <input id="privacysettingsone" type="checkbox" name="privacy settings" value="yes" checked="">
                                <span>Make my profile photo public</span>
                              </div>
                            </li>
                            <li>
                              <div class="checkbox">
                                <input id="privacysettingstwo" type="checkbox" name="privacy settings" value="yes" checked="">
                                <span>I want to receive monthly newsletter</span>
                              </div>
                            </li>
                            <li>
                              <div class="checkbox">
                                <input id="privacysettingsthree" type="checkbox" name="privacy settings" value="no">
                                <span>I want to receive e-mail notifications of offers/messages</span>
                              </div>
                            </li>
                            <li>
                              <div class="checkbox">
                                <input id="privacysettingsfour" type="checkbox" name="privacy settings" value="yes" checked="">
                                <span>I want to receive e-mail alerts about new listings</span>
                              </div>
                            </li>
                            <li>
                              <div class="checkbox">
                                <input id="privacysettingsfive" type="checkbox" name="privacy settings" value="no">
                                <span>Enable offers/messages option in all my ads Post</span>
                              </div>
                            </li>
                          </ul>
                          <button class="btn btn-common" type="submit">Update</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                      <div class="privacy-box deleteaccount">
                        <div class="dashboardboxtitle">
                          <h2>Delete Account</h2>
                        </div>
                        <div class="dashboardholder">
                          <div class="form-group">
                            <div class="tg-select form-control">
                              <div class="select">
                                <select>
                                  <option>Select Reason</option>
                                  <option>Select Reason</option>
                                  <option>Select Reason</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" placeholder="Description"></textarea>
                          </div>
                          <button class="btn btn-common" type="button">Delete</button>
                        </div>
                      </div>
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
include('parts/footer.php')
?>