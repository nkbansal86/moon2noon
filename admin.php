<?php
require_once 'db.php';
include 'menu_update.php';
?>
<!DOCTYPE html>
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
		<div id="todays_menu">
			
			<form action='admin.php' method="POST">
			<span>Today's Menu</span>
			<ol class="gallery">
			
			<?php 
			$sql = 'SELECT * FROM menu_items';
			$retval = fetch($sql);
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
			?>
			<li>
			<input type="checkbox" value="<?php echo $row['id']; ?>" name="menu_item_id[]" <?php if ($row['available']=='1'){ echo 'checked';}?>>
			<?php echo $row['name']; ?>
			</li>
			<?php
			}
			?>
			</ol>
			<input type="submit" name='menuUpdate' value="Update">
			</form>
		</div>
		<div id="add_menu">
		
		<form action='admin.php' method="POST">
		<span>Add new menu item</span>
			<label>Name:</label> <input type="text" name='menu_item_name'>
			<label>Description:</label> <input type="text" name='menu_item_desc'>
			<input type="submit" name='menuInsert' value="Add">
		</form>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>