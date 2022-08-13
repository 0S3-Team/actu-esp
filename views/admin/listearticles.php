<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php include "menu.php"; ?>
  <main id="main" class="main">

  <div class="d-grid gap-2 d-md-flex justify-content-between">
    <h1>Liste des articles</h1>
  <a href="ajoutarticle.php"><button class="btn btn-primary me-md-2" type="button">Ajouter</button></a>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-4">   

        <div class="card">
          <img src="assets/img/card.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title
            <i class="far fa-eye" style="color: blue;"></i>
          </h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button class="btn btn-success btn-sm" type="button"><i class="bi bi-pen"></i>Modifier</button>
            <button class="btn btn-danger btn-sm" type="button"> <i class="bi bi-trash"></i>Supprimer</button>
          </div>
        </div>
    </div>
     <div class="col-4">   

        <div class="card">
          <img src="assets/img/card.jpg" class="card-img-top" alt="...">
          <div class="card-body">
           <h5 class="card-title">Card title
            <i class="far fa-eye" style="color: blue;"></i>
            <i class="bi bi-pen" style="color: green;"></i>
            <i class="bi bi-trash" style="color: red;"></i>
          </h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
    </div>
     <div class="col-4">   

        <div class="card">
          <img src="assets/img/card.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title
            <i class="far fa-eye" style="color: blue;"></i>
            <i class="bi bi-pen" style="color: green;"></i>
            <i class="bi bi-trash" style="color: red;"></i>
          </h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
    </div>
</div>
</div>
    </main>

  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>