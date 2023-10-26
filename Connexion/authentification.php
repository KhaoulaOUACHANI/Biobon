<?php

session_stars();

require_once __DIR__ . ("/function/Redirection.php");
require_once __DIR__ . ("/classe/AppError.php");
require_once __DIR__ . ("/config/db.php");

if (!isset($_POST['email']) || !isset ( $_POST['password'] )) {
    