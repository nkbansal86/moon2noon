<?php
require_once 'config.inc.php';

function ro_conn() {
global $database;
$conn = mysql_connect($database['host'], $database['ro_user'], $database['ro_pass']);

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db($database['name']);
return $conn;
}

function rw_conn() {
global $database;
$conn = mysql_connect($database['host'], $database['rw_user'], $database['rw_pass']);

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db($database['name']);
return $conn;
}
function fetch($query) {
	$conn = ro_conn();
	$retval = mysql_query($query, $conn );
	if(! $retval )
	{
		die('Could not get data: ' . mysql_error());
	}
	mysql_close($conn);
	return $retval;
}

function execute($query) {
	$conn = rw_conn();
	$retval = mysql_query($query, $conn );
	if(! $retval )
	{
		die('Could not update the data: ' . mysql_error());
	}
	mysql_close($conn);
	return $retval;
}
?>