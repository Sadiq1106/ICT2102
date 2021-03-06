<head>
    <meta charset="utf-8">
    <title>ezTravel - Booking Confirmation</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  
<style>
    * {
  padding: 0;
  margin: 0;
}

body {
  color: #515151;
  font-family: 'Open Sans', sans-serif;
}

#bg img {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -2;
    top: 0;
}

#overlay {
  position:absolute;
  width: 100%;
  height: 100%;
  z-index: -1;
  top: 0;
  background-color: gray;
  opacity:0.5;
}

#container {
  position: relative;
  max-width: 218px;
  margin: 200px auto;
  background: #fff;
  padding: 20px 17px;
  text-align: center;
  border-radius: 3%;
  -webkit-box-shadow: -7px 0px 0px -2px rgba(71,71,71,0.2);
  -moz-box-shadow: -7px 0px 0px -2px rgba(71,71,71,0.2);
  box-shadow: -7px 0px 0px -2px rgba(71,71,71,0.2);
}

h1 {
  margin: 30px 0 20px 0;
  font-weight: normal;
}

p {
  font-size: 0.8em;
  margin-bottom: 25px;
}

button {
  width: 100%;
  background: #73c242;
  border: transparent;
  border-radius: 3%;
  padding: 10px;
  text-transform: uppercase;
  color: white;
  letter-spacing: 1px;
}

#circle {
  position: absolute;
  width: 80px;
  height: 80px;
  background: #73c242;
  border-radius: 50%;
  text-align: center;
  top: -40px;
  left: 84px;
}

i {
  color: white;
  margin: 25px;
  font-size: 30px;
}

    </style>
</head>
  <body>
    <div id="overlay"></div>  
    <div id="container" id="timer">
      <div id="circle">
        <i class="fa fa-check"></i> 
      </div> 
      <h1>Success</h1>
      <p>Check your email for a booking confirmation. We'll see you soon!</p>
      <button type="button" onclick="location.href='myBookings.php'">Ok</button>
    </div>
  </body>