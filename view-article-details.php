<html>
<head>
	<title>Surf Login</title>

    <?php
        require_once 'includes/header.php';

		$articleId = isset($_GET['id']) && intval($_GET['id']) > 0 ? intval($_GET['id']) : 0;
		$articleTag = htmlspecialchars($_GET['tag']);
		if ($articleId > 0) {
			require_once ROOT."../includes/classes/admin-class.php";
	
			$admins 	= new Admins($dbh);
			$articleDetails = $admins->getAarticle($articleId, $articleTag);
		}
    ?>

	<main class="container">
		<div class="admin-pannel">
			
			<div class="dashboard">
				
			<?php if (isset($articleDetails) && sizeof($articleDetails) > 0) : $article = $articleDetails[0]; ?>
				<h1><?= htmlentities(strip_tags($article->headline)) ?></h1>
				<hr>
				<h2><?= htmlentities(strip_tags($article->head2)) ?></h2>
				<p><?= htmlentities(strip_tags($article->description)) ?></p>
				<ul class="btns">
					<li><a href="edit-article.php?id=<?= $article->id ?>&tag=<?= $articleTag ?>" class="btn-1a">Редактировать</a></li>
					<li><a href="delete-article.php?id=<?= $article->id ?>&tag=<?= $articleTag ?>" class="btn-1a" onclick="return confirm('Вы точно хотите удалить статью?');">Удалить</a></li>
				</ul>

			<?php else: ?>
			<h3>Такой статьи нет :(</h3>
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