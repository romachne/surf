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
        <?php if (isset($articleDetails) && sizeof($articleDetails) > 0) : $article = $articleDetails[0]; ?>
            <h1><?= htmlentities(strip_tags($article->headline)) ?></h1>
            <hr>
            <h2><?= htmlentities(strip_tags($article->head2)) ?></h2>
            <p><?= htmlentities(strip_tags($article->description)) ?></p>

        <?php else: ?>
        <h3>Такой статьи нет :(</h3>
        <?php endif ?>

	</main>
</body>
</html>