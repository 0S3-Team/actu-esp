<?php include "header.php"; ?>
  <main id="main" class="main">
  <div class="d-grid gap-2 d-md-flex justify-content-between">
    <h1>Liste des Catégories</h1>
  <a href="./?add-category"><button class="btn btn-primary me-md-2" type="button">Ajouter</button></a>
</div>
 <div class="row justify-content-center">
    <div class="col-lg-6 ">
    <table class="table table-bordered">
    <tbody>
    <?php
      while ($row = $categories->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        echo '
        <tr>
                <td>'.$description.'</td>
                <td width="30">
                <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editcategorie" href="./?list-categories&id='.$id.'">Editer</a>
                </td>
                <td width="30">
                <a href="./?list-categories&id='.$id.'" class="btn btn-danger deletebtn btn-sm">Supprimer</a>
                </td>
        </tr>';
      }?>
      <?php 
    if($msg != ''){
      echo '
        <div class="alert '.$msgClass.' alert-dismissible fade show" role="alert">
          '.$msg.'
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      ';
    }
  ?>
    </tbody>
    </table>
</div>
</div>
  </main>
  <!-- Modal Modifier -->
<div class="modal fade" id="editcategorie" tabindex="-1" aria-labelledby="editcategorie" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editcategorie">Nouveau Nom!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="" action=""> 
      <div class="mb-3">
      <input type="text" name="nouvlibelle" required=""  class="form-control">
      </div>
     <input type="submit" class="btn btn-primary" value="Valider">
    </form>
    <?php if(isset($_REQUEST['nouvlibelle'])){
      echo $isUpdate;
    }?>
    </div>
  </div>
</div>
  <?php include "footer.php"; ?>