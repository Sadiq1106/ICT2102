<!DOCTYPE html>
<html>
   <head>
   <link rel="shortcut icon" type="image/x-icon" href="img/sumikko.png">
   
   <link rel="stylesheet" href="css/hover-box.css"/>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   
</head>


<body>

<div class="container">
  <div class="column">
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


</body>
</html>