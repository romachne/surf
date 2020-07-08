<html>
<head>
	<title>Surf Login</title>

    <?php
        require_once 'includes/header.php';

        if (isset($_SESSION['admin_session']) )
        {
            $commons->redirectTo(SITE_PATH.'dashboard.php');
        }
    ?>

	<main class="container">
		<span class="container__heading">Вход в интерфейс редактора</span>

		<?php  if ( isset($_SESSION['error']) ): ?>
			<div>
				<?= $_SESSION['error'] ?>
			</div>
		<?php session::destroy('error'); endif ?>

		<form action="admin-access.php" method="POST" class="login-form">
			<div class="login-form__input">
				<label for="username">Логин</label>
				<input type="text" name="username" id="username" placeholder="roman">
			</div>
			<div class="login-form__input">
				<label for="password">Пароль</label>
				<input type="password" name="password" id="password" placeholder="12345">
			</div>
			<div>
				<button type="submit" class="login-form__submit">Войти</button>
			</div>
		</form>
	</main>
</body>
</html>
