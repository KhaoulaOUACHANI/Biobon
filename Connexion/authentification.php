<?php

session_start();

require_once __DIR__ . ("/function/Redirection.php");
require_once __DIR__ . ("/../function/Redirection.php");
require_once __DIR__ . ("/../function/getConnection.php");



if (!isset($_POST['email']) || !isset ( $_POST['password'] )) {
    Redirection::redirect('login.php');
}

[
    'email'=> $email,
    'password'=> $password
] = $_POST;

