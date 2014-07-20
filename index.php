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
					Nutrition balanced, exotic north-indian food delivered at your door-step right when you need it!
				</p>
			</div>
			<img src="images/freshly-baked.jpg" alt="">
			<div>
				<h3>100% homemade</h3>
				<ul>
					<li>
						<a href="fresh.php"> <img src="images/ham.jpg" alt=""> <span>This is just a place holder</span> </a>
					</li>
					<li>
						<a href=""> <img src="images/tart.jpg" alt=""> <span>This is just a place holder</span> </a>
					</li>
				</ul>
			</div>
		</div>
		<div class="body">
			<div>
				<p>
					Checkout out our <a href>subscription plans</a> for delivery in Indiranagar, BTM, Koramangala, Whitefield
				</p>
			</div>
			<img src="images/strawberry-tart.png" alt="">
			<div>
				<p>
					Subscribe for monthly plan of as low as Rs. 1000/- and 1 time delivery for just Rs. 50/-.
				</p>
			</div>
		</div>
		<div class="footer">
			<div class="figure">
					<div>
					<h3>Today's Menu</h3>
					<?php
						include 'todays_menu.php';
					?>
					</div>
			</div>
			<div class="article">
				<h3>Order Now!</h3>
				
				<p>
				Pick up the phone and Order Now at 9999999999!
				First 50 orders for the day can avail 50% discount!
				
				</p>
				
			</div>	
			
			<div class="section">
				<h3>store hours</h3>
				<a href="#"><img src="images/open.jpg" alt=""></a>
				<p>
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
				</p>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>