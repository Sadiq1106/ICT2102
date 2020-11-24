<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>ezTravel - Login</title>
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
      <?php
         include "./navbar.php";
         ?>
        <?php

        function sanitize_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $errorMsg = "";
        $email = sanitize_input($_POST["email"]);
        $fname = sanitize_input($_POST["first_name"]);
        $password = sanitize_input($_POST["password"]);
        $lname = sanitize_input($_POST["last_name"]);

        $success = true;

        //first Name-----------------------------------------------------------------------------------------------------------------
        if (empty($_POST['first_name'])) {
            $errorMsg .= "First Name is required.<br>";
            $success = false;
        } else {
            if (preg_match("/^([a-zA-Z' ]+)$/", $fname)) {
                if (strlen($fname) >= 40) {
                    $errorMsg .= "First Name too long.<br>";
                    $success = false;
                }
            } else {
                $errorMsg .= "Invalid Name.<br>";
                $success = false;
            }
        }


        //last Name-----------------------------------------------------------------------------------------------------------------
        if (empty($_POST['last_name'])) {
            $errorMsg .= "Last Name is required.<br>";
            $success = false;
        } else {
           
            if (preg_match("/^([a-zA-Z' ]+)$/", $lname)) {
                if (strlen($lname) >= 40) {
                    $errorMsg .= "Last Name too long.<br>";
                    $success = false;
                }
            } else {
                $errorMsg .= "Invalid Last Name.<br>";
                $success = false;
            }
        }

        //Password----------------------------------------------------------------------------------------------------------------
        if (empty($_POST['password'])) {
            $errorMsg .= "Password is required.<br>";
            $success = false;
        } else {
      
            if (!preg_match("#[A-Z]+#", $password)) {
                $errorMsg .= "Your Password Must Contain At Least 1 Capital Letter!<br>";
                $success = false;
            }
        }


        //EMAIL-----------------------------------------------------------------------------------------------------------------
        if (empty($_POST['email'])) {
            $errorMsg .= "Email is required.<br>";
            $success = false;
        } else {
    
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorMsg .= "Invalid email format.";
                $success = false;
            }
        }

        define("DBHOST", "rm-gs595dd89hu8175hl6o.mysql.singapore.rds.aliyuncs.com");
        define("DBNAME", "sql1902670ian");
        define("DBUSER", "ict1902670ian");
        define("DBPASS", "NAI0762091");
        $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

        if (isset($_POST["submit"]) == "Register") {
            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
        
            if (isset($email)) {
                $sql = $conn->prepare("SELECT * FROM users where email=?");
                $sql->bind_param("s", $email);
                $sql->execute();
                $result = $sql->get_result();
                $get_rows = mysqli_affected_rows($conn);

                if ($get_rows > 0) {
                    $errorMsg = "Email already exists!";
                    $success = false;
                } else {
                    $sql_insert = $conn->prepare("insert into users (email,first_name,last_name,password)
                        values(?,?,?,?)");
                    $sql_insert->bind_param("ssss", $email,$fname, $lname, $password);
                    $result = $sql->get_result();
                    echo $result;
                    $sql_insert->execute();
                    $sql_insert->close();
                    mysqli_close($conn);
                }
            }
        }

        //SUCCESS
        if ($success) {
            echo "<body>";
            echo "<section class=row>";
            echo "<div class='col-sm-2'></div>";
            echo "<div class='col-sm-8'>";
            echo "<h1>Your account has been successfully registered</h1>";
            echo "<h2>first name : $fname </h2>";
            echo "<h2>last name : $lname </h2>";
            echo "<h2 >password  :   $password</h2>";
            echo "<h2 >email : $email</h2>";
           

            echo "</div>";
            echo "<div class='col-sm-2'></div>";
            echo "<br>";
            echo "</section>";

            echo "<section class=row>";
            echo "<div class='col-sm-5'></div>";
            echo "<div class='col-sm-2'>";
            echo ("<button onclick=\"location.href='login.php'\">Click here to Login</button>");
            echo "</div>";
            echo "<div class='col-sm-5'></div>";
            echo "</div>";
            echo "</section>";
            echo "</body>";
            echo "<hr>";
        } else {
            echo "<body>";
            echo "<section class=row>";
            echo "<div class='col-sm-3'></div>";
            echo "<div class='col-sm-6'>";
            echo "<h1>" . $errorMsg . "</h1>";
            echo "</div>";
            echo "<div class='col-sm-3'></div>";
            echo "<br>";
            echo "</section>";


            echo "<section class=row>";
            echo "<div class='col-sm-5'></div>";
            echo "<div class='col-sm-2'>";
            echo ("<button onclick=\"location.href='login.php'\">Return to Registration</button>");
            echo "</div>";
            echo "<div class='col-sm-5'></div>";
            echo "</div>";
            echo "</section>";
            echo "</body>";
            echo "<hr>";
        }
        ?>
    </main>

    <?php
    include "./footer.php";
    ?>
</body>


</html>