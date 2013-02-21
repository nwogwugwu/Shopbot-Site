<!DOCTYPE html>


<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width" />

  <title>Shop Kinetic</title>
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  <script src="javascripts/modernizr.foundation.js"></script>

  <script>
	function update_current_id()
	{<?php
		include('config.php');
		mysql_select_db("customer_info", $con);
	
		mysql_query("UPDATE current_order_id SET number = number + 1 WHERE current_id = 'id_to_use'");
	
	?>
	window.location = 'choose_groceries.php'; 
	}
  </script>
	
</head>
<body>

  <div class="row">
  
  <div class="eight columns"> 
      <h2>Kinetic Presents</h2>
      <h3>The Automated Grocery Shopping Experience</h3>
  </div>
  <hr />
  </div>

  <div class="row">
    <div class="eight columns">

      <div class="row">
        <div class="eight columns">
        <h4> A new way to shop </h4>
        <p>
        No more lines, no more hassle. Just tell us what you want,
        and we'll take care of the rest.<br>
        </p>
        
          <div class="panel" onclick="update_current_id()">
            <p> Get Started! </p>
          </div>
          
        </div>
      </div>
      
    </div>

    <div class="four columns">
      <h4>About Team Kinetic</h4>
      <p>
      We're a group of Electrical and Computer Engineering Students
      at Boston University
      <br><br>
      Using our super engineering skills, we're building a machine
      that shops for you
      
      </p>

      <h4>Our Sponsors</h4>
      <ul class="disc">
        <li><a href="http://www.bu.edu/ece/">Boston University</a><br />
        This is where we go to school</li>
        <li><a href="http://www.raytheon.com/">Raytheon</a><br />
        Raytheon is our customer. They're funding this project.</li>
      </ul>
       <img src="kineticlogo.jpg" width="500" >
    </div>
  </div>
  
 
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
