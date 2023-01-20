<?php

require_once 'app/controllers/feedbackController.php';

?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Гостевая книга</title>
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<div id="wrapper">
		<h1>Гостевая книга</h1>
		<div>
			<nav>
				<ul class="pagination">
					<li class="disabled">
						<a href="?page=1" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="active"><a href="?page=1">1</a></li>
					<li><a href="?page=2">2</a></li>
					<li><a href="?page=3">3</a></li>
					<li><a href="?page=4">4</a></li>
					<li><a href="?page=5">5</a></li>
					<li>
						<a href="?page=5" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<? foreach ($feedbacks as $feedback) : ?>
			<div class="note">
				<p>
					<span class="date"><?= $feedback['time'] ?></span>
					<span class="name"><?= $feedback['name'] ?></span>
				</p>
				<p>
					<?= $feedback['content'] ?>
				</p>
			</div>
		<? endforeach; ?>
		<? if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
			<div class="info alert alert-info">
				Запись успешно сохранена!
			</div>
		<? endif; ?>
		<div id="form">
			<form action="" method="POST">
				<p><input class="form-control" placeholder="Ваше имя" name="name"></p>
				<p><textarea class="form-control" placeholder="Ваш отзыв" name="content"></textarea></p>
				<p><input type="submit" class="btn btn-info btn-block" value="Сохранить" name="btn-submit"></p>
			</form>
		</div>
	</div>
</body>

</html>