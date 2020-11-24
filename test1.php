<?php session_start();?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>ezTravel</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->    
      <link rel="shortcut icon" type="image/x-icon" href="img/sumikko.png">
      <!-- CSS here -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/themify-icons.css">
      <!-- <link rel="stylesheet" href="css/nice-select.css"> -->
      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/gijgo.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/slick.css">
      <link rel="stylesheet" href="css/slicknav.css">
      <link rel="stylesheet" type="text/css" href="css/main_styles.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script>document.getElementsByTagName("html")[0].className += " js";</script>
      <!-- JS here -->
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/custom.js"></script>
      <style>/* Style tab links */
         .tablink {
         color: white;
         float: left;
         border: none;
         outline: none;
         cursor: pointer;
         padding: 14px 16px;
         font-size: 17px;
         width: 25%;
         }
         .tabcontent {
         color: white;
         display: none;
         padding: 100px 20px;
         height: 100%;
         }
         button {
         border: none;
         }
         .popular_places_area {
         padding-top: 50px;
         padding-bottom: 0px;
         background: white;
         }
         body{
         background-color: #fff !important;
         }
         #sticky {
         background-image: url('img/survey.png');
         background-repeat: no-repeat;
         position: sticky;
         position: -webkit-sticky;
         width: 250px;
         height: 300px;
         top: 90px;
         display: flex;
         justify-content: center;
         align-items: center;
         color: #fff;
         float:right;
         }
         .message_box .box{
         margin: 10px 0px;
         padding: 20px;
         border: 1px solid green;
         text-align: center;
         font-weight: bold;
         color: green;
         font-size: 50px;
         }
      </style>
   </head>
   <body>
      <?php
         include "./navbar.php";
         ?>
      <?php
         define("DBHOST", "rm-gs595dd89hu8175hl6o.mysql.singapore.rds.aliyuncs.com");
         define("DBNAME", "sql1902670ian");
         define("DBUSER", "ict1902670ian");
         define("DBPASS", "NAI0762091");
         ?>
      <!-- slider_area_start -->
      <?php
         include "./indexslider.php";
         ?>
      <!-- slider_area_end -->
      <!-- search_start  -->
      <div class="search">
         <!-- Search Contents -->
         <div class="container fill_height">
            <div class="row fill_height">
               <div class="col fill_height">
                  <!-- Search Tabs -->
                  <div class="search_tabs_container">
                     <div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                        <button class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start active" onclick="openPage('Flights', this)">
                        <img src="img/departure.png" alt="">flights
                        </button>
                        <button class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" onclick="openPage('Hotels', this)">
                        <img src="img/suitcase.png" alt="">Hotels
                        </button>
                        <button onclick="openPage('dest', this)" style="display:none;"></button>
                        <button class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" onclick="openPage('Activities', this)">
                        <img src="img/diving.png" alt=""> activities
                        </button>
                     </div>
                  </div>
                  <!-- start FLIGHTS Search Panel -->
                  <div class="search_panel active">
                     <form method="post" action="test1.php" id="flightssearchform" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                        <div class="search_item">
                           <div>destination</div>
                           <input type="text" name="dest" class="destination search_input" placeholder="Enter Destination" required="required">
                        </div>
                        <div class="search_item">
                           <div>from</div>
                           <input type="datetime-local" name="takeoff" class="check_in search_input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_item">
                           <div>to</div>
                           <input type="datetime-local" name="touchdown"  class="check_out search_input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_item">
                           <div>No of pax</div>
                           <select name="adults" id="adults_2" class="dropdown_item_select search_input">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                           </select>
                        </div>
                        <button type="submit" name="submit" class="button search_button">search<span></span><span></span><span></span></button>
                     </form>
                  </div>
                  <!-- end FLIGHTS Search Panel -->
                  <!-- start HOTEL Search Panel -->
                  <div class="search_panel">
                     <form method="post" action="#" id="hotelsearchform" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                        <div class="search_item">
                           <div>destination</div>
                           <input type="text" name="hdest" class="destination search_input" placeholder="Enter Destination" required="required">
                        </div>
                        <div class="search_item">
                           <div>from</div>
                           <input type="datetime-local" name="hfrom"  class="check_in search_input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_item">
                           <div>to</div>
                           <input type="datetime-local" name="hto" class="check_out search_input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_item">
                           <div>No of pax</div>
                           <select name="adults" id="adults_3" class="dropdown_item_select search_input">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                           </select>
                        </div>
                        <button type="submit" name="submit" class="button search_button">search<span></span><span></span><span></span></button>
                     </form>
                  </div>
                  <!-- end HOTEL Search Panel -->
                  <!-- start ACTIVITIES Search Panel -->
                  <div class="search_panel">
                     <form method="post" action="#" id="activitysearchform" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                        <div class="search_item">
                           <div>destination</div>
                           <input type="text" name="state_name" class="destination search_input" placeholder="Enter Destination" required="required">
                        </div>
                        <div class="search_item">
                           <div>from</div>
                           <input type="datetime-local" class="check_in search_input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_item">
                           <div>to</div>
                           <input type="datetime-local" class="check_out search_input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_item">
                           <div>No of pax</div>
                           <select name="adults" id="adults_3" class="dropdown_item_select search_input">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                           </select>
                        </div>
                        <button type="submit" name="actsubmit" class="button search_button">search<span></span><span></span><span></span></button>
                     </form>
                  </div>
                  <!-- end ACTIVITIES Search Panel -->
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- search_end  -->
      <!-- survey start  -->
      <a href="survey.php"  id="sticky"></a>
      <!-- survey end  -->
      <!-- start flight shopping cart  -->
      <div id="Flights" class="tabcontent">
         <div class="popular_places_area">
            <div class="container">
               <?php include('flightcart.php');?>
               <?php
                  if(!empty($_SESSION["shopping_cart"])) {
                  $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                  ?>
               <div class="cart_div">
                  <a href="cart.php"><img src="img/cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
               </div>
               <?php
                  }
                  
                  $result = mysqli_query($con,"SELECT * FROM `flight`");
                  while($data = mysqli_fetch_assoc($result)){
                      ?>
               <form method='post' action=''>
                  <input type='hidden' name='flight_id' value="<?php echo $data['flight_id'] ?>" />
                  <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="thumb">
                           <img src="img/place/sia.png" alt="">
                           <p class="prise">Ticket Price: S$<?php echo $data['ticket_price'] ?></p>
                        </div>
                        <div class="place_info">
                           <h3><?php echo $data['flight_company'] ?></h3>
                           <p>Flight From: <?php echo $data['flight_from'] ?></p>
                           <p>Flight To: <?php echo $data['flight_to'] ?></p>
                           <p>Takeoff Date:<?php echo $data['takeoff_date'] ?></p>
                           <p>Takeoff Time: <?php echo $data['takeoff_time'] ?></p>
                           <p>Expected Touchdown Date: <?php echo $data['expected_touchdown_date'] ?></p>
                           <p>Expected Touchdown Time: <?php echo $data['expected_touchdown_time'] ?></p>
                           <div class="rating_days d-flex justify-content-between">
                              <span class="d-flex justify-content-center align-items-center">
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i>
                              <a href="#">(20 Review)</a>
                              </span>
                           </div>
                           <button type='submit' class="btn btn-info">Buy Now</button>
                        </div>
                     </div>
                  </div>
               </form>
               <?php
                  }
                  mysqli_close($con);
                  ?>
            </div>
         </div>
         <div style="clear:both;"></div>
         <div class="message_box" style="margin:10px 0px;">
            <?php echo $status; ?>
         </div>
      </div>
      <!-- end flight shopping cart  -->
      <!-- START OF HOTEL TAB-->
      <div id="Hotels" class="tabcontent">
         <div class="popular_places_area">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-6">
                     <div class="section_title text-center mb_70">
                        <h3>Accomodations</h3>
                        <p>Sitang Hotel</p>
                     </div>
                  </div>
               </div>
               <?php
                  $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                  $sql = "select * from accommodation as a inner join room as r on a.accom_id=r.accom_id";
                  $mycart = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                  ?>
               <div class="row">
                  <?php
                     while ($data = mysqli_fetch_assoc($mycart)) {
                         ?>
                  <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="thumb">
                           <img src="<?php echo $data['accom_pic'] ?> " alt="" style="width:100%">
                        </div>
                        <div class="place_info">
                           <a data-toggle="modal" data-target="#myModal">
                              <h3><?php echo $data['accom_name'] ?></h3>
                           </a>
                           <p>State Name: <?php echo $data['state_name'] ?></p>
                           <p>State Country: <?php echo $data['state_country'] ?></p>
                           <p>Accommodation Name: <?php echo $data['accom_name'] ?></p>
                           <p>Accomodation Details: <?php echo $data['accom_details'] ?></p>
                           <p>Accommodation Type: <?php echo $data['accom_type'] ?></p>
                           <p>Transport: <?php echo $data['transport'] ?></p>
                           <p>Tags: <?php echo $data['tags'] ?></p>
                           <div class="rating_days d-flex justify-content-between">
                              <span class="d-flex justify-content-center align-items-center">
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i>
                              <a href="#">(20 Review)</a>
                              </span>
                              <div class="days">
                                 <i class="fa fa-clock-o"></i>
                                 <a href="#">5 Days</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                     }
                     mysqli_close($conn);
                     ?>
               </div>
            </div>
         </div>
      </div>
      <!-- END OF HOTEL TAB -->
      <!-- START OF activity FILTER  -->
      <div id="Activities" class="tabcontent">
         <?php
            if(isset($_POST['actsubmit']))
            {
              
                $statename = "%{$_POST['state_name']}%";
                $query = "SELECT * FROM `activity` WHERE state_name LIKE '%".$statename."%'";
                $search_result = filterTable1($query);
                
            }
             else {
                $query = "select * from activity";
                $search_result = filterTable1($query);
            }
            
            // function to connect and execute the query
            function filterTable1($query)
            {
                
                $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
                $filter_Result = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));;
                return $filter_Result;
                
            }
            
            ?>
         <div class="popular_places_area">
            <div class="container">
               <?php while($data = mysqli_fetch_array($search_result)):?>
               <div class="col-lg-4 col-md-6">
                  <div class="single_place">
                     <div class="thumb">
                        <img src="<?php echo $data['activ_img'] ?> " alt="" style="width:100%">
                        <p class="prise">Price : S$<?php echo $data['price_per_hour'] ?></p>
                     </div>
                     <div class="place_info">
                        <h3><?php echo $data['activ_name'] ?></h3>
                        </a>
                        <p>Details: <?php echo $data['state_name'] ?></p>
                        <p>Details: <?php echo $data['activ_details'] ?></p>
                        <p>Company: <?php echo $data['activ_company'] ?></p>
                        <p>Min Pax: <?php echo $data['min_pax'] ?></p>
                        <p>Max Pax: <?php echo $data['max_pax'] ?></p>
                        <p>Transport: <?php echo $data['transport'] ?></p>
                        <p>Tags: <?php echo $data['tags'] ?></p>
                        <div class="rating_days d-flex justify-content-between">
                           <span class="d-flex justify-content-center align-items-center">
                           <i class="fa fa-star"></i> 
                           <i class="fa fa-star"></i> 
                           <i class="fa fa-star"></i> 
                           <i class="fa fa-star"></i> 
                           <i class="fa fa-star"></i>
                           <a href="#">(20 Review)</a>
                           </span>
                           <div class="days">
                              <i class="fa fa-clock-o"></i>
                              <a href="#">5 Days</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endwhile;?>
            </div>
         </div>
      </div>
      <!-- END OF acti FILTER  -->
      <?php include "./newsletter.php";?>
      <?php include "./aboutus.php"; ?>
      <?php include "./footer.php"; ?>
      <!-- start search Modal -->
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
      <!-- end search Modal -->
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
      <!-- <script src="js/nice-select.min.js"></script> -->
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
         function openPage(pageName,elmnt,color) {
           var i, tabcontent, tablinks, destination;
           tabcontent = document.getElementsByClassName("tabcontent");
           for (i = 0; i < tabcontent.length; i++) {
             tabcontent[i].style.display = "none";
           }
           tabcontent = document.getElementsByClassName("destination1");
           for (i = 0; i < tabcontent.length; i++) {
             tabcontent[i].style.display = "none";
           }
           tablinks = document.getElementsByClassName("tablink");
           for (i = 0; i < tablinks.length; i++) {
             tablinks[i].style.backgroundColor = "";
           }
           document.getElementById(pageName).style.display = "block";
           elmnt.style.backgroundColor = color;
         }
         
         // Get the element with id="defaultOpen" and click on it
         document.getElementById("defaultOpen").click();
      </script>
      <script>
         $('#datepicker').datepicker({
             iconsLibrary: 'fontawesome',
             icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
         });
      </script>
      </div>
   </body>
</html>