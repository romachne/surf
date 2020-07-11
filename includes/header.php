	<?php
		require_once "config/params.php";
		require_once ROOT."../includes/classes/session.php";
		require_once ROOT."dbconnection.php";
		require_once ROOT."../includes/classes/commons.php";

		!isset($_SESSION) ? session::init(): null;

		$dbh 	= new Dbconnect();
		$commons = new Commons($dbh);
	?>

	<link rel="stylesheet" href="public/css/fonts.css">
	<link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header>
		<div class="header-left">
			<a href="index.php" class="logo">Surf</a>
			<div class="menu">
				<a href="index.php" class="menu__element">сёрфинг</a>
				<a href="kitesurfing.php" class="menu__element">кайтсёрфинг</a>
				<a href="sapsurfing.php" class="menu__element">сапсёрфинг</a>
				<a href="wakeboarding.php" class="menu__element">вейкбординг</a>
			</div>
		</div>
		<a href="login.php" class="header-right">Вход для<br>редакторов</a>
    </header>