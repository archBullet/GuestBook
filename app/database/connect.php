<?php


$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'miniproekt';

try {
	$dbh = new PDO(
		"mysql:host=$host; dbname=$dbname",
		$user,
		$pass,
		[
			PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]
	);
	$pdo = (new FeedbackDataGateway($dbh));
} catch (PDOException $e) {
	echo "Error!: " . $e->getMessage() . "<br>";
	die();
}
