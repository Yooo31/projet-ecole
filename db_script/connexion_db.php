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