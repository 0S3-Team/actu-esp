<?php include "header.php"; ?>
  <main id="main" class="main">
 
  <div class="d-grid gap-2 d-md-flex justify-content-between">
    <h1>Liste des utilisateurs</h1>
  <a href="./?add-user"><button class="btn btn-primary me-md-2" type="button">Ajouter</button></a>
</div>
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
                    <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal" href="id='.$id.'">Editer</a>
                    </td>
                    <td width="30">
                    <a href="./?list-users&id='.$id.'" class="btn btn-danger deletebtn btn-sm">Supprimer</a>
                </td>
                  </tr>'; }?>
                </tbody>
              </table>
              
         <!-- Modal Edit-->
         <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier un utilisateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--formulaire-->
                    
                    <form  method="post" action="" enctype="multipart/form-data" id="edit_form" name="edit_form">

                          <div class="form-group">
                      <input  type="text" name="id_edit" id="id_edit" class="form-control" value="<?php echo $id;?>" readonly />
                        <span id="error_id_edit" class="text-danger"></span>

                 </div>
  
                 <br>

                 <div class="form-group">

                         Firstname<input type="text" name="firstname_edit" id="firstname_edit" class="form-control" placeholder="firstname"  />
                     <span id="error_firstname_edit" class="text-danger"></span>

                 </div>
                 <br>
                 <div class="form-group">

                  LastName <input type="text" name="lastname_edit" id="lastname_edit" class="form-control" placeholder="lastname" />
                <span id="error_lastname_edit" class="text-danger"></span>
                    
                      </div>
    
                      <br>
                                  
                      <div class="form-group">
                                  
                   Login <input type="text" id="login_edit" name="login_edit" class="form-control">
                       <span id="error_login_edit" class="text-danger"></span>
                                  
                      </div>
                      <br>

                      <div class="form-group">
                                  
                                 Token <input type="text" id="token_edit" name="token_edit" class="form-control">
                                      <span id="error_token_edit" class="text-danger"></span>
                                                 
                                     </div>
                                     <br>
             </form>
                    
                    <!--formulaire end-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-success">Modifier un utilisateur</button>
                </div>
                </div>
            </div>
            </div>
  </main>
  <?php include "footer.php"; ?>