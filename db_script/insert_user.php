<?php
  include_once 'connexion_db.php';
  if(isset($_POST['submit']))
  {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO UserTable(lastname, firstname, email, phone, username, password)
    VALUES ('$lastname', '$firstname', '$email', '$phone', '$username', '$password')";
    if (mysqli_query($conn, $sql)) {
      include_once('../include/head.php');
      include_once('../include/account_created.php');
    } else {
      include_once('../include/head.php');
      include_once('../include/erreur.php');
    }
    mysqli_close($conn);
  }