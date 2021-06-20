<?php

$servername = "localhost";
$database = "partiel_wd_blanc";
$username = "root";
$password = "root";

$sql = "mysql:host=$servername;dbname=$database;";

try {
	$pdo = new PDO($sql, $username, $password);
	echo "Connected successfully";
} catch (PDOException $error) {
	echo 'Connection error: ' . $error->getMessage();
}