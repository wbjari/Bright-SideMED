<?php

/*
try {
$con = new PDO('mysql:host=localhost;dbname=fifadev', 'root', '1234');
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo 'error: ' . $e->getMessage();
*/

	$con = mysqli_connect('mysql1095.servage.net', 'svenluijten', 'svenluijten1', 'svenluijten') or die('Error:' . mysqli_error($con));
?>