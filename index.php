<?php
    include_once('include/head.php');
?>

<body>
  <?php
    include_once('include/header.php');
  ?>

  <img src="/content/bg-accueil.gif" alt="">

  <!-- Card -->

  <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
    <div class="card m-5" style="width: 18rem;">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($row['nametravel']); ?></h5>
        <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php echo htmlspecialchars($row['titularname']); ?> <br /> <?php echo htmlspecialchars($row['titularlastname']); ?></li>
        <li class="list-group-item"><?php echo htmlspecialchars($row['email']); ?> <br /> <?php echo htmlspecialchars($row['phone']); ?></li>
      </ul>
      <a class="btn btn-primary" href="/show_actual_travel.php" role="button">Voir</a>
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