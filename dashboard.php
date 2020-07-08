<html>
<head>
	<title>Surf Dashboard</title>

	<?php
		require_once 'includes/header.php';

		if (!isset($_SESSION['admin_session']) )
		{
			$commons->redirectTo(SITE_PATH.'login.php');
		}
	?>

	<main class="container">
		<span class="container__heading">Панель редактора (<?= strip_tags($_SESSION['admin_session']) ?>)</span>
		<aside>
			<ul class="container__menu">
				<li><a class="container__menu__element" href="dashboard.php">Панель редактора</a></li>
				<li><a class="container__menu__element" href="add-product.php">Создать статью</a></li>
				<li><a class="container__menu__element" href="list-products.php">Список статей</a></li>
				<li><a class="container__menu__element" href="logout.php">Выход</a></li>
			</ul>
		</aside>

		<div style="clear:both"> </div>
	</main>
</body>
</html>
