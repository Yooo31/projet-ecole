<?php
  $servername='localhost';
  $username='agence';
  $password='Voyage31.';
  $dbname = "travite";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['submit']))
  {
    // Important Value

    $NumberReserved = $_POST['NumberReserved'];
    $usernameForm = $_POST['username'];
    $passwordForm = $_POST['password'];
    // $passwordTable = "SELECT password FROM UserTable WHERE username = a;";
    // $id = "SELECT id FROM UserTable WHERE username = a;";
    $actual_id_travel = intval($_GET['id']);

    // récupérer tous les utilisateurs
    $formsql = "SELECT * FROM UserTable WHERE username = '$usernameForm'";

    $resultsql = $conn->query($formsql);

    if ($resultsql->num_rows > 0) {
      // output data of each row
      while($line = $resultsql->fetch_assoc()) {
        $id = intval($line["id"]);
        $passwordTable = $line["password"];
      }
    } else {
      echo "0 results";
    }

    if ($passwordTable === $passwordForm) {
      $requete = "INSERT INTO Reservation(UserId, TravelId, NumberReserved)
      VALUES ($id, $actual_id_travel, $NumberReserved);";
      if (mysqli_query($conn, $requete)) {
        include_once('../include/head.php');
        include_once('../include/travel_reserved.php');
      } else {
        echo "Error: " . $requete . " : -" . mysqli_error($conn);
      }
      mysqli_close($conn);
    } else {
      echo "Error : invalid password" . $passwordTable . " -> ". $usernameForm;
    }
  }