<?php
  include_once 'connexion_db.php';
  if(isset($_POST['submit']))
  {
    $titularname = $_POST['titularname'];
    $titularlastname = $_POST['titularlastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $nametravel = $_POST['nametravel'];
    $destination = $_POST['destination'];
    $price = $_POST['price'];
    $rate = $_POST['rate'];
    $numberplace = $_POST['numberplace'];
    $description = $_POST['description'];
    $sql = "INSERT INTO AllTravel(titularname, titularlastname, email, phone, nametravel, destination, price, rate, numberplace, description)
    VALUES ('$titularname', '$titularlastname', '$email', '$phone', '$nametravel', '$destination', '$price', '$rate', '$numberplace', '$description')";
    if (mysqli_query($conn, $sql)) {
      echo "New record has been added successfully !";
    } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
  }
?>