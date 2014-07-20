<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Freshly Baked Pies - Snacks Website Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	include 'header.php';
	?>
	
	<div id="today_menu">
	</div>
	
	<div id="body">
		<div id="content">
			<ul class="gallery">
			
			<?php 
			$sql = 'SELECT * FROM menu_items';
			$retval = fetch($sql);
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
			$items[$row['id']] = $row;
			?>
			<li>
					<a href="#" class="figure">
						<img src="<?php echo $row['image']; ?>" alt="">
						<span><?php echo $row['name']; ?></span>
					</a>
				</li>
				
			<?php
			}
			?>
				<li class="last">
					<p>
						This website template hahs been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forum</a>.
					</p>
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<div>
			<div>
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" id="facebook">Facebook</a>
				<a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" id="twitter">Twitter</a>
				<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" id="googleplus">googleplus</a>
			</div>
			<p>
				&copy; Copyright 2012. All rights reserved
			</p>
		</div>
	</div>
</body>
</html>