<!DOCTYPE html>
<html>
	<head>
		<title> MVC Sample php </title>
		<meta charset=utf-8 />
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta name="description" content="This is a basic mvc example" />
		<meta name="keywords" content="php,sample,mvc" />
		<?php
			foreach($header_date["css"] as &$value)
			{
		?>
			<link rel="stylesheet" href="<?= $value ?>" />
		<?php
			}
		?>
	</head>
	<body>