<?php
    include_once('../include/head.php');
    include_once('../db_script/print_one_travel.php');
?>

<body>

  <?php
    include_once('../include/header.php');
  ?>

  <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :

    // Convert date to correct format

    $originalDateS = $row['startat'];
    $startat = date("d-m-Y", strtotime($originalDateS));
    $originalDateE = $row['endat'];
    $endat = date("d-m-Y", strtotime($originalDateE));

    // Find the correct number of star

    $star = '';

    for ($i = $row['rate']; $i != 0; $i--) {
      $star .= '*';
    }
  ?>

  <div class="container">
    <div class="row justify-content-md-center">
      <div class="bg-img">
        <p>IMAGE</p>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <h3><?php echo htmlspecialchars($row['nametravel']); ?> <?php echo htmlspecialchars($star); ?></h3>
    </div>
    <div class="row">
      <span class="destination"><?php echo htmlspecialchars($row['destination']); ?></span>
    </div>
    <div class="row">
      <p><?php echo htmlspecialchars($row['description']); ?></p>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h3><?php echo htmlspecialchars($row['price']); ?> €</h3>
        <p>Du <?php echo $startat; ?></p>
        <p>Au <?php echo $endat; ?></p>
        <p><?php echo htmlspecialchars($row['numberplace']); ?></p>
        <?php if ($row['numberplace'] > 0) : ?>
          <a class="btn btn-primary" href="#popup-inscrit" role="button">Réserver</a>
        <?php endif ?>
      </div>
      <div class="col-md-6">
        <h3>Propriétaire :</h3>
        <p><?php echo htmlspecialchars($row['titularname']); ?> <?php echo htmlspecialchars($row['titularlastname']); ?></p>
        <p><?php echo htmlspecialchars($row['email']); ?></p>
        <p>0<?php echo htmlspecialchars($row['phone']); ?></p>
        <a class="btn btn-primary" href="#popup-prive" role="button">Privé</a>
      </div>
    </div>
  </div>

  <div id="popup-inscrit" class="overlay">
    <div class="popup">
      <div class="container">
        <div class="row justify-content-md-center">
          <h2>Entrez votre pseudo et votre mot de passe</h2>
        </div>
        <div class="row justify-content-md-center">
          <a href="#" class="cross">&times;</a>
        </div>
      </div>

      <form action="../db_script/insert_reservation.php?id=<?php echo $actual_id_travel;?>" method="post">
        <div class="form-row m-3 justify-content-md-center">
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="inputUsername" placeholder="Nom d'utilisateur" name="username">
          </div>
          <div class="form-group col-md-6">
            <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" name="password">
          </div>
        </div>
        <div class="form-row m-3 justify-content-md-center">
          <div class="form-group col-md-6">
            <input type="number" class="form-control mb-2" id="inputNumberPlace" placeholder="Nombre de place" name="NumberReserved">
            <span>(Max <?php echo htmlspecialchars($row['numberplace']); ?> personnes)</span>
          </div>
          <div class="form-group col-md-6">
            <h2 class="text-center"><?php echo htmlspecialchars($row['price']); ?> € / personne</h2>
          </div>
        </div>
        <div class="form-row m-1">
          <button type="submit" class="btn btn-primary m-3" name="submit">Réserver !</button>
        </div>
      </form>

    </div>
  </div>

  <div id="popup-prive" class="overlay">
    <div class="popup">
      <div class="container">
        <div class="row justify-content-md-center">
          <h2>Entrez votre mot de passe pour accéder</h2>
        </div>
        <div class="row justify-content-md-center">
          <a href="#" class="cross">&times;</a>
        </div>
      </div>

      <form action="../db_script/verification_admin.php?id=<?php echo $actual_id_travel;?>" method="post">
        <div class="form-row mt-3 justify-content-md-center">
          <div class="form-group col-md-6">
            <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" name="password">
          </div>
        </div>
        <div class="form-row justify-content-md-center">
          <button type="submit" class="btn btn-primary m-3" name="submit">Accéder !</button>
        </div>
      </form>

    </div>
  </div>
  <?php endwhile; ?>


  <!-- Importer les iconnes -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Importer Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>