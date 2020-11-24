<?php session_start();?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>ezTravel - Edit Profile</title>
      <!--favicon-->
      <link rel="shortcut icon" type="image/x-icon" href="img/sitang-sleeping.png">
      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- Font-->
      <link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
      <!-- Css -->
      <link rel="stylesheet" href="css/loginstyle.css"/>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/themify-icons.css">
      <link rel="stylesheet" href="css/nice-select.css">
      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/gijgo.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/slick.css">
      <link rel="stylesheet" href="css/slicknav.css">
      <link rel="stylesheet" type="text/css" href="css/main_styles.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
      <link rel="stylesheet" href="css/style.css">
      <!--JS-->
      <script src="js/script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
      <!--SCSS-->
      <link rel="stylesheet" href="scss/login.scss"/>
   </head>
   <body>
   <header>
      <?php
         include "./navbar.php";
         ?>
            </header>
          <?php
         define("DBHOST", "rm-gs595dd89hu8175hl6o.mysql.singapore.rds.aliyuncs.com");
         define("DBNAME", "sql1902670ian");
         define("DBUSER", "ict1902670ian");
         define("DBPASS", "NAI0762091");
         ?>

      <div class="container rounded bg-white mt-5">
         <div class="row">
         <?php
                    
                    $u = $_SESSION['MM_Username'];
                    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                    $sql = $conn->prepare("SELECT * FROM users WHERE first_name = ? ");
                    $sql->bind_param("s", $u);
                    $sql->execute();
                    $result = $sql->get_result();           
                    $userrecord = mysqli_fetch_assoc($result);
                     
         ?>
            <div class="col-md-4 border-right">
               <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                  <img class="rounded-circle mt-5" src="img/vasu.png" width="90">
                  <span class="font-weight-bold"><?php echo $userrecord['first_name']; ?>&nbsp;<?php echo $userrecord['last_name']; ?></span>
                  <span class="text-black-50"><?php echo $userrecord['email']; ?></span>
                  <input type="file" class="btn btn-primary" style="width: 100%; background-color: #2193b0;"> 
               </div>
            </div>
            <div class="col-md-8">
               <div class="p-3 py-5">
               <form name="formeditprofile" method="POST" action="editmyprofilerecord.php?action=add" enctype="multipart/form-data"> 
                  <div class="d-flex justify-content-between align-items-center mb-3">
                     <h6 class="text-left">Edit Profile</h6>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="First name" name="first_name" id="first_name" value="<?php echo $userrecord['first_name']; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $userrecord['user_id']; ?>">
                     </div>
                     <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Last name" name="last_name" id="last_name" value="<?php echo $userrecord['last_name']; ?>">
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-md-6"><input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $userrecord['email']; ?>"></div>
                     <div class="col-md-6"><input type="password" class="form-control"  placeholder="Password" name="password" id="password" value="<?php echo $userrecord['password']; ?>"></div>
                  </div>
                  <input type="hidden" name="user_id" value="<?php echo $userrecord['user_id']; ?>">
                  <div class="mt-5 text-right">
                     <button class="btn btn-primary profile-button" type="submit" name="submit" value="Upload" style="background-color: #2193b0;">Save Profile</button>
   
               </div>
               </form>
               </div>
            </div>
         </div>
      </div>


      <?php
         include "./footer.php";
         ?>
      <!-- Modal -->
      <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="serch_form">
                  <input type="text" placeholder="Search">
                  <button type="submit">search</button>
               </div>
            </div>
         </div>
      </div>
      <!-- JS here -->
      <script src="js/vendor/modernizr-3.5.0.min.js"></script>
      <script src="js/vendor/jquery-1.12.4.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/isotope.pkgd.min.js"></script>
      <script src="js/ajax-form.js"></script>
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/scrollIt.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/nice-select.min.js"></script>
      <script src="js/jquery.slicknav.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/gijgo.min.js"></script>
      <script src="js/slick.min.js"></script>
      <script src="plugins/easing/easing.js"></script>
      <script src="js/main.js"></script>
      <script>
         $('#datepicker').datepicker({
             iconsLibrary: 'fontawesome',
             icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
         });
         
      </script>
   </body>
</html>