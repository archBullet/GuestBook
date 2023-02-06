<?php


class Feedback {
	private string $time;
	private string $name;
	private string $content;
	private array $feedback = [];

	public function __construct(string $name, string $content) {
		$this->time = date('d.m.Y H:i:s', time());
		$this->name = $name;
		$this->content = $content;
		$this->feedback['name'] = $name;
		$this->feedback['content'] = $content;
		$this->feedback['date'] = date('d.m.Y H:i:s', time());
	}

	public function getFeedback(): array {
		// $this->feedback['id'] = $id;
		return $this->feedback;
	}

	public function getTime(): string {
		return $this->time;
	}
	
	public function setTime(string $time): self {
		$this->time = $time;
		return $this;
	}

	public function getName(): string {
		return $this->name;
	}

	public function setName(string $name): self {
		$this->name = $name;
		return $this;
	}

	public function getContent(): string {
		return $this->content;
	}

	public function setContent(string $content): self {
		$this->content = $content;
		return $this;
	}
}