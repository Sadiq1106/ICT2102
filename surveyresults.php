<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
         padding-top: 50px;
         }
      </style>
   </head>
   <body>
      <form id="regForm" action="surveylogin.php">
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
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="place_info">
                           <div class="post-card">
                              <div class="post-img">
                                 <img src="img/place/ana.png" style="width:100%;">
                              </div>
                              <div class="post-content">
                                 <h1 class="title">SIN - TYO</h1>
                                 <h2 class="sub_title">23 Nov 2020 - 24 Nov 2020</h2>
                                 <p class="description">India is a vast South Asian country with diverse terrain – from Himalayan peaks to Indian Ocean coastline – and history reaching back 5 millennia.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <p class="text-center">Book Now:
                        <input required type="radio" id="shang" name="shang" value="shang">
                     </p>
                  </div>

                   <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="place_info">
                           <div class="post-card">
                              <div class="post-img">
                                 <img src="img/place/ana.png" style="width:100%;">
                              </div>
                              <div class="post-content">
                                 <h1 class="title">SIN - TYO</h1>
                                 <h2 class="sub_title">23 Nov 2020 - 24 Nov 2020</h2>
                                 <p class="description">India is a vast South Asian country with diverse terrain – from Himalayan peaks to Indian Ocean coastline – and history reaching back 5 millennia.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <p class="text-center">Book Now:
                        <input required type="radio" id="shang" name="shang" value="shang">
                     </p>
                  </div>

                    <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="place_info">
                           <div class="post-card">
                              <div class="post-img">
                                 <img src="img/place/ana.png" style="width:100%;">
                              </div>
                              <div class="post-content">
                                 <h1 class="title">SIN - TYO</h1>
                                 <h2 class="sub_title">23 Nov 2020 - 24 Nov 2020</h2>
                                 <p class="description">India is a vast South Asian country with diverse terrain – from Himalayan peaks to Indian Ocean coastline – and history reaching back 5 millennia.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <p class="text-center">Book Now:
                        <input required type="radio" id="shang" name="shang" value="shang">
                     </p>
                  </div>
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
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="thumb">
                           <img src="img/place/shang.png" alt="">
                           <a class="prise">$800</a>
                        </div>
                        <div class="place_info">
                           <h3>Shangri-La Hotel</h3>
                           <p>Tokyo</p>
                           <div class="rating_days d-flex justify-content-between">
                              <span class="d-flex justify-content-center align-items-center">
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i>
                              <a>(20 Review)</a>
                              </span>
                              <div class="days">
                                 <i class="fa fa-clock-o"></i>
                                 <a>5 Days</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <p class="text-center">Book Now:
                        <input required type="radio" id="shang" name="shang" value="shang">
                     </p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="thumb">
                           <img src="img/place/ritz.png" alt="">
                           <a class="prise">$600</a>
                        </div>
                        <div class="place_info">
                           <h3>The Ritz-Carlton</h3>
                           <p>Tokyo</p>
                           <div class="rating_days d-flex justify-content-between">
                              <span class="d-flex justify-content-center align-items-center">
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i>
                              <a>(20 Review)</a>
                              </span>
                              <div class="days">
                                 <i class="fa fa-clock-o"></i>
                                 <a >5 Days</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <p class="text-center">Book Now:
                        <input required type="radio" id="ritz" name="ritz" value="ritz">
                     </p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="thumb">
                           <img src="img/place/mandarin.png" alt="">
                           <a class="prise">$650</a>
                        </div>
                        <div class="place_info">
                           <h3>Mandarin Oriental</h3>
                           <p>Tokyo</p>
                           <div class="rating_days d-flex justify-content-between">
                              <span class="d-flex justify-content-center align-items-center">
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i>
                              <a >(20 Review)</a>
                              </span>
                              <div class="days">
                                 <i class="fa fa-clock-o"></i>
                                 <a >5 Days</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <p class="text-center">Book Now:
                        <input required type="radio" id="mandarin" name="mandarin" value="mandarin">
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- end of accom tab  -->
         <div class="tab">
            <div class="popular_places_area">
               <div class="row justify-content-center">
                  <div class="col-lg-6">
                     <div class="section_title text-center mb_70">
                        <h3>Activities</h3>
                        <p>Rated 5 stars by Mader Sitang</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="thumb">
                           <img src="img/place/fuji.png" alt="">
                           <p class="prise">$100</p>
                        </div>
                        <div class="place_info">
                           <h3>Mount Fuji</h3>
                           <p>Fuji-Hakone-Izu National Park, Japan</p>
                           <div class="rating_days d-flex justify-content-between">
                              <span class="d-flex justify-content-center align-items-center">
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i>
                              <a >(20 Review)</a>
                              </span>
                              <div class="days">
                                 <i class="fa fa-clock-o"></i>
                                 <a >5 Days</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <p class="text-center">Book Now:
                        <input required type="radio" id="fuji" name="fuji" value="fuji">
                     </p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="thumb">
                           <img src="img/place/hedo.png" alt="">
                           <p class="prise">$40</p>
                        </div>
                        <div class="place_info">
                           <h3>Cape hedo</h3>
                           <p>Hedo Kunigami, Okinawa</p>
                           <div class="rating_days d-flex justify-content-between">
                              <span class="d-flex justify-content-center align-items-center">
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i>
                              <a >(20 Review)</a>
                              </span>
                              <div class="days">
                                 <i class="fa fa-clock-o"></i>
                                 <a>5 Days</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <p class="text-center">Book Now:
                        <input required type="radio" id="hedo" name="hedo" value="hedo">
                     </p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="single_place">
                        <div class="thumb">
                           <img src="img/place/heartrock.png" alt="">
                           <p class="prise">FREE</p>
                        </div>
                        <div class="place_info">
                           <h3>Heart Rock</h3>
                           <p>Kouri Island, Okinawa</p>
                           <div class="rating_days d-flex justify-content-between">
                              <span class="d-flex justify-content-center align-items-center">
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i>
                              <a >(20 Review)</a>
                              </span>
                              <div class="days">
                                 <i class="fa fa-clock-o"></i>
                                 <a>5 Days</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <p class="text-center">Book Now:
                        <input required type="radio" id="heartrock" name="heartrock" value="heartrock">
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- end of accom tab  -->
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
         <!-- end of Itineary tab  -->
         <div style="overflow:auto;">
            <div style="float:right;">
               <button type="submit" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
               <button type="submit" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
             document.getElementById("nextBtn").innerHTML = "Checkout";
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
             x[i].className = x[i].className.replace("active", "");
           }
           //... and adds the "active" class on the current step:
           x[n].className += " active";
         }
      </script>
   </body>
</html>
