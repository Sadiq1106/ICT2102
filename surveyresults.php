<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ezTravel - Survey Results</title>
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/themify-icons.css">
      <link rel="stylesheet" type="text/css" href="css/main_styles.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/hover-box.css"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <link rel="stylesheet" href="css/checkbox.css"/>
      <style>
         * {
         box-sizing: border-box;
         }
         body {
         background-color: #2193b0;
         }
         #regForm {
         background-color: #ffffff;
         margin: 100px auto;
         margin-top: 0px;
         margin-bottom: 0px;
         font-family: Raleway;
         padding: 40px;
         width: 70%;
         min-width: 300px;
         }
         h1 {
         text-align: center;  
         }
         input {
         padding: 10px;
         /* width: 100%; */
         font-size: 17px;
         margin: 20px !important;
         font-family: Raleway;
         border: 1px solid #aaaaaa;
         }
         /* Mark input boxes that gets an error on validation: */
         input.invalid {
         background-color: #ffdddd;
         }
         /* Hide all steps by default: */
         .tab {
         display: none;
         }
         button {
         background-color: #2193b0;
         color: #ffffff;
         border: none;
         padding: 10px 20px;
         font-size: 17px;
         font-family: Raleway;
         cursor: pointer;
         }
         button:hover {
         opacity: 0.8;
         }
         #prevBtn {
         background-color: #bbbbbb;
         }
         /* Make circles that indicate the steps of the form: */
         .step {
         height: 15px;
         width: 15px;
         margin: 0 2px;
         background-color: #bbbbbb;
         border: none;  
         border-radius: 50%;
         display: inline-block;
         opacity: 0.5;
         }
         .step.active {
         opacity: 1;
         }
         /* Mark the steps that are finished and valid: */
         .step.finish {
         background-color: #2193b0;
         }
         .popular_places_area{
         background-color: white;
         padding-bottom: 50px;
         padding-top: 0px;
         }
         .popular_places_area .single_place .place_info {
    padding: 0px;
}
table{
   text-align: center;
}
      </style>
   </head>
   <body>
   <?php
         define("DBHOST", "rm-gs595dd89hu8175hl6o.mysql.singapore.rds.aliyuncs.com");
         define("DBNAME", "sql1902670ian");
         define("DBUSER", "ict1902670ian");
         define("DBPASS", "NAI0762091");
         ?>

      <form id="regForm" action="surveylogin.php">
         <!-- One "tab" for each step in the form: -->
         <div class="tab">
            <div class="popular_places_area">
               <div class="row justify-content-center">
                  <div class="col-lg-6">
                     <div class="section_title text-center mb_70">
                        <h3>Flights</h3>
                        <p>Sitang Flights</p>
                     </div>
                  </div>
               </div>

               <?php
                  $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                  $sql = "select * from flight limit 3";
                  $mycart = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                  ?>

               <div class="row">
               <?php
                     while ($data = mysqli_fetch_assoc($mycart)) {
                         ?>
                  <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="place_info">
                           <div class="post-card">
                              <input class="c-card" type="radio" id="<?php echo $data['flight_id'] ?>" value="<?php echo $data['flight_company'] ?>" name="surveyflights">
                              <div class="card-content">
                                 <label for="<?php echo $data['flight_id'] ?>">
                                    <div class="card-state-icon"></div>
                                    <div class="post-img">
                                       <img src="<?php echo $data['flight_img'] ?>" style="width:100%;">
                                    </div>
                                    <div class="post-content">
                                       <table style="width:100%">
                                          <tr>
                                             <th>
                                                <h1 class="title">SIN</h1>
                                             </th>
                                             <th>
                                                <h1 class="title"><i style="font-size:24px" class="fa">&#xf178;</i></h1>
                                             </th>
                                             <th>
                                                <h1 class="title">KIX</h1>
                                             </th>
                                          </tr>
                                          <tr>
                                             <td>
                                                <h2 class="sub_title">
                                                <?php echo $data['flight_from'] ?></h1>
                                             </td>
                                             <td>
                                                <h2 class="sub_title"> &nbsp;
                                                </h2>
                                             </td>
                                             <td>
                                                <h2 class="sub_title">
                                                <?php echo $data['flight_to'] ?></h1>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <h2 class="sub_title">
                                                <?php echo $data['takeoff_date'] ?></h1>
                                             </td>
                                             <td>
                                                <h2 class="sub_title">
                                                </h2>
                                             </td>
                                             <td>
                                                <h2 class="sub_title">
                                                <?php echo $data['expected_touchdown_date'] ?></h1>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <h2 class="sub_title">
                                                <?php echo $data['takeoff_time'] ?></h1>
                                             </td>
                                             <td>
                                                <h2 class="sub_title">
                                                </h1>
                                             </td>
                                             <td>
                                                <h2 class="sub_title">
                                                <?php echo $data['expected_touchdown_time'] ?></h1>
                                             </td>
                                          </tr>
                                       </table>
                                       <p class="description">Price: <?php echo $data['ticket_price'] ?></p>
                                       <p class="description">Aircraft Type: <?php echo $data['airbus_model'] ?></p>
                                       <p class="description"><?php echo $data['terminal'] ?></p>
                                    </div>
                              </div>
                              </label>
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
            <script>
               $(window).load(function() {
                $('.post-card').hover(function() {
                  $(this).find('.description').stop().animate({
                    height: "toggle",
                    opacity: "toggle"
                  }, 300);
                });
               });
               
            </script>
         </div>
         <!-- end of flights tab  -->
         <div class="tab">
            <div class="popular_places_area">
               <div class="row justify-content-center">
                  <div class="col-lg-6">
                     <div class="section_title text-center mb_70">
                        <h3>Hotel</h3>
                        <p>Sitang Hotel</p>
                     </div>
                  </div>
               </div>
               <?php
                  $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                  $sql = "select * from accommodation limit 3";
                  $mycart = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                  ?>
               <div class="row">
               <?php
                     while ($data = mysqli_fetch_assoc($mycart)) {
                         ?>
                  <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="place_info">
                           <div  class="post-card">
                              <input class="c-card" type="radio"  id="4" value="<?php echo $data['accom_name'] ?>" name="surveyhotel">
                              <div class="card-content">
                                 <label for="4">
                                    <div class="card-state-icon"></div>
                                    <div class="post-img">
                                       <img src="<?php echo $data['accom_pic'] ?>" style="width:100%;">
                                    </div>
                                    <div class="post-content">
                                       <h1 class="title"><?php echo $data['accom_name'] ?></h1>
                                       <h2 class="sub_title text-center"><?php echo $data['accom_type'] ?></h2>
                                       <h2 class="sub_title text-center"><?php echo $data['state_name'] ?>, <?php echo $data['state_country'] ?></h2>
                                       <p class="description">Transportation: <?php echo $data['transport'] ?></p>
                                       <p class="description"><?php echo $data['accom_details'] ?></p>
                                       <p class="description">Tags: <?php echo $data['tags'] ?></p>
                                       
                                    </div>
                              </div>
                              </label>
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
         <!-- end of accom tab  -->
          <!-- start of ROOM tab  -->
          <div class="tab">
            <div class="popular_places_area">
               <div class="row justify-content-center">
                  <div class="col-lg-6">
                     <div class="section_title text-center mb_70">
                        <h3>Rooms</h3>
                        <p>Sitang Rooms</p>
                     </div>
                  </div>
               </div>
               <?php
                  $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                  $sql = "select * from room where room_id=7 or room_id=8 or room_id=9";
                  $mycart = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                  ?>
               <div class="row">
               <?php
                     while ($data = mysqli_fetch_assoc($mycart)) {
                         ?>
                  <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="place_info">
                           <div  class="post-card">
                              <input class="c-card" type="radio"  id="<?php echo $data['room_id'] ?>" value="<?php echo $data['accom_name'] ?>" name="surveyrooms">
                              <div class="card-content">
                                 <label for="<?php echo $data['room_id'] ?>">
                                    <div class="card-state-icon"></div>
                                    <div class="post-img">
                                       <img src="<?php echo $data['room_pic'] ?>" style="width:100%;">
                                    </div>
                                    <div class="post-content">
                                    <h1 class="title"><?php echo $data['room_name'] ?></h1>
                                       <h2 class="sub_title text-center"><?php echo $data['room_type'] ?></h2>
                                       <h1 class="sub_title"><?php echo $data['accom_type'] ?></h1>
                                       <h2 class="description">Availability: <?php echo $data['available_from'] ?> to <?php echo $data['available_to'] ?></h2>
                                      
                                    </div>
                              </div>
                              </label>
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
         <!-- end of ROOM tab  -->
         <div class="tab">
            <div class="popular_places_area">
               <div class="row justify-content-center">
                  <div class="col-lg-6">
                     <div class="section_title text-center mb_70">
                        <h3>Itinerary</h3>
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
            </div>
         </div>
         <div style="overflow:auto;">
            <div style="float:right;">
               <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
               <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
         </div>
         <!-- Circles which indicates the steps of the form: -->
         <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
         </div>
      </form>
      <script>
         var currentTab = 0; // Current tab is set to be the first tab (0)
         showTab(currentTab); // Display the current tab
         
         function showTab(n) {
           // This function will display the specified tab of the form...
           var x = document.getElementsByClassName("tab");
           x[n].style.display = "block";
           //... and fix the Previous/Next buttons:
           if (n == 0) {
             document.getElementById("prevBtn").style.display = "none";
           } else {
             document.getElementById("prevBtn").style.display = "inline";
           }
           if (n == (x.length - 1)) {
             document.getElementById("nextBtn").innerHTML = "Submit";
           } else {
             document.getElementById("nextBtn").innerHTML = "Next";
           }
           //... and run a function that will display the correct step indicator:
           fixStepIndicator(n)
         }
         
         function nextPrev(n) {
           // This function will figure out which tab to display
           var x = document.getElementsByClassName("tab");
           // Exit the function if any field in the current tab is invalid:
           if (n == 1 && !validateForm()) return false;
           // Hide the current tab:
           x[currentTab].style.display = "none";
           // Increase or decrease the current tab by 1:
           currentTab = currentTab + n;
           // if you have reached the end of the form...
           if (currentTab >= x.length) {
             // ... the form gets submitted:
             document.getElementById("regForm").submit();
             return false;
           }
           // Otherwise, display the correct tab:
           showTab(currentTab);
         }
         
         function validateForm() {
           // This function deals with validation of the form fields
           var x, y, i, valid = true;
           x = document.getElementsByClassName("tab");
           y = x[currentTab].getElementsByTagName("input");
           // A loop that checks every input field in the current tab:
           for (i = 0; i < y.length; i++) {
             // If a field is empty...
             if (y[i].value == "") {
               // add an "invalid" class to the field:
               y[i].className += " invalid";
               // and set the current valid status to false
               valid = false;
             }
           }
           // If the valid status is true, mark the step as finished and valid:
           if (valid) {
             document.getElementsByClassName("step")[currentTab].className += " finish";
           }
           return valid; // return the valid status
         }
         
         function fixStepIndicator(n) {
           // This function removes the "active" class of all steps...
           var i, x = document.getElementsByClassName("step");
           for (i = 0; i < x.length; i++) {
             x[i].className = x[i].className.replace(" active", "");
           }
           //... and adds the "active" class on the current step:
           x[n].className += " active";
         }
      </script>
   </body>
</html>
