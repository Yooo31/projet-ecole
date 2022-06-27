<?php
    include_once('../include/head.php');
?>

<body>

  <?php
    include_once('../include/header.php');
  ?>

  <form action="../db_script/insert_user.php" method="post">
    <h3 class="form-title">Créez votre compte</h3>
    <div class="form-row m-3">
      <div class="form-group col-md-6">
        <input type="text" class="form-control" placeholder="Nom" name="lastname">
      </div>
      <div class="form-group col-md-6">
        <input type="text" class="form-control" placeholder="Prénom" name="firstname">
      </div>
    </div>
    <div class="form-row m-3">
      <div class="form-group col-md-6">
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
      </div>
      <div class="form-group col-md-6">
        <input type="tel" class="form-control" id="inputPhone" placeholder="N° Tel" maxlength="10" name="phone">
      </div>
    </div>
    <div class="form-row m-3">
      <div class="form-group col-md-6">
        <input type="text" class="form-control" id="inputUsername" placeholder="Nom d'utilisateur" name="username">
      </div>
      <div class="form-group col-md-6">
        <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" name="password">
      </div>
    </div>
    <button type="submit" class="btn btn-primary m-3" name="submit">Valider</button>
  </form>






  <!-- Importer les iconnes -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Importer Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>