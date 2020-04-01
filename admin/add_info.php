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
                <h1>Add Information</h1>
                <?php 
                  // Adding new category and sub-category
                  if(isset($_POST['add_data'])){
                    $category = $_POST['category'];
                    $sub_cat = $_POST['sub_cat'];
                    $query_add = mysqli_query($conn,"insert into data_item (category,sub_cat) values ('$category','$sub_cat')");
                    if($query_add === TRUE){
                      echo '<div class="alert message-success">Category and Sub-Category Added Successfully</div>';
                    }
                    else{
                    echo '<div class="alert message-danger">Error Adding Data</div>';
                  }
                  }

                  // Adding new region
                  if(isset($_POST['add_region'])){
                    $country = $_POST['country'];
                    $state = $_POST['state'];
                    $city = $_POST['city'];
                    $pincode = $_POST['pincode'];
                    $query_add = mysqli_query($conn,"insert into region (country, state, city, pincode) values ('$country','$state','$city','$pincode')");
                    if($query_add === TRUE){
                      echo '<div class="alert message-success">Region Added Successfully</div>';
                    }
                    else{
                    echo '<div class="alert message-danger">Error Adding Region</div>';
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
        <h2><center>Add Data to Database</center></h2>
        <div class="row">

          <!-- Adding New category and sub-category -->
          <div class="col-md-6"> 
            <p>To Add New Region</p>
            <form method="post" action="">
              <div class="form-group">
                <input type="text" placeholder="Country" name="country" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="text" placeholder="State" name="state" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="text" placeholder="City" name="city" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="text" placeholder="Pincode" name="pincode" class="form-control" required>
              </div>
              <div>
                <button class="btn btn-primary text-white" name="add_region">Submit</button>
              </div>
            </form>
          </div>

          <!-- Adding new region -->
          <div class="col-md-6 "> 
            <p>To Add New Category and Sub-Category</p>
            <form method="post" action="">
              <div class="form-group">
                <input type="text" placeholder="Category" name="category" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="text" placeholder="Sub-Category" name="sub_cat" class="form-control" required>
              </div>
              <div>
                <button class="btn btn-primary text-white" name="add_data">Submit</button>
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