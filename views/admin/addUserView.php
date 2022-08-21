<?php include "header.php"; ?>

<main id="main" class="main">
         <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Creer un Compte</h5>
                    <p class="text-center small">Veuillez entrer toutes les informations!!!</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Prenom</label>
                      <input type="text" name="firstname" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your Firstname!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Nom</label>
                      <input type="text" name="lastname" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your Lastname!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Login</label>
                      <div class="input-group has-validation">
                        <input type="text" name="login" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a login.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <label>Générer un token d'admin <input type="checkbox" name="addToken"/></label>
                       
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Creer</button>
                    </div>

                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>
      <?php include "footer.php"; ?>