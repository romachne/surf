<html>
<head>
	<title>Surf Login</title>

	<?php
		require_once 'includes/header.php';

		if (!isset($_SESSION['admin_session']) )
		{
			$commons->redirectTo(SITE_PATH.'login.php');
		}
		
	?>

	<main class="container">	
		<div class="container__content">
			<span class="container__content__heading">Создание статьи</span>
			
			<?php  if ( isset($_SESSION['errors']) ): ?>
			<div>
				<?php foreach ($_SESSION['errors'] as $error):?>
					<li><?= $error ?></li>
				<?php endforeach ?>
			</div>
			<?php session::destroy('errors'); endif ?>

			<?php  if ( isset($_SESSION['confirm']) ): ?>
			<div>
				<li><?= $_SESSION['confirm'] ?></li>
			</div>
			<?php session::destroy('confirm'); endif ?>

			<form action="process-new-article.php" method="POST">
				<div>
					<label for="headline">Заголовок статьи</label>
					<input required type="text" name="headline" id="headline">
				</div>

				<div>
					<label for="head2">Подзаголовок (описание)</label>
					<input required type="text" name="head2" id="head2">
				</div>

				<div>
					<label for="tag">Категория статьи</label>
					<select required name="tag" id="tag">
						<option value="surfing">Сёрфинг</option>
						<option value="kitesurfing">Кайтсёрфинг</option>
						<option value="sapsurfing">Сапсёрфинг</option>
						<option value="wakeboarding">Вейкбординг</option>
					</select>
				</div>
				
				<div>
					<label for="description">Статья</label>
					<textarea required name="description" id="description" cols="30" rows="10"></textarea>
				</div>

				<div>
					<button type="submit" class="btn-1a">Опубликовать</button>
				</div>
			</form>
		</div>
		<aside>
			<ul class="container__menu">
				<li><a class="container__menu__element" href="dashboard.php">Панель редактора</a></li>
				<li><a class="container__menu__element" href="add-article.php">Создать статью</a></li>
				<li><a class="container__menu__element" href="list-articles.php">Список статей</a></li>
				<li><a class="container__menu__element" href="logout.php">Выход</a></li>
			</ul>
		</aside>

		<div style="clear:both"> </div>
	</main>
</body>
</html>
