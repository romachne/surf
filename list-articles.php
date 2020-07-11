<html>
<head>
	<title>Surf Dashboard</title>

	<?php
		require_once 'includes/header.php';

		if (!isset($_SESSION['admin_session']) )
		{
			$commons->redirectTo(SITE_PATH.'login.php');
		}

		require_once ROOT."../includes/classes/admin-class.php";

		$admins 	= new Admins($dbh);
		$articlesSurfing = $admins->fetchArticlesSurfing();
		$articlesKitesurfing = $admins->fetchArticlesKitesurfing();
		$articlesSapsurfing = $admins->fetchArticlesSapsurfing();
		$articlesWakeboarding = $admins->fetchArticlesWakeboarding();
	?>

	<main class="container">
		<div class="admin-pannel">
			
			<div class="dashboard">
				<h3>Сёрфинг</h3>
				<hr>
			<?php if (isset($articlesSurfing)) :?>
				<?php foreach ($articlesSurfing as $article) :?>
					<li><a href="view-article-details.php?id=<?= $article->id ?>&tag=surfing" title="Click to view product"><?= htmlspecialchars(strip_tags($article->headline)) ?></a></li>
				<?php endforeach ?>
			<?php else: ?>
			<h3>Таких статей нет :(</h3>
			<?php endif ?>
				<h3>Кайтсёрфинг</h3>
				<hr>
			<?php if (isset($articlesKitesurfing)) :?>
				<?php foreach ($articlesKitesurfing as $article) :?>
					<li><a href="view-article-details.php?id=<?= $article->id ?>&tag=kitesurfing" title="Click to view product"><?= htmlspecialchars(strip_tags($article->headline)) ?></a></li>
				<?php endforeach ?>
			<?php else: ?>
			<h3>Таких статей нет :(</h3>
			<?php endif ?>
				<h3>Сапсёрфинг</h3>
				<hr>
			<?php if (isset($articlesSapsurfing)) :?>
				<?php foreach ($articlesSapsurfing as $article) :?>
					<li><a href="view-article-details.php?id=<?= $article->id ?>&tag=sapsurfing" title="Click to view product"><?= htmlspecialchars(strip_tags($article->headline)) ?></a></li>
				<?php endforeach ?>
			<?php else: ?>
			<h3>Таких статей нет :(</h3>
			<?php endif ?>
				<h3>Вейкбординг</h3>
				<hr>
			<?php if (isset($articlesWakeboarding)) :?>
				<?php foreach ($articlesWakeboarding as $article) :?>
					<li><a href="view-article-details.php?id=<?= $article->id ?>&tag=wakeboarding" title="Click to view product"><?= htmlspecialchars(strip_tags($article->headline)) ?></a></li>
				<?php endforeach ?>
			<?php else: ?>
			<h3>Таких статей нет :(</h3>
			<?php endif ?>
			</div>
			<aside>
				<ul class="container__menu">
					<li><a class="container__menu__element" href="dashboard.php">Панель редактора</a></li>
					<li><a class="container__menu__element" href="add-article.php">Создать статью</a></li>
					<li><a class="container__menu__element" href="list-articles.php">Список статей</a></li>
					<li><a class="container__menu__element" href="logout.php">Выход</a></li>
				</ul>
			</aside>
		</div>
	</main>
</body>
</html>
