<?php
require 'parse.php';

$in = readconf("config.txt");
foreach ($in as $key => $value)
{
	print $key . " is " . $value . " (Data type is : " . gettype($value) . ")<br />";
}

?>