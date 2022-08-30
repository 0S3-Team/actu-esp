<?php
include("views/admin/homeView.php");
if (!$_SESSION) {
    header('Location: ./?login');
    exit();
}
