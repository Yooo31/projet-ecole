<?php
  include_once 'connexion_db.php';
  if(isset($_POST['submit']))
  {
    $titularname = $_POST['titularname'];
    $titularlastname = $_POST['titularlastname'];
    $datestart = $_POST['datestart'];
    $datestart = preg_replace('#(\d{2})/(\d{2})/(\d{4})\s(.*)#', '$3-$2-$1 $4', $datestart);
    $dateend = $_POST['dateend'];
    $dateend = preg_replace('#(\d{2})/(\d{2})/(\d{4})\s(.*)#', '$3-$2-$1 $4', $dateend);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $nametravel = $_POST['nametravel'];
    $destination = $_POST['destination'];
    $price = $_POST['price'];
    $rate = $_POST['rate'];
    $numberplace = $_POST['numberplace'];
    $description = $_POST['description'];
    $password = $_POST['passwordtravel'];
    $sql = "INSERT INTO AllTravel(titularname, titularlastname, email, phone, nametravel, destination, startat, endat, price, rate, numberplace, description, password)
    VALUES ('$titularname', '$titularlastname', '$email', '$phone', '$nametravel', '$destination', '$datestart', '$dateend', '$price', '$rate', '$numberplace', '$description', '$password')";
    if (mysqli_query($conn, $sql)) {
      echo "New record has been added successfully !";
    } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
  }
?>