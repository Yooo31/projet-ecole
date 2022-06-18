<?php
  $servername='localhost';
  $username='agence';
  $password='Voyage31.';
  $dbname = "alltravel";
  $conn=mysqli_connect($servername,$username,$password,"$dbname");
    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
      }
?>