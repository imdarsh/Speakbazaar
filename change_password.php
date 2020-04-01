<?php session_start(); 
  if(empty($_SESSION['id']) || $_SESSION['user'] == ''){
    header("Location: signin.php");
    die();
}
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Codeurs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="shortcut icon" href="ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <?php
    include('method.php');
    navbar2();
    ?>
    <!-- header2 -->

  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/bg1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Change Password</h1>
                <?php
                    include('config.php');
                    if(isset($_POST['btn-submit'])){
                    $old_pass = $_POST['old_pass'];
                    $new_pass = $_POST['new_pass'];
                    $con_pass = $_POST['con_pass'];
                    $old_pass = sha1($old_pass);
                    $new_pass = sha1($new_pass);
                    $con_pass = sha1($con_pass);
                    $check = mysqli_query($conn, "select * from customer where password='$old_pass' AND id='$id'");
                    if($check->num_rows == 1){
                      if($new_pass === $con_pass){
                        $sql = mysqli_query($conn,"update customer set password='$new_pass'");
                        echo '<div class="alert message-success">Password Changed Successfully</div>';
                      }
                      else {
                        echo '<div class="alert message-danger">Password Does Not Match</div>';
                      }  
                    }
                    else {
                        echo '<div class="alert message-danger">Wrong Old Password</div>';
                      } 
                  }
                ?>  
                <?php
                    include('config.php');
                    if(isset($_POST['btn-submit2'])){
                    $old_pass = $_POST['old_pass'];
                    $new_pass = $_POST['new_pass'];
                    $con_pass = $_POST['con_pass'];
                    $old_pass = sha1($old_pass);
                    $new_pass = sha1($new_pass);
                    $con_pass = sha1($con_pass);
                    $check = mysqli_query($conn, "select * from business_owner where password='$old_pass' AND id='$id'");
                    if($check->num_rows == 1){
                      if($new_pass === $con_pass){
                        $sql = mysqli_query($conn,"update business_owner set password='$new_pass'");
                        echo '<div class="alert message-success">Password Changed Successfully</div>';
                      }
                      else {
                        echo '<div class="alert message-danger">Password Does Not Match</div>';
                      }  
                    }
                    else {
                        echo '<div class="alert message-danger">Wrong Old Password</div>';
                      } 
                  }
                ?>     
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  
    <?php
      if($_SESSION['type'] == 'user'){
           
        echo '<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            

            <form action="" method="post" class="p-5 bg-white" style="margin-top: -150px;">
             
              <h4><center>Customer</center></h4>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Old Password</label> 
                  <input type="password" id="email" class="form-control" name="old_pass" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="mobile">New Password</label> 
                  <input type="password" id="mobile" class="form-control" name="new_pass" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="category">Confirm New Password</label> 
                  <input type="password" id="category" class="form-control" name="con_pass" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Update Password" class="btn btn-info btn-md text-white" name="btn-submit">
                </div>
              </div>
            </form>
          
          </div>';
      }
  
    else if ($_SESSION['type'] == 'owner') {
        
        echo '<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            

            <form action="" method="post" class="p-5 bg-white" style="margin-top: -150px;">
             
              <h4><center>Business Owner</center></h4>

            
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Old Password</label> 
                  <input type="password" id="email" class="form-control" name="old_pass" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="mobile">New Password</label> 
                  <input type="password" id="mobile" class="form-control" name="new_pass" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="category">Confirm New Password</label> 
                  <input type="password" id="category" class="form-control" name="con_pass" required>
                </div>
              </div>

              
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Update Password" class="btn btn-info btn-md text-white" name="btn-submit2">
                </div>
              </div>
            </form>
          
          </div>';
      }
  
    ?>

    
        </div>
      </div>
    </div>
    
    <?php footer_1(); ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  
  <script src="js/main.js"></script>
  
  </body>
</html>