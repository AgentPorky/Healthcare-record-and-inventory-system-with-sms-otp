<?php

$servername= "localhost";
$unmae= "root";
$password = "";

$db_name = "ths_healthcare";

$conn = mysqli_connect($servername, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}