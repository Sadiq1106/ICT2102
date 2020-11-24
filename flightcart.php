<?php
// session_start();
include('db1.php');
$status="";
if (isset($_POST['flight_id']) && $_POST['flight_id']!=""){
$code = $_POST['flight_id'];
$result = mysqli_query($con,"SELECT * FROM `flight` WHERE `flight_id`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['flight_company'];
$code = $row['flight_id'];
$price = $row['ticket_price'];


$cartArray = array(
	$code=>array(
	'flight_company'=>$name,
	'flight_id'=>$code,
	'ticket_price'=>$price,
	'quantity'=>1
	)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>