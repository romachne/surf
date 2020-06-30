<?php 
require_once 'includes/header.php';
if (isset($_SESSION['admin_session']))
{
    $commons->redirectTo(SITE_PATH.'dashboard.php');
}
?>

<html>
<head>
    <title>Surf News</title>
    <link rel="stylesheet" href="public/css/style.css">
    <meta charset="utf-8">
</head>
<body>
<main>
    <div>
        <h3>Admin Access</h3>
        <?php if (isset($_SESSION['error'])): ?>
            <div>
                <?= $_SESSION['error'] ?>
            </div>
        <?php session::destroy('error'); endif ?>

        <form action="admin-access.php" method="post">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="roma">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="54321">
            </div>
            <div>
                <button type="submit">Log in</button>
            </div>
        </form>
    </div>
    <footer>
        <?= date("Y") ?> Â© Roma Sychev
    </footer>
</main>
</body>
</html>