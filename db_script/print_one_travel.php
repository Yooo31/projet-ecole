<?php
  $host = 'localhost';
  $dbname = 'alltravel';
  $username = 'agence';
  $password = 'Voyage31.';
  $actual_id_travel = intval($_GET['id']);

  $dsn = "mysql:host=$host;dbname=$dbname";
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM AllTravel WHERE id = $actual_id_travel";

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