<?php


function addJSON(Feedback $feedback)
	{
		$feedbacks = getJSON();
		$lastId = end($feedbacks)['id'];
		$id = $lastId + 1;
		$feedbacks[$id] = $feedback->getFeedback($id);
		saveJSON($feedbacks);
	}

	function getJSON(): array
	{
		return json_decode(file_get_contents('feedback.json'), true);
	}

	function saveJSON($feedbacks)
	{
		return file_put_contents('feedback.json', json_encode($feedbacks, JSON_UNESCAPED_UNICODE));
	}