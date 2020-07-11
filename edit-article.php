<html>
<head>
	<title>Surf Login</title>

    <?php
		require_once 'includes/header.php';
		
		if (!isset($_SESSION['admin_session']) )
	{
		$commons->redirectTo(SITE_PATH.'login.php');
	}

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
				<h1>Редактирование: <?= htmlentities(strip_tags($article->headline)) ?></h1>
				<hr>
				<?php  if ( isset($_SESSION['errors']) ): ?>
				<div class="pannel panel-warning">
					<?php foreach ($_SESSION['errors'] as $error):?>
						<li><?= $error ?></li>
					<?php endforeach ?>
				</div>
				<?php session::destroy('errors'); endif ?>

				<?php  if ( isset($_SESSION['confirm']) ): ?>
				<div class="pannel panel-success">
					<li><?= $_SESSION['confirm'] ?></li>
				</div>
				<?php session::destroy('confirm'); endif ?>

				<form action="process-edited-article.php?id=<?= $articleId ?>&tag=<?= $articleTag ?>" method="POST">
					<div>
						<label for="headline">Заголовок статьи</label>
						<input required type="text" name="headline" id="headline" value="<?= isset($article->headline) ? htmlspecialchars(strip_tags($article->headline)) : '' ?>">
					</div>

					<div>
						<label for="head2">Подзаголовок (описание)</label>
						<input required type="text" name="head2" id="head2" value="<?= isset($article->head2) ? htmlspecialchars(strip_tags($article->head2)) : '' ?>">
					</div>
					
					<div>
						<label for="description">Статья</label>
						<textarea required name="description" id="description" cols="30" rows="10"><?= isset($article->description) ? htmlspecialchars(strip_tags($article->description)) : '' ?></textarea>
					</div>

					<div>
						<button type="submit" class="btn-1a">Обновить</button>
					</div>
				</form>
			

				<ul class="btns">
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
