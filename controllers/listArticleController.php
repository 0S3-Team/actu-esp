<?php
require_once("models/articles.php");
require_once("models/categories.php");
require_once("config/database.php");

if (!$_SESSION) {
    header('Location: ./?login');
    exit();
}

$tmp = new Article($db);
$articles = $tmp->getAllArticles();

include("views/admin/listArticleView.php");
