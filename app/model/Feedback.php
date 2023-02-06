<?php


class Feedback {
	private array $feedback = [];

	public function __construct(string $name, string $content) {
		$this->feedback['name'] = $name;
		$this->feedback['content'] = $content;
		$this->feedback['date'] = date('d.m.Y H:i:s', time());
	}

	public function getFeedback(): array {
		return $this->feedback;
	}
}