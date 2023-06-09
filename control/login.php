<?php
// Inizializza la sessione
session_start();
// Verifica se l'utente è già loggato, in caso affermativo, lo reindirizza alla home page
if (isset($_SESSION['username'])) {
    echo "sessione";
    exit;
}
// include database configuration
include '../config/dbconfig.php';

// Prende l'username e la password inviati dal form
$username = $_POST['username'];
$password = $_POST['password'];

// Query per verificare se l'username e la password corrispondono a quelli nel database
$sql = 'SELECT * FROM admin WHERE username = :username';

// Prepara la query per l'esecuzione
$stmt = $db->prepare($sql);

// Esegue la query sostituendo i marcatori con i valori effettivi
$stmt->execute(['username' => $username]);

// Prende il primo risultato della query
$user = $stmt->fetch();

// Verifica se l'utente esiste e se la password è corretta
if ($user && password_verify($password, $user['password'])) {
    // Imposta la sessione e reindirizza l'utente alla home page
    $_SESSION['username'] = $username;
    echo "ok";
} else {
    echo "error";
}
?>