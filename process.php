<html><body>
<?php

$customer_name = $_POST['customer_name'];					// customer information
$customer_email = $_POST['customer_email'];
$customer_phone = $_POST['customer_phone'];

$num_pom = $_POST['num_pom']; $num_apl = $_POST['num_apl'];	// fruits
$num_orn = $_POST['num_orn']; $num_lmn = $_POST['num_lmn'];
$num_lim = $_POST['num_lim'];

$num_car = $_POST['num_car']; $num_oni = $_POST['num_oni']; // veggies
$num_pot = $_POST['num_pot']; $num_cel = $_POST['num_cel'];
$num_crn = $_POST['num_crn'];

$num_mlk = $_POST['num_mlk']; $num_chs = $_POST['num_chs']; // dairy
$num_ice = $_POST['num_ice']; $num_btr = $_POST['num_btr'];
$num_egg = $_POST['num_egg'];

$num_chk = $_POST['num_chk']; $num_smn = $_POST['num_smn']; // meat
$num_cow = $_POST['num_cow']; $num_trk = $_POST['num_trk'];
$num_pig = $_POST['num_pig'];

$pick_up_time = $_POST['pick_up_time'];						// pick up and payment
$payment_method = $_POST['payment_method'];
$card_number = $_POST['card_number'];

// validate
if ($num_apl == 4)
	echo "you have four pomegranates.";
else
	echo "you don't have four pomegranates.";

// enter information into mysql

// convert to html for display

?>
</body></html>