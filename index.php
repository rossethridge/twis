<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
$pageData = new stdClass();
$pageData->title = "Ross Ethridge Portfolio Site";
$pageData->content = include_once "views/navigation.php";
$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked) {
	$fileToLoad = $_GET['page'];
	$pageData->content .=include_once "views/$fileToLoad.php";
	}
$page = include_once "templates/page.php";
echo $page;
