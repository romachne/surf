<?php
	require_once 'includes/header.php';

	if (!isset($_SESSION['admin_session']) )
	{
		$commons->redirectTo(SITE_PATH.'login.php');
	}

	$articleId = isset($_GET['id']) && intval($_GET['id']) > 0 ? intval($_GET['id']) : 0;
	$articleTag = htmlspecialchars($_GET['tag']);
	if ($articleId > 0) 
	{

		require_once ROOT."../includes/classes/admin-class.php";

		$admins 	= new Admins($dbh);

		$articleDetails = $admins->deletearticle($articleId, $articleTag);

		$commons->redirectTo(SITE_PATH.'list-articles.php');
	}
