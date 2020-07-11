<html>
<head>
	<title>Surf News</title>

    <?php
        require_once 'includes/header.php';

        require_once ROOT."../includes/classes/admin-class.php";

		$admins 	= new Admins($dbh);
		$articlesSapsurfing = $admins->fetchArticlesSapsurfing();
    ?>

	<main>
        <h1>Сапсёрфинг</h1>
            <?php if (isset($articlesSapsurfing)) :?>
				<?php foreach ($articlesSapsurfing as $article) :?>
                    <div class="article-head">
                        <h2><a href="view-article.php?id=<?= $article->id ?>&tag=sapsurfing" title="Click to view product"><?= htmlspecialchars(strip_tags($article->headline)) ?></a></h2>
                        <h3><?= htmlspecialchars(strip_tags($article->head2)) ?></h3>
                    </div>
				<?php endforeach ?>
			<?php else: ?>
			    <h3>Таких статей нет :(</h3>
			<?php endif ?>
	</main>
</body>
</html>
