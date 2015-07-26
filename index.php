<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
$pageData = new stdClass();
$pageData->title = "Object Title";
$pageData->content = <h1>Hello from Object</h1>
$page = include_once "templates/page.php";
echo $page;
