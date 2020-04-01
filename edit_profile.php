<?php session_start(); 
  if(empty($_SESSION['id']) || $_SESSION['type'] == ''){
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
                <h1>Edit Profile</h1>
                <?php
                    include('config.php');
                    if(isset($_POST['btn-submit'])){
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $country = $_POST['country'];
                    $city = $_POST['city'];
                    $area = $_POST['area'];
                      $sql = mysqli_query($conn,"update customer set firstname='$firstname', lastname='$lastname',email='$email',mobile='$mobile',country='$country',city='$city',area='$area' where id='$id'");  
                    
                  }
                ?>  
                <?php
                    include('config.php');
                    if(isset($_POST['btn-submit2'])){
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $category = $_POST['category'];
                    $sub_cat = $_POST['sub_cat'];
                    $country = $_POST['country'];
                    $city = $_POST['city'];
                    $area = $_POST['area'];
                      $sql = mysqli_query($conn,"update business_owner set firstname='$firstname', lastname='$lastname',email='$email',mobile='$mobile',category='$category',sub_cat='$sub_cat',country='$country',city='$city',area='$area'  where id='$id'");  
                    
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
        include('config.php');
        
           $sql2=mysqli_query($conn,"SELECT * FROM customer WHERE id=$id");
           while($row=mysqli_fetch_array($sql2)){
           
        echo '<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            

            <form action="" method="post" class="p-5 bg-white" style="margin-top: -150px;">
             
              <h4><center>Customer</center></h4>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control" name="firstname" value="'.$row['firstname'].'" required>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control" name="lastname" value="'.$row['lastname'].'" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control" name="email" value="'.$row['email'].'" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="mobile">Mobile</label> 
                  <input type="mobile" id="mobile" class="form-control" value="'.$row['mobile'].'" name="mobile" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="country">Country</label> 
                  <input type="text" id="country" class="form-control" value="'.$row['country'].'" name="country" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="city">City</label> 
                  <input type="text" id="city" class="form-control" name="city" value="'.$row['city'].'" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="area">Area</label> 
                  <input type="text" id="area" class="form-control" value="'.$row['area'].'" name="area" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Update Profile" class="btn btn-info btn-md text-white" name="btn-submit">
                </div>
              </div>
            </form>
          
          </div>';
      }
    }
    else if ($_SESSION['type'] == 'owner') {
        
           $sql2=mysqli_query($conn,"SELECT * FROM business_owner WHERE id=$id");
           while($row=mysqli_fetch_array($sql2)){
           
        echo '<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            

            <form action="" method="post" class="p-5 bg-white" style="margin-top: -150px;">
             
              <h4><center>Business Owner</center></h4>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control" name="firstname" value="'.$row['firstname'].'" required>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control" name="lastname" value="'.$row['lastname'].'" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control" name="email" value="'.$row['email'].'" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="mobile">Mobile</label> 
                  <input type="mobile" id="mobile" class="form-control" value="'.$row['mobile'].'" name="mobile" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="category">Category</label> 
                  <input type="text" id="category" class="form-control" name="category" value="'.$row['category'].'" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="sub-category">Sub-Category</label> 
                  <input type="text" id="sub-category" class="form-control" value="'.$row['sub_cat'].'" name="sub_cat" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="country">Country</label> 
                  <input type="text" id="country" class="form-control" value="'.$row['country'].'" name="country" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="city">City</label> 
                  <input type="text" id="city" class="form-control" name="city" value="'.$row['city'].'" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="area">Area</label> 
                  <input type="text" id="area" class="form-control" value="'.$row['area'].'" name="area" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Update Profile" class="btn btn-info btn-md text-white" name="btn-submit2">
                </div>
              </div>
            </form>
          
          </div>';
      }
    }
    ?>

      
        
          <!-- <div class="col-md-6 mb-5">
            <form action="" method="post" class="p-5 bg-white" style="margin-top: -150px;">
              <h4><center>Business Owner</center></h4>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control" name="firstname" required>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control" name="lastname" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control" name="email" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="mobile">Mobile</label> 
                  <input type="text" id="mobile" class="form-control" name="mobile" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="category">Category</label> 
                  <input type="text" id="category" class="form-control" name="category" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="sub-category">Sub-Category</label> 
                  <input type="text" id="sub-category" class="form-control" name="sub-cat" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="country">Country</label> 
                  <input type="text" id="country" class="form-control" name="country" required>
                </div>
              </div>

              <div class="row form-group">
                  
                <div class="col-md-12">
                  <label class="text-black" for="city">City</label> 
                  <input type="text" id="city" class="form-control" name="city" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="area">Area</label> 
                  <input type="text" id="area" class="form-control" name="area" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="pass1">Password</label> 
                  <input type="password" id="pass1" class="form-control" name="pass1" required>
                </div>
              </div>
              
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="pass2">Re-type Password</label> 
                  <input type="password" id="pass2" class="form-control" name="pass2" required>
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Sign Up" class="btn btn-info btn-md text-white" name="btn-submit2">
                </div>
              </div>

  
            </form>
          </div> -->
    
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