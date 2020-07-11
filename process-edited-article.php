<?php
	require_once 'includes/header.php';

	require_once ROOT."../includes/classes/admin-class.php";

	$admins 	= new Admins($dbh);

	$articleId = isset($_GET['id']) && intval($_GET['id']) > 0 ? intval($_GET['id']) : 0;
	$articleTag = htmlspecialchars($_GET['tag']);

	if (isset($_POST)) 
	{

		$errors = array();

		$headline = $_POST['headline'];
		$head2 = $_POST['head2'];
		$description = $_POST['description'];

		if (!empty($errors) || sizeof($errors) != 0) 
		{
			session::set('errors', $errors);
			$commons->redirectTo(SITE_PATH.'edit-article.php?id='.$articleId.'&tag='.$articleTag);
		}

		if (!$admins->updateArticle($headline, $head2, $description, $articleId, $articleTag)) 
		{
			
			session::set('errors', ['Возникла ошибка при сохранении']);
			$commons->redirectTo(SITE_PATH.'edit-article.php?id='.$articleId.'&tag='.$articleTag);

		}

		session::set('confirm', 'Статья обновлена успешно!');
		$commons->redirectTo(SITE_PATH.'edit-article.php?id='.$articleId.'&tag='.$articleTag);

	}

