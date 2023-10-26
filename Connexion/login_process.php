<?php
require_once __DIR__ . "/layout/header.php";
require_once __DIR__ . "/function/Redirection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    Redirection::redirect("login.php");
}

if($email != '' && $password != '') {
    
}