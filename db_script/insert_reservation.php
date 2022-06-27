<?php
  include_once 'connexion_db.php';
  if(isset($_POST['submit']))
  {
    // Important Value

    $NumberReserved = $_POST['NumberReserved'];
    $usernameForm = $_POST['username'];
    $passwordForm = $_POST['password'];
    // $passwordTable = "SELECT password FROM UserTable WHERE username = $usernameForm;";
    // $id = "SELECT id FROM UserTable WHERE username = $usernameForm;";
    $actual_id_travel = intval($_GET['id']);

    // récupérer tous les utilisateurs
    $formsql = "SELECT * FROM UserTable WHERE username = 'Yoo'";

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
    $conn->close();

    if ($passwordTable === $passwordForm) {
      $sql = "INSERT INTO Reservation(UserId, TravelId, NumberReserved)
      VALUES ('$id', '$actual_id_travel', '$NumberReserved');";
      if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
      } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
      mysqli_close($conn);
    } else {
      echo "Error : invalid password" . $passwordTable . $passwordForm;
    }
  }