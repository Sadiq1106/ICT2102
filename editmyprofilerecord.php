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
      <?php
         include "./navbar.php";
         ?>
<?php
//session_start();
define("DBHOST", "rm-gs595dd89hu8175hl6o.mysql.singapore.rds.aliyuncs.com");
define("DBNAME", "sql1902670ian");
define("DBUSER", "ict1902670ian");
define("DBPASS", "NAI0762091");

$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if (isset($_POST["submit"]) == "Upload") {
    $userID = $_POST['user_id'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $pword = $_POST['password'];
    $email = $_POST['email'];
   
    $sql = $conn->prepare("update users set first_name=?,last_name=?, password=?, email=? where user_id=?");   
    $sql->bind_param("ssssi", $fname, $lname, $pword,$email,$userID);
    $sql->execute();
    $result = $sql->get_result();
    $sql->close();
    mysqli_close($conn);
}
?>


<?php

$errorMsg = "";
$email = sanitize_input($_POST["email"]);
$password = sanitize_input($_POST["password"]);
$lname = sanitize_input($_POST["last_name"]);
$fname = sanitize_input($_POST["first_name"]);
$success = true;

//SUCCESS
if ($success) {
    echo "<h1> Profile Updated Successfully</h1>";
    echo "<h2> First Name : $fname </h2>";
    echo "<h2> Last Name :  $lname</h2>";
    echo "<h2> Email  :   $email</h2>";

    echo("<button onclick=\"location.href='editprofile.php?id=$userID'\">Return to my profile record.</button>");
} else {
    echo "<h1>Oops!</h1>";
    echo "<h4>The following input errors were detected:</h4>";
    echo "<p>" . $errorMsg . "</p>";
    echo "<br>";
    echo("<button onclick=\"location.href='editprofile.php?id=$userID'\">Return to my profile  record.</button>");
}

//Helper function that checks input for malicious or unwanted content.
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

    </body>

<?php
    include "./footer.php";
    ?>

</html>

