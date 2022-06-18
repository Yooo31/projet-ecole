<?php
    include_once('include/head.php');
?>

<body>
  <?php
    include_once('include/header.php');
  ?>

  <h1>Voici un voyage</h1>

  <?php
    $host = 'localhost';
    $dbname = 'alltravel';
    $username = 'agence';
    $password = 'Voyage31.';

    $dsn = "mysql:host=$host;dbname=$dbname";
    // récupérer tous les utilisateurs
    $sql = "SELECT * FROM AllTravel";

    try{
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);

    if($stmt === false){
      die("Erreur");
    }

    }catch (PDOException $e){
      echo $e->getMessage();
    }
?>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>email</th>
        <th>phone</th>
        <th>nametravel</th>
        <th>destination</th>
        <th>price</th>
        <th>rate /5</th>
        <th>numberplace</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
      <tr>
        <td><?php echo htmlspecialchars($row['id']); ?></td>
        <td><?php echo htmlspecialchars($row['titularname']); ?></td>
        <td><?php echo htmlspecialchars($row['titularlastname']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo htmlspecialchars($row['phone']); ?></td>
        <td><?php echo htmlspecialchars($row['nametravel']); ?></td>
        <td><?php echo htmlspecialchars($row['destination']); ?></td>
        <td><?php echo htmlspecialchars($row['price']); ?></td>
        <td><?php echo htmlspecialchars($row['rate']); ?></td>
        <td><?php echo htmlspecialchars($row['numberplace']); ?></td>
        <td><?php echo htmlspecialchars($row['description']); ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

  <!-- Importer les iconnes -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Importer Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>