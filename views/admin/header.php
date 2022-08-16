<?php
define('CSS_PATH', 'views/admin/assets/css/'); //define CSS path 
define('JS_PATH', 'views/admin/assets/js/'); //define JavaScript path 
define('IMG_PATH', 'views/admin/assets/img/'); //define JavaScript path 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo IMG_PATH; ?>favicon.png" rel="icon">
  <link href="<?php echo IMG_PATH; ?>apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet"> -->
  <link href="<?php echo CSS_PATH; ?>style.css" rel="stylesheet">
</head>

<body>
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="">
      <span class="d-none d-lg-block">Site d'Actualité</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>
</header>

<aside id="sidebar" class="sidebar">
  
  <ul class="sidebar-nav" id="sidebar-nav">
    
    <li class="nav-item">
      <a class="nav-link " href="#">
        <i class="bi bi-grid"></i>
        <span>Plateforme d'Administration</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Gestion des utilisateurs</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="ListeUser.php">
            <i class="bi bi-circle"></i><span>Liste des utilisateurs</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#articles-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Gestion des articles</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="articles-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="ListeArticles.php">
            <i class="bi bi-circle"></i><span>Liste des articles</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#articles-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Gestion des catégories</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="articles-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="ListeCategories.php">
            <i class="bi bi-circle"></i><span>Liste des catégories</span>
          </a>
        </li>
      </ul>
    </li>
    
</aside>