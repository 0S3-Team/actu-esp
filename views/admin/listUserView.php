<?php include "header.php"; ?>
  <main id="main" class="main">
 
  <div class="d-grid gap-2 d-md-flex justify-content-between">
    <h1>Liste des utilisateurs</h1>
  <a href="./?add-user"><button class="btn btn-primary me-md-2" type="button">Ajouter</button></a>
</div>
   <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Login</th>
                    <th scope="col">Token</th>
                  </tr>
                </thead>
                <tbody>
                <?php
              while ($row = $users->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                echo '
                  <tr>
                    <td>'.$firstname.'</td>
                    <td>'.$lastname.'</td>
                    <td>'.$login.'</td>
                    <td>'.$token.'</td>
                    <td width="30">
                      <a style="width: 90px; background-color:#198754; color:white;" class="btn" data-bs-toggle="modal" data-bs-target="#modifier_profil">Modifier</a>
                      </td>
                      <td width="30">
                      <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                      </td>
                  </tr>';
              }?>
                </tbody>
              </table>
  </main>
  <?php include "footer.php"; ?>