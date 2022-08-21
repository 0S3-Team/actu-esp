<?php

    if (isset($_GET['blog'])) {
        include_once "./blog/homeView.php";
    } else {
        include_once "./admin/indexAdminView.php";
    }
?>