<?php session_start();
  if(empty($_SESSION['id']) || $_SESSION['type'] == ''){
    header("Location: index.php");
    die();
}
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
     
      navbar(); 
     
      ?>
    <!-- header2 -->
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(../images/bg1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Dashboard</h1>

              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <!-- Basic Website information -->
        <div class="row row-gap">
                <div class="card text-white bg-primary mb-3" style="width: 12rem; margin-right: auto;">
                  <div class="card-header text-center">Business Owner</div>
                  <div class="card-body">
                    <?php
                      $sql = mysqli_query($conn,"Select count(*) as count from business_owner");
                      $row = $sql->fetch_assoc();
                      echo '<h1><center>'.$row['count'].'</center></h1>';
                      
                    ?>
                    <!-- <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  </div>
                </div>
                <div class="card text-white bg-warning mb-3" style="width: 12rem; margin-right: auto;">
                  <div class="card-header text-center">Customers</div>
                  <div class="card-body">
                    <?php
                      $sql = mysqli_query($conn,"Select count(*) as count from customer");
                      $row = $sql->fetch_assoc();
                      echo '<h1><center>'.$row['count'].'</center></h1>';
                    ?>
                    <!-- <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  </div>
                </div>
                <div class="card text-white bg-success mb-3" style="width: 12rem; margin-right: auto;">
                  <div class="card-header text-center">Online</div>
                  <div class="card-body">
                    <?php
                      $sql = mysqli_query($conn,"SELECT sum(count) from (SELECT Count( * ) AS count FROM customer where active='1' UNION All  SELECT Count( * ) AS count FROM business_owner where active='1')T");
                      $row = $sql->fetch_assoc();
                      echo '<h1><center>'.$row['sum(count)'].'</center></h1>';
                    ?>
                    <!-- <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  </div>
                </div>
                <div class="card text-white bg-danger mb-3" style="width: 12rem; margin-right: auto;">
                  <div class="card-header text-center">Category</div>
                  <div class="card-body">
                    <?php
                      $sql = mysqli_query($conn,"SELECT distinct count(category) as count from data_item");
                      $row = $sql->fetch_assoc();
                      echo '<h1><center>'.$row['count'].'</center></h1>';
                    ?>
                    <!-- <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  </div>
                </div>
        </div>
        <!-- Basic Website information -->
        <div class="row">
                <div class="card text-white bg-primary mb-3" style="width: 12rem; margin-right: auto;">
                  <div class="card-header text-center">Sub-Category</div>
                  <div class="card-body">
                    <?php
                      $sql = mysqli_query($conn,"SELECT count(sub_cat) as count from data_item");
                      $row = $sql->fetch_assoc();
                      echo '<h1><center>'.$row['count'].'</center></h1>';
                      
                    ?>
                    <!-- <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  </div>
                </div>
                <div class="card text-white bg-warning mb-3" style="width: 12rem; margin-right: auto;">
                  <div class="card-header text-center">Country</div>
                  <div class="card-body">
                    <?php
                      $sql = mysqli_query($conn,"SELECT distinct count(country) as count from region");
                      $row = $sql->fetch_assoc();
                      echo '<h1><center>'.$row['count'].'</center></h1>';
                    ?>
                    <!-- <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  </div>
                </div>
                <div class="card text-white bg-success mb-3" style="width: 12rem; margin-right: auto;">
                  <div class="card-header text-center">State</div>
                  <div class="card-body">
                    <?php
                      $sql = mysqli_query($conn,"SELECT distinct count(state) as count from region");
                      $row = $sql->fetch_assoc();
                      echo '<h1><center>'.$row['count'].'</center></h1>';
                    ?>
                    <!-- <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  </div>
                </div>
                <div class="card text-white bg-danger mb-3" style="width: 12rem; margin-right: auto;">
                  <div class="card-header text-center">City</div>
                  <div class="card-body">
                    <?php
                      $sql = mysqli_query($conn,"SELECT distinct count(city) as count from region");
                      $row = $sql->fetch_assoc();
                      echo '<h1><center>'.$row['count'].'</center></h1>';
                    ?>
                    <!-- <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  </div>
                </div>
        </div>
        <h2><center>View Data Tables</center></h2>
        <!-- <div class="row">
          <div class="col-md-8">
          <div class="form-group">
            <select class="form-control" name="user_type">
              <option value="">Select type of User</option>
              <option value="customer">Customer</option>
              <option value="business_owner">Business Owner</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="user_type">
              <option value="">Select type of Search</option>
              <option value="category">Category</option>
              <option value="sub_cat">Sub-Category</option>
              <option value=""></option>
              <option value=""></option>

            </select>
          </div>
          </div>
        </div> -->
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