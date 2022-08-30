<?php
require_once("models/articles.php");
require_once("models/categories.php");
require_once("config/database.php");


$article = new Article($db);
if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['categoryId'])) {

    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->date = date('Y-m-d H:i:s');
    $article->author = 2; //$_SESSION['id'];
    $article->categoryId = 3; // $_POST['categoryId'];
    if ($article->createArticle()) {
        header('Location: /?list-articles');
        exit();
    }
} else {
    $tmp = new Category($db);
    $cat = $tmp->getCategories();
    include("views/admin/addArticleView.php");
}

if (!$_SESSION) {
    header('Location: ./?login');
    exit();
}
