<?php
  session_start();
  if(empty($_SESSION['id']) || $_SESSION['type'] == ''){
    header("Location: signin.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Speakbazaar</title>
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
    <?php include('method.php');
     if(isset($_SESSION["id"])){
        navbar2();
      }
      ?>
    

  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/bg1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Profile</h1>
                <?php 
                        include('config.php');
                          if(isset($_POST['upload'])) {
                              $target = "uploads/".basename($_FILES['image']['name']);
                              $image = $_FILES['image']['name'];
                              $sql = "update business_owner set image='$image' where id='".$_SESSION['id']."'";
                              if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                              }
                              if($conn->query($sql) === TRUE){
                                  echo "<script><div class='alert message-success '></div></script>";
                                }

                            }
                 ?>
                <p class="mb-0"></p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
       <div class="row justify-content-center mb-5">
          <!-- <div class="col-md-7 text-center border-primary"> -->
            <div class="listing-image">
              <?php 
                $sql = mysqli_query($conn, "select * from business_owner where id='".$_SESSION['id']."'");
                while ($row = mysqli_fetch_array($sql)) {
               ?>
                <img src="uploads/<?php echo $row['image']; ?>" alt="Free Website Template by Free-Template.co" class="img-fluid profile-img">
              <?php } ?>
              </div>

          <!-- </div> -->
        </div>


        <div class="row justify-content-center">
          <div class="col-8">
            <div class="border p-3 rounded mb-2" >
              <form method="post" action="" enctype="multipart/form-data">
              <input type="hidden" name="size" value="1000000">
                <input type="file" name="image" class="accordion-item h5 d-block mb-0 text-center">
              <button class="btn btn-primary" name="upload">Upload</button>
              </form>
            </div>
            <div class="border p-3 rounded mb-2">
              <a href="edit_profile.php" class="accordion-item h5 d-block mb-0 text-center">Edit Profile</a>
            </div>

            <div class="border p-3 rounded mb-2">
              <a href="change_password.php" class="accordion-item h5 d-block mb-0 text-center">Change Password</a>
            </div>

            <div class="border p-3 rounded mb-2">
              <a data-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="collapse-2" class="accordion-item h5 d-block mb-0 text-center">Delete Account</a>
            </div>

            <div class="border p-3 rounded mb-2">
              <a href="signout.php" class="accordion-item h5 d-block mb-0 text-center">Signout</a>
              </div>
            </div>
          </div>
          
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