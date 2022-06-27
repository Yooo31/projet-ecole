<div class="text-center mt-5">
  <h2 class="text-center">Votre voyage a bien été réservé !</h2>
  <span class="text-center">Vous recevrez un mail de confirmation d'ici peu :)</span>
  <div class="mt-3">
    <a href="/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Retourner à l'accueil</a>
  </div>
</div>

<?php
  $servername='localhost';
  $username='agence';
  $password='Voyage31.';
  $dbname = "alltravel";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sqlplace = "SELECT * FROM AllTravel WHERE id = '$actual_id_travel'";

  $resultsqlplace = $conn->query($sqlplace);

  if ($resultsqlplace->num_rows > 0) {
    // output data of each row
    while($row = $resultsqlplace->fetch_assoc()) {
      $before_total_place = intval($row["numberplace"]);
    }
  } else {
    echo "0 results";
  }

  $after_total_place = $before_total_place - $NumberReserved;

  $change_number = "UPDATE AllTravel SET numberplace = $after_total_place WHERE id = '$actual_id_travel';";

  if ($conn->query($change_number) === True) {

  } else {
    echo "Error updating record: " . $conn->error;
  }

  $conn->close();