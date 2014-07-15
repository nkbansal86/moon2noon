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
	<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM menu_items';

mysql_select_db('moon2noon');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
 /*    echo "ID :{$row['id']}  <br> ".
         "NAME : {$row['name']} <br> ".
         "DESC: {$row['description']} <br> ".
         "--------------------------------<br>"; */
		 
		 $items[$row['id']] = $row;
} 
echo "<pre>";
print_r($items);
echo "Fetched data successfully\n";
mysql_close($conn);
echo "items['1']['image']";
echo $items['1']['image'];
?>
	
	</div>
	
	<div id="body">
		<div id="content">
			<ul class="gallery">
			
			<?php 
			
			?>
				<li>
					<a href="#" class="figure">
						<?php echo '<img src="' . $items['1']['image'] . '" alt=""';?>
						<span>This is just a place holder, so you can see what the site would look like.</span>
					</a>
				</li>
				<li>
					<a href="#" class="figure">
						<img src="<?php echo $items['7']['image'];?>" alt="">
						<span>This is just a place holder, so you can see what the site would look like.</span>
					</a>
				</li>
				<li>
					<a href="#" class="figure">
						<img src="<?php echo $items[1]['image'];?>" alt="">
						<span>This is just a place holder, so you can see what the site would look like.</span>
					</a>
				</li>
				<li>
					<a href="#" class="figure">
						<img src="images/mini-tarts.jpg" alt="">
						<span>This is just a place holder, so you can see what the site would look like.</span>
					</a>
				</li>
				<li>
					<a href="#" class="figure">
						<img src="images/creampie.jpg" alt="">
						<span>This is just a place holder, so you can see what the site would look like.</span>
					</a>
				</li>
				<li>
					<a href="#" class="figure">
						<img src="images/pie.jpg" alt="">
						<span>This is just a place holder, so you can see what the site would look like.</span>
					</a>
				</li>
				<li>
					<a href="#" class="figure">
						<img src="images/ham2.jpg" alt="">
						<span>This is just a place holder, so you can see what the site would look like.</span>
					</a>
				</li>
				<li>
					<a href="#" class="figure">
						<img src="images/strawberry2.jpg" alt="">
						<span>This is just a place holder, so you can see what the site would look like.</span>
					</a>
				</li>
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