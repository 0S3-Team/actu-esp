<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
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
            <a href="listeuser.php">
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
            <a href="listearticles.php">
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
            <a href="listecategories.php">
              <i class="bi bi-circle"></i><span>Liste des catégories</span>
            </a>
          </li>
        </ul>
      </li>

  </aside>
</body>
</html>
<i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>