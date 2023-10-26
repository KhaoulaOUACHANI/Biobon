<?php

class Redirection
{
    public static function redirect(string $location): void
    {
        header('Location: ' . $location);
        exit;
    }
}
