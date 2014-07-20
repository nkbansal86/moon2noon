<ul>
<?php 
require_once 'db.php';
			$sql = 'SELECT * FROM menu_items WHERE available=1';
			$retval = fetch($sql);
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
			$items[$row['id']] = $row;
?>
	<li>
		<!--img src="images/bullet.png" alt=""-->
		<span><?php echo $row['name']; ?></span>
	</li>			
<?php
	}
?>
</ul>