<?php
if (isset($_GET['list-users'])) {
  $listUser // gerer par le controleur
  include_once "./listUserView.php";
} elseif (isset($_GET['list-categories'])) {
  include_once "./listCategoryView.php";
} elseif (isset($_GET['list-articles'])) {
  include_once "./listArticleView.php";
} else {
  include_once "./homeView.php";
}
?>