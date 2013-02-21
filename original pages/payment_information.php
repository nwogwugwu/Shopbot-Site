<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Payment & Pick Up</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  <script src="javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <style>
  	body
	{
		background-image:url('blueprint_background.jpg');
	{
  </style>

	
</head>
<body>

  <div class="row">
    <div class="twelve columns">
      <h2>Payment and Pick Up Information</h2>
      <hr />
    </div>
  </div>

  <div class="row">
    <div class="eight columns">
    
      <h4>Your Items</h4>
      <div class="row">
        <div class="twelve columns">
          <div class="panel">
            <p>Your items + cost</p>
          </div>
        </div>
      </div>
      
      
            
      <h4>Your Information</h4>
      <div class="row">
        <div class="twelve columns">
          <div class="panel">
    		<label for="customer_name"> Name: </lable>
    		<input id="custumer_name" type="text">
    		<label for="customer_phone"> Phone Number: </lable>
    		<input id="custumer_phone" type="text">
          </div>
        </div>
      </div>
      
      
     <h4>Pick Up Information</h4>
      <div class="row">
        <div class="twelve columns">
          <div class="panel">
  			<label for="selectList">Please Select a Time</label>
 			<select id="selectList">
    			<option value="Option 1">This Afternoon</option>
  			 	<option value="Option 2">Tomorrow Morning</option>
   			 	<option value="Option 3">Tomorrow Afternoon</option>
  			</select>
          </div>
        </div>
      </div>
      
      
      <h4>Payment Information</h4>
      <div class="row">
        <div class="twelve columns">
          <div class="panel">
            <fieldset>
    			<label for="regularRadio">
    			  <input type="radio" name="radios" id="cash_radio" value="cash radio" />
    			  <span>Cash</span>
    			</label>
    			
    			<label for="secondRegularRadio">
    			  <input type="radio" name="radios" id="credit_radio" value="credit radio" />
    			  <span>Credit Card</span>
    			</label>
    			  <label for="time_to_pick_up"> Credit Card Number: </lable>
    			  <input id="time_to_pick_up" type="text">
  			</fieldset>  
          </div>
        </div>
      </div>
          
    
      <a href="confirmation_page.php">
      <div class="row">
        <div class="eight columns">
          <div class="panel">
            <p> Finish </p>
          </div>
        </div>
      </div>
      </a>
       
    </div>

    <div class="four columns">
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
		Right now, we accept credit card and cash
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



  
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

  
    <script>
    $(window).load(function(){
      $("#featured").orbit();
    });
    </script> 
  
</body>
</html>
