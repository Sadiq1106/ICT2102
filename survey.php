<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ezTravel - Survey </title>
      <link rel="shortcut icon" type="image/x-icon" href="img/sumikko.png">
      <link rel="stylesheet" type="text/css" href="css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="css/demo.css" />
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <link rel="stylesheet" type="text/css" href="css/cs-select.css" />
      <link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
      <script src="js/modernizr.custom.js"></script>

      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   </head>


   <body>
      <div class="container">
         <div class="fs-form-wrap" id="fs-form-wrap">
            <div class="fs-title">
               
               <div class="codrops-top">
               <a href="index.php"><h1 class="codrops-icon codrops-icon-prev"> Click here to exit survey</h1></a>
               </div>
            </div>

            <form action="surveyresults.php" novalidate id="myform" class="fs-form fs-form-full" autocomplete="on">
               <ol class="fs-fields">
               <!-- destination -->
                  <li>
                     <label class="fs-field-label fs-anim-upper" for="dest">Where do you want to go?</label>
                    
                     <select name="dropdown" id="dropdown">
                     <?php
                     define("DBHOST", "rm-gs595dd89hu8175hl6o.mysql.singapore.rds.aliyuncs.com");
                     define("DBNAME", "sql1902670ian");
                     define("DBUSER", "ict1902670ian");
                     define("DBPASS", "NAI0762091");

                     $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                     $result = mysqli_query($conn,"SELECT * FROM `country`");
                     while($data = mysqli_fetch_assoc($result)){

    echo("<option value='".$data['country_id']."'>".$data['country_name']."</option>");
}
?>
<label for="dropdown">Select</label>
</select>
                  </li>
                   <!-- start date -->
                  <li>
                     <label class="fs-field-label fs-anim-upper" for="start_date">Start Date:</label>
                     <input  class="fs-mark fs-anim-lower" id="startdate" name="start_date" type="date" required />
                        <br/>
                  <!-- end date -->
                     <label class="fs-field-label fs-anim-upper" for="end_date">End Date:</label>
                     <input  class="fs-mark fs-anim-lower" id="enddate" name="end_date" type="date" required/>
                  </li>

                   <!-- no of pax -->
                  <li>
                     <label class="fs-field-label fs-anim-upper" for="pax">No of pax</label>
                     <input class="fs-mark fs-anim-lower" id="pax" name="pax" type="number" placeholder="1" step="1" min="1" required/>
                  </li>
                  <!-- Preferences -->
                  <li data-input-trigger>
                     <label class="fs-field-label fs-anim-upper" for="preferences">Preferences</label>
                     <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                        <span><input required id="q5a" name="wateractivity" type="checkbox" value="wateractivity"/><label for="q5a" class="radio-water">Water Activities</label></span>
                        <span><input required id="q5b" name="scenic" type="checkbox" value="scenic"/><label for="q5b" class="radio-scenic">Scenic Places</label></span>
                        <span><input required id="q5c" name="cafe" type="checkbox" value="cafe"/><label for="q5c" class="radio-cafe">Cafe Places</label></span>
                        <span><input required id="q5d" name="wildlife" type="checkbox" value="wildlife"/><label for="q5d" class="radio-wildlife">Wildlife</label></span>
                        <span><input required id="q5e" name="hiking" type="checkbox" value="hiking"/><label for="q5e" class="radio-hiking">Hiking</label></span>
                        <span><input required id="q5f" name="beach" type="checkbox" value="beach"/><label for="q5f" class="radio-beach">Beach Lounging</label></span>
                        <span><input required id="q5g" name="foodie" type="checkbox" value="foodie"/><label for="q5g" class="radio-foodie">Foodie</label></span>
                        <span><input required id="q5h" name="nightlife" type="checkbox" value="nightlife"/><label for="q5h" class="radio-nightlife">Nightlife</label></span>
                        
                     </div>
                  </li>


                  <!-- Diet preferences -->
                  <li data-input-trigger>
                     <label class="fs-field-label fs-anim-upper" for="q6">Dietary Preferences</label>
                     <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                        <span><input required id="q6a" name="halal" type="radio" value="halal"/><label for="q6a" class="radio-halal">Halal</label></span>
                        <span><input required id="q6b" name="vegan" type="radio" value="vegan"/><label for="q6b" class="radio-vegan">Vegetarian</label></span>
                        <span><input required id="q6c" name="nonhalal" type="radio" value="nonhalal"/><label for="q6c" class="radio-nonhalal">Non-Halal</label></span> 
                     </div>
                  </li>
                  <!-- Flight preferences -->
                  <li data-input-trigger>
                     <label class="fs-field-label fs-anim-upper" for="q7">Do you prefer 1 way or 2 way?</label>
                     <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                        <span><input required id="q7a" name="oneway" type="radio" value="oneway"/><label for="q7a" class="radio-oneway">One Way</label></span>
                        <span><input required id="q7b" name="twoway" type="radio" value="twoway"/><label for="q7b" class="radio-twoway">Two Way</label></span>
                        
                     </div>
                  </li>
                  <!-- Accom preferences -->
                  <li data-input-trigger>
                     <label class="fs-field-label fs-anim-upper" for="q8">Do you prefer Hotel or Hostel?</label>
                     <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                        <span><input required id="q8a" name="hotel" type="radio" value="hotel"/><label for="q8a" class="radio-hotel">Hotel</label></span>
                        <span><input required id="q8b" name="hostel" type="radio" value="hostel"/><label for="q8b" class="radio-hostel">Hostel</label></span>
                        
                     </div>
                  </li>
               </ol>
               <!-- /fs-fields -->
               <button class="fs-submit" type="submit">Get Results</button>
            </form>
            <!-- /fs-form -->
         </div>
         <!-- /fs-form-wrap -->
      </div>
      <!-- /container -->
      <script src="js/classie.js"></script>
      <script src="js/selectFx.js"></script>
      <script src="js/fullscreenForm.js"></script>
      <script>
         (function() {
         	var formWrap = document.getElementById( 'fs-form-wrap' );
         
         	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
         		new SelectFx( el, {
         			stickyPlaceholder: false,
         			onChange: function(val){
         				document.querySelector('span.cs-placeholder').style.backgroundColor = val;
         			}
         		});
         	} );
         
         	new FForm( formWrap, {
         		onReview : function() {
         			classie.add( document.body, 'overview' ); // for demo purposes only
         		}
         	} );
         })();
      </script>
  <script >
    //greyed out dates before today
    var today = new Date().toISOString().split('T')[0];
   document.getElementsByName("start_date")[0].setAttribute('min', today);

   //prevent user from selecting date
   var checkIn = document.getElementById('startdate');
   var checkOut = document.getElementById('enddate');
   checkIn.addEventListener('change', updatedate);

   function updatedate() {
      var firstdate = checkIn.value;
      checkOut.min = firstdate;
   }
</script>


   </body>
</html>