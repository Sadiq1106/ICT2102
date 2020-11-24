<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
session_start();
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
	'quantity'=>1)
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
<html>
<head>
<title>Demo Simple Shopping Cart using PHP and MySQL - AllPHPTricks.com</title>
<link rel='stylesheet' href='css1/style.css' type='text/css' media='all' />
</head>
<body>
<div style="width:700px; margin:50 auto;">

<h2>Demo Simple Shopping Cart using PHP and MySQL</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="img/sitang-sleeping.png" style="width:20px;" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}

$result = mysqli_query($con,"SELECT * FROM `flight`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='flight_id' value=".$row['flight_id']." />
			 
			  <div class='name'>".$row['flight_company']."</div>
		   	  <div class='price'>$".$row['ticket_price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br />
<a href="https://www.allphptricks.com/simple-shopping-cart-using-php-and-mysql/"><strong>Tutorial Link</strong></a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/"><strong>AllPHPTricks.com</strong></a>
<br /><br />Watch TV Abroad via Best VPNs Guide Visit: <a href="https://www.bestvpnsguide.com/"><strong>BestVPNsGuide.com</strong></a>
</div>
</body>
</html>