<?php include "header.php"; ?>
  <main id="main" class="main">
  <div class="d-grid gap-2 d-md-flex justify-content-between">
    <h1>Liste des Catégories</h1>
  <a href="./?add-category"><button class="btn btn-primary me-md-2" type="button">Ajouter</button></a>
</div>
 <div class="row justify-content-center">
    <div class="col-lg-6 ">
    <?php
      while ($row = $categories->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        echo '
              <ul class="list-group">
                <li class="list-group-item">'.$description.'</li>
              </ul>';
      }?>
</div>
</div>
  </main>
  <?php include "footer.php"; ?>