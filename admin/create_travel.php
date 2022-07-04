<?php
    include_once('../include/head.php');
?>

<body>

  <?php
    include_once('../include/header.php');
  ?>

  <div class="big-container">
    <form action="../db_script/insert_travel_form.php" method="post">
      <h3 class="form-title">Qui proposes le voyage ?</h3>
      <div class="form-row m-3">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" placeholder="Nom" name="titularlastname" required>
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" placeholder="Prénom" name="titularname" required>
        </div>
      </div>
      <div class="form-row m-3">
        <div class="form-group col-md-6">
          <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
        </div>
        <div class="form-group col-md-6">
          <input type="tel" class="form-control" id="inputPhone" placeholder="N° Tel" maxlength="10" name="phone" required>
        </div>
      </div>
      <div class="form-row m-3">
        <div class="form-group col-md-6">
          <input type="password" class="form-control" id="inputPasswordTravel" placeholder="Mot de passe du voyage" name="passwordtravel" required>
        </div>
      </div>
      <h3 class="form-title">Informations sur le voyage</h3>
      <div class="form-row m-3">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" placeholder="Nom du voyage" name="nametravel" required>
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" placeholder="Destination" name="destination" required>
        </div>
      </div>
      <div class="form-row m-3">
        <div class="form-group col-md-6">
          <input type="date" class="form-control" id="inputStartDate" placeholder="Date de début" name="datestart" required>
        </div>
        <div class="form-group col-md-6">
          <input type="date" class="form-control" id="inputEndDate" placeholder="Date de fin" name="dateend" required>
        </div>
      </div>
      <div class="form-row m-3">
        <div class="form-group col-md-6">
          <input type="number" class="form-control" id="inputPrice" placeholder="Prix" name="price" required>
        </div>
        <div class="form-group col-md-6">
          <input type="number" class="form-control" id="inputRate" placeholder="Note /5" maxlength="1" min="0" max="5" name="rate" required>
        </div>
      </div>
      <div class="form-row m-3">
        <div class="form-group col-md-6">
          <input type="number" class="form-control" id="inputNumberPlace" placeholder="Nombre de place" name="numberplace" required>
        </div>
        <div class="form-group col-md-6">
        <div class="file-field">
          <div class="btn btn-sm">
            <input type="file" name="image">
          </div>
        </div>
        </div>
      </div>
      <div class="form-group m-3">
        <label for="bio">Description du voyage</label>
        <textarea class="form-control" id="bio" rows="3" name="description" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary m-3" name="submit">Publier l'annonce</button>
    </form>
  </div>

  <!-- Importer les iconnes -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Importer Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>