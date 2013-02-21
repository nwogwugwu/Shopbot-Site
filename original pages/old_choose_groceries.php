<?php
include('config.php');
//include('sample.php');
?>

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

  <title>Shop Kinetic</title>
  
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
  
  <script>  
  
  function process()
  {
	//createFile();
  	count_items(); 
  }
  
  function createFile(){
	var object = new ActiveXObject("Scripting.FileSystemObject");
	var file = object.CreateTextFile("Hello.txt", false);
	//file.WriteLine('Hello World');
	file.WriteLine('once again without you knowing you melt my.'); 
	file.Close();
  }
  
   function count_items()
   {
   		var item_list = "";
      	var total_items;
   		var num_pom = 0; var num_apl = 0; var num_orn = 0; var num_lem = 0; var num_lim = 0;
		var num_car = 0; var num_cel = 0; var num_oni = 0; var num_pot = 0; var num_crn = 0;
		var num_mlk = 0; var num_btr = 0; var num_chs = 0; var num_ice = 0; var num_egg = 0;
		var num_chk = 0; var num_cow = 0; var num_slm = 0; var num_trk = 0; var num_prk = 0;   
		
		if(document.getElementById("pomegranage_textbox").value != "")
		{
			num_pom = parseInt(document.getElementById("pomegranage_textbox").value);
			if (num_pom != 0)   			
   			{ 
   				var new_string = num_pom +" pomegranate, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 		
   		if(document.getElementById("apple_textbox").value != "")
   		{ 
   		 num_apl = parseInt(document.getElementById("apple_textbox").value);
   		 	if (num_apl != 0)
   		 	{ 
   				var new_string = num_apl +" apple, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 	
   		if(document.getElementById("orange_textbox").value != "")
   		{
   		 num_orn = parseInt(document.getElementById("orange_textbox").value);   
   		 	if (num_orn != 0)
   		 	{ 
   				var new_string = num_orn +" orange, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 				
   		if(document.getElementById("lemon_textbox").value != "")
   		{
   		 num_lem = parseInt(document.getElementById("lemon_textbox").value);
   		 	if (num_lem != 0)
   		 	{ 
   				var new_string = num_lem +" lemon, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 				
		if(document.getElementById("lime_textbox").value != "")
		{
		 num_lim = parseInt(document.getElementById("lime_textbox").value);
		 	if (num_lim != 0)
		 	{ 
   				var new_string = num_lim +" lime, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 	
		
		if(document.getElementById("carrots_textbox").value != "")
		{
		 num_car = parseInt(document.getElementById("carrots_textbox").value);	
		 	if (num_car != 0)
		 	{ 
   				var new_string = num_car +" carrot, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 			
		if(document.getElementById("celery_textbox").value != "")
		{
		 num_cel = parseInt(document.getElementById("celery_textbox").value);
		 	if (num_cel != 0)
		 	{ 
   				var new_string = num_cel +" celery, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 				
		if(document.getElementById("onion_textbox").value != "")
		{
		 num_oni = parseInt(document.getElementById("onion_textbox").value);
		 	if (num_oni != 0)
		 	{ 
   				var new_string = num_oni +" onion, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 				
		if(document.getElementById("potato_textbox").value != "")
		{
		 num_pot = parseInt(document.getElementById("potato_textbox").value);
		 	if (num_pot != 0)
		 	{ 
   				var new_string = num_pot +" potato, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 				
		if(document.getElementById("corn_textbox").value != "")
		{
		 num_crn = parseInt(document.getElementById("corn_textbox").value);	
		 	if (num_crn != 0)
		 	{ 
   				var new_string = num_crn +" corn, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 	
				
		if(document.getElementById("milk_textbox").value != "")
		{
			num_mlk = parseInt(document.getElementById("milk_textbox").value);	
			if (num_mlk != 0)
			{ 
   				var new_string = num_mlk +" milk, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 			
		if(document.getElementById("butter_textbox").value != "")
		{
		 num_btr = parseInt(document.getElementById("butter_textbox").value);
		 	if (num_btr != 0)
		 	{ 
   				var new_string = num_btr +" butter, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 				
		if(document.getElementById("cheese_textbox").value != "")
		{
		 num_chs = parseInt(document.getElementById("cheese_textbox").value);
		 	if (num_chs != 0)
		 	{ 
   				var new_string = num_chs +" cheese, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 				
		if(document.getElementById("ice_cream_textbox").value != "")
		{
		 num_ice = parseInt(document.getElementById("ice_cream_textbox").value);	
		 	if (num_ice != 0)
		 	{ 
   				var new_string = num_ice +" ice cream, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 			
		if(document.getElementById("eggs_textbox").value != "")
		{
		 num_egg = parseInt(document.getElementById("eggs_textbox").value);		
		 	if (num_egg != 0)
		 	{ 
   				var new_string = num_egg +" egg, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 				
		
		if(document.getElementById("chicken_textbox").value != "")
		{
		 num_chk = parseInt(document.getElementById("chicken_textbox").value);
		 	if (num_chk != 0)
		 	{ 
   				var new_string = num_chk +" chicken, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 				
		if(document.getElementById("cow_textbox").value != "")
		{
		 num_cow = parseInt(document.getElementById("cow_textbox").value);
		 	if (num_cow != 0)
		 	{ 
   				var new_string = num_cow +" cow, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 	
		if(document.getElementById("salmon_textbox").value != "")
		{
		 num_slm = parseInt(document.getElementById("salmon_textbox").value);	
		 	if (num_slm != 0)
		 	{ 
   				var new_string = num_slm +" salmon, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 			
		if(document.getElementById("turkey_textbox").value != "")
		{
		 num_trk = parseInt(document.getElementById("turkey_textbox").value);
		 	if (num_trk != 0)
		 	{ 
   				var new_string = num_trk +" turkey, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 	
		if(document.getElementById("pig_textbox").value != "")
		{
		 num_prk = parseInt(document.getElementById("pig_textbox").value);	
		 	if (num_prk != 0)
		 	{ 
   				var new_string = num_prk +" pork, ";
   				item_list = item_list.concat(new_string);
   			}	
   		} 	
			
		item_list = item_list.concat("\n");
			
		total_items = (num_pom + num_apl + num_orn + num_lem + num_lim
		 + num_car + num_cel + num_oni + num_pot + num_crn
		 + num_mlk + num_btr + num_chs + num_ice + num_egg
		 + num_chk + num_cow + num_slm + num_trk + num_prk)
	
		//if (total_items > 10) alert(item_list);
		if (total_items > 10) alert("You have a total of " + total_items + " items, which exceeds the ten-item limit");
		if(total_items == 0) alert ("Please enter items to continue.");
		if((total_items <= 10) && (total_items > 0))
		{	
			//$.post("make_file.php", { name: "John" } );
		
  			<?php

			//$variable = $_GET["name"];

  			$myFile = "item_lists/tester.txt";					// make a text file
  			$fh = fopen($myFile, 'w') or die("can't open file");
  			$stringData = "this is working as an extension\n";
  			fwrite($fh, $stringData);
  			$stringData = "alrighty, then";
  			fwrite($fh, $stringData);
  			fclose($fh);

   			$myFile = "item_lists/tester.txt";					// read from the text file
			$fh = fopen($myFile, 'r');
			$theData = fread($fh, filesize($myFile));
			fclose($fh);
   				
   			$to = "ngozin@bu.edu";								// email the contents
 			$subject = "the fread text file";	
 			$body = $theData;
 			mail($to, $subject, $body)
  			
  			?>
  			
			//alert (item_list);
			window.location = 'payment_information.php';			 
		}

   }
  
  </script>
	
	
</head>
<body>

  <div class="row">
    <div class="twelve columns">
      <h2>Choose your groceries </h2>
      <hr />
    </div>
  </div>

  <div class="row">
    <div class="eight columns">
      
      <center>
      <dl class="tabs">
        <dd class="active"><a href="#simple1">Fruit</a></dd>
        <dd><a href="#simple2">Vegetables</a></dd>
        <dd><a href="#simple3">Dairy</a></dd>
        <dd><a href="#simple4">Meat</a></dd>
      </dl>
      </center>

      <ul class="tabs-content">
        <li class="active" id="simple1Tab">
        <table height="300">
        <tr>
			<th>Pomegranate</th>		
			<th>Apple</th>		
			<th>Orange</th>		
			<th>Lemon</th>			
			<th>Lime</th>
		</tr>
        <tr>
			<th>
				<img src="food_pics/fruit01_pomegranate.jpg" width="100" height="100"><br>
			</th>
			<th>
				<img src="food_pics/fruit02_apple.jpg" width="100" height="100"><br>
			</th> 
			<th>
				<img src="food_pics/fruit03_orange.jpg" width="100" height="100"><br>
			</th>
			<th>
				<img src="food_pics/fruit04_lemon.jpg" width="100" height="100"><br>
			</th>
			<th>
				<img src="food_pics/fruit05_lime.jpg" width="100" height="100"><br>
			</th>
		</tr>
		<tr>
		  	
			<th><select id="pomegranage_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>		
			<th><select id="apple_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="orange_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="lemon_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="lime_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
		</tr>
        </table>
        </li>
        
        <li id="simple2Tab">
		<table height="300">
        <tr>
			<th>Carrots</th>		
			<th>Celery</th>		
			<th>Onions</th>		
			<th>Potatoes</th>			
			<th>Corn</th>
		</tr>
        <tr>
			<th>
				<img src="food_pics/veg01_carrots.jpg" width="100" height="100"><br>
			</th>
			<th>
				<img src="food_pics/veg02_celery.jpg" width="100" height="100"><br>
			</th> 
			<th>
				<img src="food_pics/veg03_onion.jpg" width="100" height="100"><br>
			</th>
			<th>
				<img src="food_pics/veg04_potato.jpg" width="100" height="100"><br>
			</th>
			<th>
				<img src="food_pics/veg05_corn.jpg" width="100" height="100"><br>
			</th>
		</tr>
		<tr>
			<th><select id="carrots_textbox"  type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>	
			<th><select id="celery_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="onion_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="potato_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="corn_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
		</tr>
        </table>
        </li>
        
        <li id="simple3Tab">
		<table height="300">
        <tr>
			<th>Milk</th>		
			<th>Butter</th>		
			<th>Cheese</th>		
			<th>Ice Cream</th>			
			<th>eggs</th>
		</tr>
        <tr>
			<th>
				<img src="food_pics/dairy01_milk.jpg" width="100" height="100"><br>
			</th>
			<th>
				<img src="food_pics/dairy02_butter.jpg" width="100" height="100"><br>
			</th> 
			<th>
				<img src="food_pics/dairy03_cheese.jpg" width="100" height="100"><br>
			</th>
			<th>
				<img src="food_pics/dairy04_ice_cream.jpg" width="100" height="100"><br>
			</th>
			<th>
				<img src="food_pics/dairy05_eggs.jpg" width="100" height="100"><br>
			</th>
		</tr>
		<tr>
			<th><select id="milk_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="butter_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>		
			<th><select id="cheese_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="ice_cream_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="eggs_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
		</tr>
        </table>
        </li>
        
        <li id="simple4Tab">
		<table height="300">
        <tr>
			<th>Chicken</th>		
			<th>Beef</th>		
			<th>Salmon</th>		
			<th>Turkey</th>			
			<th>Pork</th>
		</tr>
        <tr>
			<th>
				<img src="food_pics/meat01_chicken.jpg" width="100" height="100"><br>
			</th>
			<th>
				<img src="food_pics/meat02_cow.jpg" width="100" height="100"><br>
			</th> 
			<th>
				<img src="food_pics/meat03_salmon.jpg" width="100" height="100"><br>
			</th>
			<th>
				<img src="food_pics/meat04_turkey.jpg" width="100" height="100"><br>
			</th>
			<th>
				<img src="food_pics/meat05_pig.jpg" width="100" height="100"><br>
			</th>
		</tr>
		<tr>
			<th><select id="chicken_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>		
			<th><select id="cow_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="salmon_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="turkey_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
			<th><select id="pig_textbox" type="int"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></th>
		</tr>
        </table>
        </li>
      </ul>
      
      <center>
      <div class="row">
        <div class="ten columns">
        <center>
           <div class="panel" onclick="process()">
        	 <p> Next Step </p>
            </div>
         </center>
         </div>    
       </div>
       </center>
      

      
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
    
    
    function process_order()
	{		
	
		num_pom=number(document.getElementById("pomegranage_textbox").value);		
		num_apl=document.getElementById("apple_textbox").value;
		
		alert(num_pom + " pomegranates?");
		
		num_orn=document.getElementById("orange_textbox").value;
		num_lem=document.getElementById("lemon_textbox").value;
		num_lim=document.getElementById("lime_textbox").value;
		
		num_car=document.getElementById("carrots_textbox").value;
		num_cel=document.getElementById("celery_textbox").value;
		num_oni=document.getElementById("onion_textbox").value;
		num_pot=document.getElementById("potato_textbox").value;
		num_crn=document.getElementById("corn_textbox").value;
		
		num_mlk=document.getElementById("milk_textbox").value;
		num_btr=document.getElementById("butter_textbox").value;
		num_chs=document.getElementById("cheese_textbox").value;
		num_ice=document.getElementById("ice_cream_textbox").value;
		num_egg=document.getElementById("eggs_textbox").value;
		
		num_chk=document.getElementById("chickem_textbox").value;
		num_cow=document.getElementById("cow_textbox").value;
		num_slm=document.getElementById("salmon_textbox").value;
		num_trk=document.getElementById("turkey_textbox").value;
		num_prk=document.getElementById("pig_textbox").value;
		
		tot_items=num_pom + num_apl + num_orn + num_lem + num_lim + num_car + num_cel + num_oni + num_pot + num_crn + num_mlk + num_btr + num_chs + num_ice + num_egg + num_chk + num_cow + num_slm + num_trk + num_prk
		
		if((tot_items>10)||(num_pom>6))
		{		
			alert("Sorry, but there's a maximum of ten items.");
		}
		
	}
    
    
    </script> 
  
</body>
</html>
