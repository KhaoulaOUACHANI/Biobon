<?php 
require_once __DIR__ ."/../classes/AppError.php";


function getErrorMessage(int $errorCode): string
{
    return match ($errorCode) {
        AppError::DB_CONNECTION => "erreur lors de la connexion à la base de données",
        AppError::EMPTY => "Veuillez remplir tout les champs",
        AppError::EMAIL_EMPTY => "L'email est obligatoire",
        AppError::EMAIL_INVALID => "Le format de l'email est incorrect",
        AppError::EMAIL_DUPLICATE => "L'email existe déjà, vous pouvez vous connectez",
        AppError::PASSWORD_ERROR => "Le mot de passe est incorrect",
        AppError::USER_NOT_FOUND => "L'email n'est pas dans enregistré dans notre base de donnée",
        AppError::PASSWORD_INVALID => "Les mots de passe ne correspondent pas",
        AppError::PASSWORD_EMPTY => "Le mot de passe est obligatoire",
        AppError::NAME_EMPTY => "Le nom est obligtoire",
        AppError::LAST_NAME_EMPTY => "Le prénom est obligtoire",
        AppError::LOGIN_CONNECTION => "Vous devez être identifié pour accéder à cette page",
        AppError::PANIER_EMPTY => "Votre panier est vide",
        default => "Une erreur est survenue"
        
    };

}