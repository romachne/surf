<?php
require_once 'includes/header.php';
if (!isset($_SESSION['admin_session']) )
{
    session::destroy('admin_session');
    $commons->redirectTo(SITE_PATH.'index.php');
}
?>

<html>
<head>
    <title>Surf News | Admin Panel</title>
    <link rel="stylesheet" href="public/css/style.css">
    <meta charset="utf-8">
</head>

<body>
<main>
    <div>
        <div>
            <p><strong>Welcome to the dashboard !</strong></p>
            <p>This place can be used to display a list of products or some expired products to warn the admins.</p>
        </div>
        <aside>
            <p>Connected as, <?= strip_tags($_SESSION['admin_session']) ?></p>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="add-admin.php">Add Admin</a></li>
                <li><a href="add-product.php">Add Product</a></li>
                <li><a href="list-products.php">List Products</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </aside>
        <div style="clear:both"> </div>
    </div>

    <footer>
        <?= date("Y") ?> © Roma Sychev
    </footer>
</main>
</body>
</html>