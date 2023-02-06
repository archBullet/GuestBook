<?php

require_once 'connect.php';
require_once 'app/model/Feedback.php';


class FeedbackDataGateway
{
	private $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function addFeedback(Feedback $feedback)
	{
		$stm = $this->pdo->prepare("INSERT INTO feedback (name, content, date) VALUES (:name, :content, :date)");
		
		$stm->execute($feedback->getFeedback());
		return $this;
	}
}
