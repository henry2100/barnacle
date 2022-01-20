<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$dbInfo = "mysql:host=localhost;dbname=sample_blog";
	$dbUser = "root";
	$dbPass = "";
	$db = new PDO($dbInfo, $dbUser, $dbPass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	include_once "model/Page_Data.class.php";
	$pg_var = new Page_Data();

	$pg_var->title = "";
	$pg_var->nav = "";
	$pg_var->content = "";
	$pg_var->sidebar = "";
	$pg_var->footer = "";
	$pg_var->loader = "";

	$pg_var->addCSS("");

	$pg_var->addJS("");

	$pg_embeddedStyle = "<style></style>";

	$page = include_once "view/template/page.php";
	echo $page;
?>