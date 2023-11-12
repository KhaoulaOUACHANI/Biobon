<?php
require_once '../layout/_header.php';
require_once '../classes/Utils.php';


$_SESSION = [];
session_destroy();

Utils::redirect('login.php');