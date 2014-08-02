<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Moon 2 Noon</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	include 'header.php';
	?>
	<div id="body">
		<div class="header">
			<div>
				<h1>Delicious Homemade food</h1>
				<p>
					Nutrition-balanced, vegetarian north-indian food delivered at your door-step right when you need it!
				</p>
			</div>
			<img  src="images/lacha_paratha_parotta-02.jpg" alt="">
			<div>
				<h3>100% homemade</h3>
				<ul>
					<li>
						<a href="#"> <img src="images/Thali.jpg" alt=""> <span></span> </a>
					</li>
					<li>
						<a href="#"> <img src="images/Dal.jpg" alt=""> <span></span> </a>
					</li>
				</ul>
			</div>
		</div>
		<div class="body">
			<div>
				<p>
					We currently deliver in Marathahalli, HSR layout, Whitefield, ITPL, Electronic City, Koramangala, C V Raman Nagar.
				</p>
			</div>
			<img src="images/try_now_yellow_green.gif" alt="">
			<div>
				<p>
					<!--?php echo $ORDER_NOW ?-->
					Every Meal includes- </br>
					4 Fulka, 1 dry sabji, 1 gravy, 1 Dal, Rice/Pulao, Salad seasonal, 1 Papad.
				</p>
			</div>
		</div>
		<div class="footer">
			<div class="figure">
					<div>
					<h3><a id="todays_menu">Today's Menu</h3>
					<?php
						include 'todays_menu.php';
					?>
					</div>
			</div>
			
			<div class="section">
				<h3>store hours</h3>
				<a href="#"><img src="images/open.jpg" alt=""></a>
				<p>
					<?php echo $ORDER_NOW;?>
					Timings:</br>
					8am - 9pm on All days
				</p>
			</div>
			
			<div id="Subscription" class="figure">
					<div>
					<h3>Subscription Plans</h3>
						<ul>
							<li>
							<b style="color:green">Rosy-Roti - Monthly Plan</b> </br>
							<p style="font-size:12px;color:#32b5ba">
								Weekday Lunch OR Dinner @ Rs 1200/- </br>
								Weekday Lunch+Dinner @ Rs 2300/- </br>
							</p>	
							</li>
							
							<!--li>
							<b style="color:green">Hafta-Vasooli - Weekly Plan</b> </br>
							<p style="font-size:12px;color:#32b5ba">
								Daily Lunch OR Dinner @ Rs 300/- </br>
								Daily Lunch+Dinner @ Rs 550/- </br>
							</p>	
							</li-->
							
							<li>
							<b style="color:green">Dabba-aang - Weekend Special</b> </br>
							<p style="font-size:12px;color:#32b5ba">
								Weekend Lunch OR Dinner @ Rs 80/- </br>
								Weekend Lunch+Dinner @ Rs 150/- </br>
							</p>							
							</li>
							<li>
							<b style="color:green">Chakh-De - Trial Offer</b> </br>
							<p style="font-size:12px;color:#32b5ba">
								Single Lunch OR Dinner @ Rs. 60/-
							</p>
							</li>

						</ul>
					</div>
			</div>
			<!--div class="article">
				<h3>Order Now!</h3>
				
				<p>
				Pick up the phone and Order Now at 9999999999!
				First 50 orders for the day can avail 50% discount!
				
				</p>
				
			</div-->	
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>