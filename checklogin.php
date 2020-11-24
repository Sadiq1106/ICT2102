<?php session_start();?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>ezTravel - Check Login</title>
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
   </head>
   <body class="form-v8">
       
 
<header>
    <?php
    include "./navbar.php";
    ?>
</header>
         
         
<?php
         //Sanitize User Inputs
         function sanitize_input($data)
         {
             $data = trim($data);
             $data = stripslashes($data);
             $data = htmlspecialchars($data);
             return $data;
         }
         define("DBHOST", "rm-gs595dd89hu8175hl6o.mysql.singapore.rds.aliyuncs.com");
         define("DBNAME", "sql1902670ian");
         define("DBUSER", "ict1902670ian");
         define("DBPASS", "NAI0762091");
             
         
         
         $username = sanitize_input($_POST["first_name"]);
         $p = sanitize_input($_POST["password"]);
         $email = $errorMsg = "";
         $success = true;
         //Username Check
         if (empty($_POST["first_name"])) {
             $errorMsg .= "Username is required.<br>";
             $success = false;
         } else {
             if (preg_match("/^([a-zA-Z' ]+)$/", $username)) {
                 if (strlen($username) >= 40) {
                     $errorMsg .= "Username too long.<br>";
                     $success = false;
                 }
             } else {
                 $errorMsg .= "Invalid Username.<br>";
                 $success = false;
             }
         }
         
         //Password Check
         if (empty($_POST["password"])) {
             $errorMsg .= "Password is required.<br>";
             $success = false;
         } 
         
         
         if (!isset($_POST["submit"])) {
             $errorMsg .= "Incomplete form";
             $success = false;
         }
         
         //If any of the checks fail, triggered
         if ($success == false) {
             echo "<section class=row>";
             echo "<div class='col-sm-3'></div>";
             echo "<div class='col-sm-6'>";
             echo "<h3>The following errors were detected:<h3>";
             echo "<h4> $errorMsg </h4>";
             echo "</div>";
             echo "<div class='col-sm-3'></div>";
             echo "<br>";
             echo "</section>";
         
             echo "<div class=row>";
             echo "<div class='col-sm-5'></div>";
             echo "<div class='col-sm-2'>";
             echo ("<button onclick=\"location.href='./login.php'\">Return to Login</button>");
             echo "</div>";
             echo "<div class='col-sm-5'></div>";
             echo "</div>";
             echo "</div>";
             echo "<hr>";
         } else {
             $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
             $u = $_POST['first_name'];
             $p = $_POST['password'];
             $u = mysqli_real_escape_string($conn, $u);
             $p = mysqli_real_escape_string($conn, $p);
        
             $sql = $conn->prepare("SELECT * FROM users WHERE first_name = ? and password= ? ");
             $sql->bind_param("ss", $u, $p);
             $sql->execute();
             $search_result = $sql->get_result();
         
             //$search_result = mysqli_query($conn, $sql);
             $userfound = mysqli_fetch_assoc($search_result);
         
             if ($userfound >= 1) {
                 $sql = $conn->prepare("SELECT * FROM users WHERE first_name = ? ");
                 $sql->bind_param("s", $u);
                 $sql->execute();
                 $search_result = $sql->get_result();
                 $one_record = mysqli_fetch_assoc($search_result);
                 $r = $one_record['role'];
                 $_SESSION['MM_Username'] = $u;
                 $_SESSION['MM_role'] = $r;
                 if ($_SESSION['MM_role'] == 'guest') {
                    header("Location:myBookings.php");
                } else {
                    header("Location:index.php");
                }
//                 session_start();
// if (empty($_SESSION['MM_Username'])) {
//     header('Location: test.php');
// }

             } else {
                 echo "<section class=row>";
                 echo "<div class='col-sm-3'></div>";
                 echo "<div class='col-sm-6'>";
                 echo "<h1>Username not found or password doesn't match...<h1>";
                 echo "</div>";
                 echo "<div class='col-sm-3'></div>";
                 echo "<br>";
                 echo "</section>";
         
                 echo "<section class=row>";
                 echo "<div class='col-sm-5'></div>";
                 echo "<div class='col-sm-2'>";
                 echo ("<button onclick=\"location.href='./login.php'\">Return to Login</button>");
                 echo "</div>";
                 echo "<div class='col-sm-5'></div>";
                 echo "</div>";
                 echo "</section>";
                 echo "<hr>";
             }
             $sql->close();
             mysqli_close($conn);
         }
         
         ?>
          <?php
        include "./footer.php";
        ?>
   </body>
</html>