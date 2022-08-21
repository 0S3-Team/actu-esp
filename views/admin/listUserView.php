<?php include "header.php"; ?>
  <main id="main" class="main">
    <!-- <div class="pagetitle"> -->
      <!-- <h1>Liste des utilisateurs</h1> -->
<!--     </div> -->
  <div class="d-grid gap-2 d-md-flex justify-content-between">
    <h1>Liste des utilisateurs</h1>
  <a href="/?add-user"><button class="btn btn-primary me-md-2" type="button">Ajouter</button></a>
</div>
   <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">N</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Login</th>
                    <th scope="col">Token</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25 <i class="far fa-eye" id="togglePassword"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
  </main>
  <?php include "footer.php"; ?>