<?php
$host = "129.152.26.144:3306";
$username = "gabetti";
$password = "GabettiData1?";
$dbname = "gestionale_gabetti";
try {
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die('Connessione al database fallita: ' . $e->getMessage());
}
