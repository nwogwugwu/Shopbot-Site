<?php include('config.php'); ?>
<!DOCTYPE html>

<head>
  <title>Payment & Pick Up</title>
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <script src="javascripts/modernizr.foundation.js"></script>
	
  <script>
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
	
// functions
	function print_price($item_name, $current_str, $num_items)
    {
        $query_start = "SELECT  `item_price` FROM  `Items`  WHERE  `item_name` =  '";
        $query_end = "' ";
        $query_command = $query_start . $item_name . $query_end;
        $result = mysql_query($query_command);
        $row = mysql_fetch_array( $result );
		$total = $row['item_price'] * $num_items;

        return $current_str . "$" . $row['item_price'] . "x" . $num_items . "..." . $total . "<br />";
    }
    
    function add_up_prices($item_name, $current_price, $num_items)
    {
    	$query_start = "SELECT  `item_price` FROM  `Items`  WHERE  `item_name` =  '";
        $query_end = "' ";
        $query_command = $query_start . $item_name . $query_end;
        $result = mysql_query($query_command);
        $row = mysql_fetch_array( $result );
		$total = $row['item_price'] * $num_items;
    
    	return current_price+total;
    }
	
	
// Make list for database
	$item_list = "";	$price_list = ""; $total_price = 0;
	
	if ($num_pom > 0){ $item_list = $item_list . $num_pom . " Pomegranate<br />"; $price_list = print_price("Pomegranate", $price_list, $num_pom); $total_price = add_up_prices("Pomegranate", $total_price, $num_pom);}
	if ($num_apl > 0){ $item_list = $item_list . $num_apl . " Apple <br />"; $price_list = print_price("Apple", $price_list, $num_apl); $total_price = add_up_prices("Apple", $total_price, $num_apl);}
	if ($num_orn > 0){ $item_list = $item_list . $num_orn . " Orange<br />"; $price_list = print_price("Orange", $price_list, $num_orn); $total_price = add_up_prices("Orange", $total_price, $num_orn);}
	if ($num_lmn > 0){ $item_list = $item_list . $num_lmn . " Lemon<br />";	$price_list = print_price("Lemon", $price_list, $num_lmn); $total_price = add_up_prices("Lemon", $total_price, $num_lmn);}
	if ($num_lim > 0){ $item_list = $item_list . $num_lim . " Lime<br />"; $price_list = print_price("Lime", $price_list, $num_lim); $total_price = add_up_prices("Lime", $total_price, $num_lim);}

	if ($num_car > 0){ $item_list = $item_list . $num_car . " Carrot<br />"; 	$price_list = print_price("Carrot", $price_list, $num_car);$total_price = add_up_prices("Carrot", $total_price, $num_car);}
	if ($num_oni > 0){ $item_list = $item_list . $num_oni . " Onion<br />"; $price_list = print_price("Onion", $price_list, $num_oni);	$total_price = add_up_prices("Onion", $total_price, $num_oni);}
	if ($num_pot > 0){ $item_list = $item_list . $num_pot . " Potato<br />"; 	$price_list = print_price("Potato", $price_list, $num_pot);$total_price = add_up_prices("Potato", $total_price, $num_pot);}
	if ($num_cel > 0){ $item_list = $item_list . $num_cel . " Celery<br />";	$price_list = print_price("Celery", $price_list, $num_cel);$total_price = add_up_prices("Celery", $total_price, $num_cel);}
	if ($num_crn > 0){ $item_list = $item_list . $num_crn . " Corn<br />";	$price_list = print_price("Corn", $price_list, $num_crn);$total_price = add_up_prices("Corn", $total_price, $num_crn);}

	if ($num_mlk > 0){ $item_list = $item_list . $num_mlk . " Milk<br />"; $price_list = print_price("Milk", $price_list, $num_mlk);	$total_price = add_up_prices("Milk", $total_price, $num_mlk);}
	if ($num_chs > 0){ $item_list = $item_list . $num_chs . " Cheese<br />";	$price_list = print_price("Cheese", $price_list, $num_chs);$total_price = add_up_prices("Cheese", $total_price, $num_chs);}
	if ($num_ice > 0){ $item_list = $item_list . $num_ice . " Ice Cream<br />"; 	$price_list = print_price("Ice Cream", $price_list, $num_ice);$total_price = add_up_prices("Ice Cream", $total_price, $num_ice);}
	if ($num_btr > 0){ $item_list = $item_list . $num_btr . " Butter<br />";	$price_list = print_price("Butter", $price_list, $num_btr);$total_price = add_up_prices("Butter", $total_price, $num_btr);}
	if ($num_egg > 0){ $item_list = $item_list . $num_egg . " Egg<br />";	$price_list = print_price("Egg", $price_list, $num_egg);$total_price = add_up_prices("Egg", $total_price, $num_egg);}

	if ($num_chk > 0){ $item_list = $item_list . $num_chk . " Chicken<br />"; $price_list = print_price("Chicken", $price_list, $num_chk);$total_price = add_up_prices("Chicken", $total_price, $num_chk);	} 
	if ($num_smn > 0){ $item_list = $item_list . $num_smn . " Salmon<br />"; $price_list = print_price("Salmon", $price_list, $num_smn);	$total_price = add_up_prices("Salmon", $total_price, $num_smn);}
	if ($num_cow > 0){ $item_list = $item_list . $num_cow . " Beef<br />"; $price_list = print_price("Beef", $price_list, $num_cow);	$total_price = add_up_prices("Beef", $total_price, $num_cow);}
	if ($num_trk > 0){ $item_list = $item_list . $num_trk . " Turkey<br />"; $price_list = print_price("Turkey", $price_list, $num_trk);	$total_price = add_up_prices("Turkey", $total_price, $num_trk);}
	if ($num_pig > 0){ $item_list = $item_list . $num_pig . " Pork<br />"; $price_list = print_price("Pork", $price_list, $num_pig);$total_price = add_up_prices("Pork", $total_price, $num_pig);	}
	

	// enter information into mysql
	
	$insert_command = "INSERT INTO `kinetic`.`orders` (`order_id`, `customer_name`, `customer_email`, `customer_phone`, `pick_up_time`, `payment_method`, `card_number`, `order`) VALUES (NULL, '" . $customer_name . "', '" . $customer_email . "', '" . $customer_phone . "', '" . $pick_up_time . "', '" . $payment_method . "', '" . $card_number . "', '" . $item_list . "')";
	//mysql_query("INSERT INTO `kinetic`.`orders` (`order_id`, `customer_name`, `customer_email`, `customer_phone`, `pick_up_time`, `payment_method`, `card_number`, `order`) VALUES (NULL, $customer_name, $customer_email, $customer_phone, $pick_up_time, $payment_method, $card_number, $item_list)");
	mysql_query($insert_command);
	//mysql_query("INSERT INTO `kinetic`.`orders` (`order_id`, `customer_name`, `customer_email`, `customer_phone`, `pick_up_time`, `payment_method`, `card_number`, `order`) VALUES (NULL, " . $customer_name . ", " . $customer_email . ", " . $customer_phone . ", " . $pick_up_time . ", " . $payment_method ", " . $card_number . ", " . $item_list . ")");
	//mysql_query("INSERT INTO `kinetic`.`orders` (`order_id`, `customer_name`) VALUES (NULL, '" . $customer_name ."')" );
	//mysql_query("INSERT INTO `kinetic`.`orders` (`order_id`, `customer_name`) VALUES (NULL, '')" );
	
	// convert to html for display

  ?>
  
  </script>	
	
</head>
<body>

  <div class="row">
    <div class="twelve columns">
      <h2>All done!</h2>
	  <h4>Your order is being processed now.<h4>
      <hr />
    </div>
  </div>

  <div class="row">
    <div class="eight columns"><div class="panel">
      <div class="row">
        <div class="two columns">
        </div>      	
        <div class="six columns">
        	<?php echo $item_list ?>
        </div>
        <div class="four columns">
            <?php 

			echo $price_list;
			echo $total_price;
            
            
            
            
            
            ?>
        </div>
      </div>       
    </div></div>

    <div class="four columns">	
    
      <center><p><b>Name: </b><?php echo $customer_name; ?> </p></center>
      <center><p><b>Email: </b><?php echo $customer_email; ?> </p></center>
      <center><p><b>Phone Number: </b><?php echo $customer_phone; ?> </p>	</center>
      <br>
      <center><p><b>Pick Up Time: </b><?php echo $pick_up_time; ?> </p></center>
      <center><p><b>Payment Method: </b><?php echo $payment_method; ?> </p></center>
      <center><p><b>Card Number </b><?php echo $card_number; ?> </p></center>
      <br>
      <center><img src="kineticlogo.jpg" width="500" ></center>
    </div>
    
  </div>

  
</body>
</html>
