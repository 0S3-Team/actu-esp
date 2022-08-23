<?php include "header.php"; ?>
  <main id="main" class="main">

  <div class="d-grid gap-2 d-md-flex justify-content-between">
    <h1>Liste des articles</h1>
  <a href="./?add-article"><button class="btn btn-primary me-md-2" type="button">Ajouter</button></a>
</div>
<div class="container-fluid">
  <div class="row">
    <?php
      while ($row = $articles->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        echo '
            <div class="col-4">   
            <div class="card">
              <img src="'.IMG_PATH.'card.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">'.$title.'
                <i class="bi bi-eye" style="color: blue;"></i>
              </h5>
                <p class="card-text">'.$content.'</p>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-4">
                <button class="btn btn-success btn-sm" type="button"><i class="bi bi-pen"></i>Modifier</button>
                <button class="btn btn-danger btn-sm" type="button"> <i class="bi bi-trash"></i>Supprimer</button>
              </div>
            </div>
        </div>
        ';                             
      }
    ?>
    
  </div>
</div>
    </main>
<?php include "footer.php"; ?>