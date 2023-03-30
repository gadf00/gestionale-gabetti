<?php
    $host = "localhost";
    $username = "root";
    $password = "123456Aa/";
    $dbname = "gestionale-gabetti";
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        die('Connessione al database fallita: ' . $e->getMessage());
      }
?>