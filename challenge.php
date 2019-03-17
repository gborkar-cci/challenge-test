<?php 
/**
 * program that prints all the numbers from 1 to 100. However, for
 * multiples of 3, instead of the number, print "Kadeaa". For multiples of 5 print
 * "IT". For numbers which are multiples of both 3 and 5, print "Kadeeans".
 */
$version = "";

if(isset($_GET["version"]) && trim($_GET["version"])) {
	$version = trim($_GET["version"]);
}

require_once("Classes\class.helper.php");

$helper = new Helper();
$helper->findMultiples(100, $version);
?>