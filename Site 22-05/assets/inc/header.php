<?php
	$server = "http://".$_SERVER["SERVER_NAME"];
?>


<!DOCTYPE html>
	<html lang="EN">
		<head>
			<title>Brightside</title>
			<meta charset="UTF-8">
			<link href="http://www.bootswatch.com/cosmo/bootstrap.min.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" type="text/css" href='/assets/css/main.css'>
		</head>

		<body>
			<div class="wrapper">
				<header><h1 class="headertext">Fifadev</h1></header>
				<nav class="header-nav">
					<ul class="left">
						<li><a href="<?php echo $server; ?>">Home</a></li>
						<li><a href="<?php echo $server."/live" ?>">Livestream</a></li>
						<li><a href="<?php echo $server."/resultaten" ?>">Resultaten</a></li>
						<li><a href="<?php echo $server."/knockout" ?>">Knockout</a></li>
					</ul>

					<ul class="left">
						<li class="right"><a href="<?php echo $server."/admin" ?>">Admin</a></li>
					</ul>
				</nav>

				<div class="clear"></div>