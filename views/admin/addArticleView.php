<?php include "header.php"; ?>
<main id="main" class="main">
  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Creer un article</h5>

              </div>


              <form class="row g-3 needs-validation" method="post" novalidate>
                <div class="col-12">
                  <label><b>Titre</b></label>
                  <input name="title" type="text" class="form-control">
                </div>
                <div class="col-12">
                  <select name="categoryId" class="form-select">
                    <option selected>Categorie</option>
                    <?php

                    while ($row = $cat->fetch(PDO::FETCH_ASSOC)) {
                      extract($row);
                      echo '<option value="' . $id . '">' . $description . '</option>';
                    }
                    ?>
                  </select>


                </div>
                <div class="col-12">
                  <label><b>Contenu</b></label>
                  <textarea name="content" class="form-control" id="exampleFormControlTextarea1" name="nom_projet" rows="7" required></textarea>
                </div>

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
</main>
<?php include "footer.php"; ?>