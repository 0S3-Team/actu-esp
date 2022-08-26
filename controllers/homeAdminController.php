<?php
if (!$_SESSION) {
    header('Location: ./?login');
    exit();
}
include("views/admin/homeView.php");
