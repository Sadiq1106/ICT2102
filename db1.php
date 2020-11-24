<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.



// define("DBHOST", "rm-gs595dd89hu8175hl6o.mysql.singapore.rds.aliyuncs.com");
// define("DBNAME", "sql1902670ian");
// define("DBUSER", "ict1902670ian");
// define("DBPASS", "NAI0762091");



$con = mysqli_connect("rm-gs595dd89hu8175hl6o.mysql.singapore.rds.aliyuncs.com","ict1902670ian","NAI0762091","sql1902670ian");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>