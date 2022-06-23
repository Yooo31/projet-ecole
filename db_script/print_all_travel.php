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