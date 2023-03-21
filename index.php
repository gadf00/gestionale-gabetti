<?php

session_start();

$request_uri = $_SERVER['REQUEST_URI'];
if (!isset($_SESSION['username']) || $request_uri != '/gestionale-gabetti/login') {
    // L'utente non è autenticato e sta cercando di accedere a una pagina protetta
    header("location: login.php");
    exit();
}

switch ($request_uri) {
    case '/gestionale-gabetti/clients':
        require 'clients.php';
        break;
    case '/gestionale-gabetti/contact':
        require 'contact.php';
        break;
    case '/gestionale-gabetti/login':
        require 'login.php';
        break;
    default:
        http_response_code(404);
        require 'prova.html';
        break;
}
?>