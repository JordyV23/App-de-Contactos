<?php

$host = "localhost";
$database = "contacts_app";
$user = "root";
$password = "root";

try {
  $conn = new PDO("mysql:host=127.0.0.1;dbname=contacts_app", $user, $password);

  $sql = 'SELECT * FROM contacts';
  // foreach ($conn->query($sql) as $row) {
  //   print_r($row);
  // }
} catch (PDOException $e) {
  die("PDO Connection Error" . $e->getMessage());
}
