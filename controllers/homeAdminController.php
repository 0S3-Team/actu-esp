<?php

if (!$_SESSION) {
    header('Location: ./?login');
    exit();
} else {
    include("views/admin/homeView.php");
}
if (isset($_GET['disconnect'])) {
    session_destroy();
    header('Location: ./?login');
    exit();
}
