<?php 
require_once "config/params.php";
require_once ROOT."../includes/classes/session.php";
require_once ROOT."dbconnection.php";
require_once ROOT."../includes/classes/commons.php";

!isset($_SESSION) ? session::init(): null;

$dbh = new Dbconnect();
$commons = new Commons($dbh);
?>