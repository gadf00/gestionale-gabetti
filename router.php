<?php

session_start();

$request_uri = $_SERVER['REQUEST_URI'];

if (!isset($_SESSION['username']) && $request_uri != '/login') {
    // L'utente non è autenticato e sta cercando di accedere a una pagina protetta
    header("Location: /login");
    exit();
}

switch ($request_uri) {
    case '/clients':
        require 'clients.php';
        break;
    case '/contact':
        require 'contact.php';
        break;
    case '/login':
        require 'login.php';
        break;
    default:
        http_response_code(404);
        require 'login.php';
        break;
}
