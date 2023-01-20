<?php


class Feedback {
	private array $feedback = [];

	public function __construct(string $name, string $content) {
		$this->feedback['time'] = date('d.m.Y H:i:s', time());
		$this->feedback['name'] = $name;
		$this->feedback['content'] = $content;
	}

	public function getFeedback($id): array {
		$this->feedback['id'] = $id;
		return $this->feedback;
	}
}