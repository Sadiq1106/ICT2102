<?php session_start();?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>ezTravel - My Bookings</title>
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
      <link rel="stylesheet" href="css/style.css">
      <!--JS-->
      <script src="js/script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
      <!--SCSS-->
      <link rel="stylesheet" href="scss/login.scss"/>
      <style>
         .table-bordered{
         color:black;
         }
      </style>
   </head>
   <body class="form-v8">
      <header>
         <?php
            include "./navbar.php";
            ?>
      </header>
      <body>
         <!-- bradcam_area  -->
         <div class="bradcam_area bradcam_bg_2">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="bradcam_text text-center">
                        <h3>My Bookings</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/ bradcam_area  -->
         <?php
            $u = $_SESSION['MM_Username'];
            define("DBHOST", "rm-gs595dd89hu8175hl6o.mysql.singapore.rds.aliyuncs.com");
            define("DBNAME", "sql1902670ian");
            define("DBUSER", "ict1902670ian");
            define("DBPASS", "NAI0762091");
            $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
            ?>
         <!-----BOOKING HISTORY START--------------------->
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <h1 class="mt-5 text-left">Welcome Back,<?php echo $_SESSION['MM_Username']; ?> </h1>
               </div>
            </div>
         </div>
         <div class="col leftcol">
            <section id="cd-timeline" class="cd-container">
               <div class="cd-timeline-block">
                  <div class="cd-timeline-img cd-picture">
                  </div>
                  <div class="cd-timeline-content">
                     <h2>Day 1</h2>
                     <div class="timeline-content-info">
                        <span class="timeline-content-info-title">
                        <i class="fa fa-certificate" aria-hidden="true"></i>
                        Kyoto
                        </span>
                        <span class="timeline-content-info-date">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                        11 Nov-12 Nov
                        </span>
                     </div>
                     <!-- cd-timeline-content -->
                  </div>
                  <!-- cd-timeline-block -->
                  <div class="cd-timeline-block">
                     <div class="cd-timeline-img cd-movie">
                     </div>
                     <!-- cd-timeline-img -->
                     <div class="cd-timeline-content">
                        <h2>Day 2</h2>
                        <div class="timeline-content-info">
                           <span class="timeline-content-info-title">
                           <i class="fa fa-certificate" aria-hidden="true"></i>
                           Osaka
                           </span>
                           <span class="timeline-content-info-date">
                           <i class="fa fa-calendar-o" aria-hidden="true"></i>
                           13 Nov-14 Nov
                           </span>
                        </div>
                        <!-- cd-timeline-content -->
                     </div>
                     <!-- cd-timeline-block -->
                  </div>
                  <!-- cd-timeline-block -->
                  <div class="cd-timeline-block">
                     <div class="cd-timeline-img cd-picture">
                     </div>
                     <!-- cd-timeline-img -->
                     <div class="cd-timeline-content">
                        <h2>Day 3</h2>
                        <div class="timeline-content-info">
                           <span class="timeline-content-info-title">
                           <i class="fa fa-certificate" aria-hidden="true"></i>
                           Hiroshima
                           </span>
                           <span class="timeline-content-info-date">
                           <i class="fa fa-calendar-o" aria-hidden="true"></i>
                           14 Nov-15 Nov
                           </span>
                        </div>
                        <!-- cd-timeline-content -->
                     </div>
                     <!-- cd-timeline-block -->
                  </div>
                  <!-- cd-timeline-block -->
                  <div class="cd-timeline-block">
                     <div class="cd-timeline-img cd-location">
                     </div>
                     <!-- cd-timeline-img -->
                     <div class="cd-timeline-content">
                        <h2>Day 4</h2>
                        <div class="timeline-content-info">
                           <span class="timeline-content-info-title">
                           <i class="fa fa-certificate" aria-hidden="true"></i>
                           Sumikko
                           </span>
                           <span class="timeline-content-info-date">
                           <i class="fa fa-calendar-o" aria-hidden="true"></i>
                           15 Nov-16 Nov
                           </span>
                        </div>
                        <!-- cd-timeline-content -->
                     </div>
                     <!-- cd-timeline-block -->
                  </div>
                  <!-- cd-timeline-block -->
                  <div class="cd-timeline-block">
                     <div class="cd-timeline-img cd-location">
                     </div>
                  </div>
               </div>
            </section>
            <!-- cd-timeline -->
         </div>
         <!--BOOKING HISTORY END-->
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
         <!-- link that opens popup -->
         <!--     
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
            
            <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
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
         <!--contact js-->
         <script src="js/contact.js"></script>
         <script src="js/jquery.ajaxchimp.min.js"></script>
         <script src="js/jquery.form.js"></script>
         <script src="js/jquery.validate.min.js"></script>
         <script src="js/mail-script.js"></script>
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
