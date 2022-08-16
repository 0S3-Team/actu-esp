<?php
include_once "views/admin/homeView.php";
if (isset($_GET['users'])) {
  include_once "views/admin/listUserView.php";
} elseif (isset($_GET['categories'])) {
  include_once "views/admin/listCategoryView.php";
} elseif (isset($_GET['articles'])) {
  include_once "views/admin/listCategoryView.php";
}
?>