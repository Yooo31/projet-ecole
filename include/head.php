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

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Réservation de voyage</title>
  <!-- CSS -->
  <link rel="stylesheet" href="style/style.css">
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Iconnes -->
  <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>