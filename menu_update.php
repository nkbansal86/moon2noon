<?php
require_once 'db.php';
function update($items){
	$sql = 'SELECT * FROM menu_items';
	$retval = fetch($sql);
	$update_sql = 'UPDATE menu_items SET available=%d WHERE id=%s';
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
		if(in_array($row['id'], $items) xor $row['available']) {
			$available = 1;
			if ($row['available']) {
				$available=0;
			}
			else {
				$available=1;
			}
			$sql = sprintf($update_sql, $available, $row['id']);
			$rv = execute($sql);
			if (!$rv) {
				die("Failed to update the menu item.");
			}
		}
	}
}
function get_menu_items() {
	$sql = 'SELECT name FROM menu_items';
	$retval = fetch($sql);
	$items = array();
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
		$items[] = $row['name'];
	}
	return $items;
}
function insert($menu_item){
	$sql = "INSERT INTO `menu_items` (`name`, `description`) VALUES ('%s', '%s')";
	if (!isset($menu_item['name'])) {
		die ("Name is mandatory for adding a new menu item");
	}
	$name= $menu_item['name'];
	$menu_itmes = get_menu_items();
	if( in_array($name, $menu_itmes)){
		die ("Menu item with name '". $name ."' already exists.");
	}
	$desc= '';
	if (isset($menu_item['desc'])) {
		$desc = $menu_item['desc'];
	}
	$sql=sprintf($sql, $name, $desc);
	$retval = execute($sql);
	if (!$retval) {
		die("Failed to insert menu item: " . $name);
	}
}
if(!empty($_POST)) {
	if (isset($_POST['menuUpdate']) and isset($_POST['menu_item_id'])){
		$items = $_POST['menu_item_id'];
		//foreach ($items as $item) {
		//	 echo $item . '<br>';
		//}
		update($items);
	}
	else if (isset($_POST['menuInsert'])) {
		$menu_item = Array();
		$menu_item['name'] = $_POST['menu_item_name'];
		$menu_item['desc'] = $_POST['menu_item_desc'];
		insert($menu_item);
	}
}
?>