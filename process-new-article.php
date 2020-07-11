<?php

	require_once 'includes/header.php';

	require_once ROOT."../includes/classes/admin-class.php";

	$admins 	= new Admins($dbh);

	
	if (isset($_POST)) 
	{

		$headline = $_POST['headline'];
		$head2 = $_POST['head2'];
		$tag = $_POST['tag'];
		$description = $_POST['description'];

		if (!$admins->addNewArticle($headline, $head2, $tag, $description)) 
		{
			
			session::set('errors', ['Возникла ошибка при сохранении статьи']);
			$commons->redirectTo(SITE_PATH.'add-article.php');

		}

		// Else we display a confirmation message
		session::set('confirm', 'Новая статья успешно опубликована!');
		$commons->redirectTo(SITE_PATH.'add-article.php');

	}

