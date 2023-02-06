<?php

require_once 'app/model/Feedback.php';
require_once 'app/database/FeedbackDataGateway.php';
require_once 'app/database/connect.php';

$feedbacks = array_reverse($pdo->getFeedback());

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = trim($_POST['name']);
	$content = trim($_POST['content']);
	$feedback = new Feedback($name, $content);
	try {
		$pdo->addFeedback($feedback);
	} catch (PDOException $e) {
		echo $e;
	}

	// Если отключить две нижние строки - заработает сообщение
	// об успешном добавлении поста
	header("Location: " . $_SERVER["REQUEST_URI"]);
	exit();
}