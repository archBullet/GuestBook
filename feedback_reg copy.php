<?php

// namespace app\model\Feedback;
// use Feedback;
require_once 'app/model/Feedback.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// echo 'post';
	$name = trim($_POST['name']);
	$content = trim($_POST['content']);

	// $feedback = new Feedback($name, $content);
	// $feedback[1] = [$feedback];
	// file_put_contents('feedback.json', json_encode($feedback->getFeedback()));


	// file_put_contents('feedback.json', json_encode($feedback));



	function addJSON(Feedback $feedback)
	{
		$feedbacks = getJSON();
		var_dump($feedbacks);
		// $feedbacks[3] = $feedback->getFeedback();
		// saveJSON($feedbacks);
		// $lastID = end($feedbacks);
		// print_r($lastID);
	}

	function getJSON(): array
	{
		return [json_decode(file_get_contents('feedback.json'))];
	}

	function saveJSON($feedbacks)
	{
		return file_put_contents('feedback.json', json_encode($feedbacks));
	}

	addJSON(new Feedback($name, $content));
}
