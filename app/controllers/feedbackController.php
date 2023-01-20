<?php

require_once 'app/model/Feedback.php';
require_once 'app/controllers/JSONfunctions.php';

$feedbacks = array_reverse(getJSON());

function sendForm() {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$name = trim($_POST['name']);
		$content = trim($_POST['content']);
		addJSON(new Feedback($name, $content));
		header("Location: " . $_SERVER["REQUEST_URI"]);
		exit();
	}
	
}

sendForm();