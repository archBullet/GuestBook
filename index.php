<?php

require_once 'app/controllers/feedbackController.php';
require_once 'app/controllers/pagination.php';

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
					<? if ($page != 1) : ?>
						<li>
							<a href='<?= "?page=" . $page - 1 ?>' aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
					<? else : ?>
						<li class="disabled" style="pointer-events: none;">
							<a href='<?= "?page=" . $page - 1 ?>' aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
					<? endif; ?>
					<? for ($i = 1; $i <= $pageCount; $i++) : ?>
						<li><a href="<?= "?page=$i" ?>"><?= $i ?></a></li>
					<? endfor; ?>
					<? if ($page < $pageCount) : ?>
						<li>
							<a href='<?= "?page=" . $page + 1 ?>' aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					<? else : ?>
						<li class="disabled" style="pointer-events: none;">
							<a href='<?= "?page=" . $page ?>' aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					<? endif; ?>
				</ul>
			</nav>
		</div>

		<? for ($i = ($page - 1) * $feedRange; $i < $page * $feedRange; $i++) : ?>
			<? if ($i < $feedCount) : ?>
				<div class="note">
					<p>
						<span class="date"><?= $feedbacks[$i]['date'] ?></span>
						<span class="name"><?= $feedbacks[$i]['name'] ?></span>
					</p>
					<p>
						<?= $feedbacks[$i]['content'] ?>
					</p>
				</div>
			<? endif; ?>
		<? endfor; ?>

		<!-- Не работает, пока не отключить редирект -->
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