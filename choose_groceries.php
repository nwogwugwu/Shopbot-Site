<?php include('config.php'); ?>
<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Shop Kinetic</title>
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  <script src="javascripts/modernizr.foundation.js"></script>

</head>
<script language="JavaScript" src="gen_validatorv4.js"
type="text/javascript" xml:space="preserve"></script>
<body>

  <div class="row">
<div class="four columns">
<a href="welcome_page.php"><img src="home.png" ></a>
</div>
    <div class="eight columns">
      <h2>Choose your groceries </h2>
      <hr />
    </div>
  </div>

  <div class="row">
    <div class="eight columns">
      
      <center>
      <dl class="tabs">
        <dd class="active"><a href="#simple1">Your Information</a></dd>
        <dd><a href="#simple2">Groceries</a></dd>
        <dd><a href="#simple3">Payment and Pickup information</a></dd>
      </dl>
      </center>   
      
<form action = "confirmation_page.php" method = "post" id="myform">
      <ul class="tabs-content">      
      
        <li class="active" id="simple1Tab">
		  <label for="customer_name">Name</label>
		  <input type="text"  name = "customer_name" id="customer_name" />
		  <label for="customer_email">Email</label>
		  <input type="text" name = "customer_email" id="customer_email" />
		  <label for="phone_number">Phone Number</label>
		  <input type="text" name = "customer_phone" id="phone_number" />
        </li>
        
        <li id="simple2Tab">
        <table height="300">
        <tr>
			<th>Pomegranate</th>		
			<th>Apple</th>		
			<th>Orange</th>		
			<th>Lemon</th>			
			<th>Lime</th>
		</tr>
        <tr>
			<th><img src="food_pics/fruit01_pomegranate.jpg" width="100" height="100"><br></th>
			<th><img src="food_pics/fruit02_apple.jpg" width="100" height="100"><br></th> 
			<th><img src="food_pics/fruit03_orange.jpg" width="100" height="100"><br></th>
			<th><img src="food_pics/fruit04_lemon.jpg" width="100" height="100"><br></th>
			<th><img src="food_pics/fruit05_lime.jpg" width="100" height="100"><br></th>
		</tr>
		<tr>  	
			<th><select id="pomegranage_textbox" name = "num_pom" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>		
			<th><select id="apple_textbox"  name = "num_apl" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="orange_textbox" name = "num_orn"  type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="lemon_textbox" name = "num_lmn"  type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="lime_textbox"  name = "num_lim" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
		</tr>
		</table>

		<table height="300">
		<tr>
			<th>Carrots</th>		
			<th>Celery</th>		
			<th>Onions</th>		
			<th>Potatoes</th>			
			<th>Corn</th>
		</tr>
        <tr>
			<th><img src="food_pics/veg01_carrots.jpg" width="100" height="100"><br></th>
			<th><img src="food_pics/veg02_celery.jpg" width="100" height="100"><br></th> 
			<th><img src="food_pics/veg03_onion.jpg" width="100" height="100"><br></th>
			<th><img src="food_pics/veg04_potato.jpg" width="100" height="100"><br></th>
			<th><img src="food_pics/veg05_corn.jpg" width="100" height="100"><br></th>
		</tr>
		<tr>
			<th><select id="carrots_textbox"  name = "num_car"  type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>	
			<th><select id="celery_textbox" name = "num_cel"  type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="onion_textbox" name = "num_oni"  type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="potato_textbox"  name = "num_pot" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="corn_textbox"  name = "num_crn" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
		</tr>
		</table>

		<table height="300">
        <tr>
			<th>Milk</th>		
			<th>Butter</th>		
			<th>Cheese</th>		
			<th>Ice Cream</th>			
			<th>eggs</th>
		</tr>
        <tr>
			<th> <img src="food_pics/dairy01_milk.jpg" width="100" height="100"><br> </th>
			<th> <img src="food_pics/dairy02_butter.jpg" width="100" height="100"><br> </th> 
			<th> <img src="food_pics/dairy03_cheese.jpg" width="100" height="100"><br> </th>
			<th> <img src="food_pics/dairy04_ice_cream.jpg" width="100" height="100"><br> </th>
			<th> <img src="food_pics/dairy05_eggs.jpg" width="100" height="100"><br> </th>
		</tr>
		<tr>
			<th><select id="milk_textbox"  name = "num_mlk" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="butter_textbox"  name = "num_btr" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>		
			<th><select id="cheese_textbox" name = "num_chs"  type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="ice_cream_textbox"  name = "num_ice" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="eggs_textbox" name = "num_egg"  type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
		</tr>
		</table>

		<table height="300">
        <tr>
			<th>Chicken</th>		
			<th>Beef</th>		
			<th>Salmon</th>		
			<th>Turkey</th>			
			<th>Pork</th>
		</tr>
        <tr>
			<th><img src="food_pics/meat01_chicken.jpg" width="100" height="100"><br></th>
			<th><img src="food_pics/meat02_cow.jpg" width="100" height="100"><br></th> 
			<th><img src="food_pics/meat03_salmon.jpg" width="100" height="100"><br></th>
			<th><img src="food_pics/meat04_turkey.jpg" width="100" height="100"><br></th>
			<th><img src="food_pics/meat05_pig.jpg" width="100" height="100"><br></th>
		</tr>
		<tr>
			<th><select id="chicken_textbox"  name = "num_chk" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>		
			<th><select id="cow_textbox" name = "num_cow"  type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="salmon_textbox" name = "num_smn"  type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="turkey_textbox" name = "num_trk"  type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="pig_textbox" name = "num_pig"  type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
		</tr>
        </table>
        </table>
        </li>

<script type="text/javascript" src="validate.min.js"></script>

        <li id="simple3Tab">    
        
          <!-- pickup time -->

<label for="pick_up_time">Time to pick up</label>
<input type="text"  name = "pick_up_time" id="pick_up_time" />
<label for="card_number">Card Number</label>
<input type="text" name = "card_number" id="card_number" />
    <input type="submit" />
      
        </li>
        

      </ul>
</form>

      
    </div>   
    
    <div class="four columns">
      <h4>Pick the food you want</h4>
      <p>
      Enter the number of items you want for all the items
      given. If you do not want an item, leave the textbox
      blank.
      <br><br>
      When you're done, go ahead and press the Next Step button.     
      </p>

      <h4>Ten Max</h4>
	  <p>
	  Please keep in mind that since this is a brand new
	  project, we need to limit our orders to ten items.
	  </p>
	  
	        <p>
		Please confirm that this really is the food you want to get.
      </p>
      
      <h4> Picking Up Your Food</h4>
      <p>
        You can pick up your food at your local Photonics.
        <br><br>
        Can't make it in time? No problem! We hold food for one day after the pickup time.
      </p>

      <h4>Paying</h4>
	  <p>
		Right now, we only accept credit cards.
		<br><br>
		If you select the cash option,
    	you will be able to pay when you pick up your groceries.
    	<br><br>
    	Otherwise all you will need to pick your groceries up
    	is the receipt you can get on the next page.
    	<br><br>
    	Let's save on paper! 50 cents off if you show the receipt on your smartphone.
	  </p>
	  
       <img src="kineticlogo.jpg" width="500" >
    </div>
     
  </div>

  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
  <script>
    function add_items(items_so_far, textbox_name) // intended to add up all the items
    {
      var num_item = 0;
      if(document.getElementById(textbox_name).value != "")
        num_item = parseInt(document.getElementById(textbox_name).value);
      return items_so_far + num_item;
    }
  </script>

<script  type="text/javascript">
    var frmvalidator = new Validator("myform");
    frmvalidator.addValidation("customer_name","req","Please enter your  Name");

    frmvalidator.addValidation("customer_email","req","Please enter your EMail");
    frmvalidator.addValidation("customer_email","email", "Invalid email address");

    frmvalidator.addValidation("phone_number","req", "Please enter your phone number");
    frmvalidator.addValidation("phone_number","numeric", "Invalid Phone Number");

    frmvalidator.addValidation("pick_up_time","req", "Please enter your pick up time");

    frmvalidator.addValidation("card_number","req", "Please enter your card number");
    frmvalidator.addValidation("card_number","numeric", "Invalid Card Number");
</script>

</body>
</html>
