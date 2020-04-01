<?php session_start(); ?>
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

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/rangeslider.css">

    <link rel="stylesheet" href="../css/style.css">
    
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
    <?php include('method.php');
     
      navbar2(); 
     
      ?>
    <!-- header2 -->
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(../images/bg1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Login</h1>
                <?php
                include('../config.php');
                if(isset($_POST['btn-log'])) {
                  $user_id = $_POST['user_id'];
                  $pass3 = $_POST['pass3'];
                  $user_id = stripcslashes($user_id);
                  $pass3 = stripcslashes($pass3);
                  $pass1 = sha1($pass3);
                  $query = mysqli_query($conn,"select * from admin where user_id='$user_id' AND password='$pass1'");
                  $row = $query->fetch_assoc();
                  if($query->num_rows == 1){
                   session_start();
                    $_SESSION["id"] = $row['id'];
                    $_SESSION['type'] = "admin";
                    echo '<script>location.href="dashboard.php"</script>';
                  }
                  else{
                    echo '<div class="alert message-danger">Wrong Email or Password</div>';
                  }
                }
                ?>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">

            

            <form action="" method="post" class="p-5 bg-white" style="margin-top: -150px;">
             
            <h4><center>Administrator</center></h4>
            <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">User ID</label> 
                  <input type="text" id="email2" class="form-control" name="user_id" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="pass1">Password</label> 
                  <input type="password" id="pass3" class="form-control" name="pass3" required>
                </div>
              </div>
              
              

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Log In" class="btn btn-info btn-md text-white" name="btn-log">
                </div>
              </div>

  
            </form>
          </div>
          
        </div>
      </div>
    </div>
    
    <?php footer_1(); ?>
  </div>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/rangeslider.min.js"></script>
  
  <script src="../js/main.js"></script>
  
  </body>
</html>