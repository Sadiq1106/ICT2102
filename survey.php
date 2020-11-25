<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>EZTravel - Survey </title>
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

      <script>
        $( function() {
         var availableTags = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

          $( "#dest" ).autocomplete({
            minlength: 3,
            source: availableTags,
            delay: 10
          });
          $("#dest").keydown(function(e){
             if( e.keyCode != $.ui.keyCode.TAB) return; 
             
            e.keyCode = $.ui.keyCode.DOWN;
            $(this).trigger(e);

            e.keyCode = $.ui.keyCode.ENTER;
            $(this).trigger(e);
             
            $(this).siblings("dest").select();
         });
        } );
      </script>

   </head>
   <body>
      <div class="container">
         <div class="fs-form-wrap" id="fs-form-wrap">
            <div class="fs-title">
               <div class="codrops-top">
                  <a href="index.php">
                     <h1 style="font-size: 3em;top: -30px;position: relative;"> 
                     <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">×</span>
                     </button>
                     </h1>
                  </a>
               </div>
            </div>
            <form action="surveyresults.php" novalidate id="myform" class="fs-form fs-form-full" autocomplete="on">
               <ol class="fs-fields">
                  <!-- destination -->
                  <li>
                     <label class="fs-field-label fs-anim-upper" for="dest">Enter Destination</label>
                     <input class="fs-anim-lower" id="dest" name="dest" type="text" placeholder="E.g Thailand, Korea" required/>
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
