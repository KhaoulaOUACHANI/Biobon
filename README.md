# Biobon

## Table des matières

1. [Introduction](#introduction)
2. [Configuration](#configuration)
3. [Fonctionnalités](#fonctionnalités)
4. [Contenu](#contenu)
5. [Problèmes rencontrés](#problèmes-rencontrés)
6. [Conclusion](#conclusion)

## Introduction

Mon projet Biobon me tenait à cœur, car c'est une idée qui a commencé dès la découverte multimédia, il y a maintenant un an. La maquette était déjà faite, donc j'ai voulu développer le site afin d'avoir un projet complet sur lequel j'avais déjà travaillé. Ce projet m'a permis de faire en sorte qu'une simple idée finisse par être une chose concrète. Mon projet est un site en ligne de vente de bonbons, qui peut se diviser en deux catégories : côté client et côté back qui n'est pas visible par le client.

Le côté client contient les pages de navigation :

- [index.php](./index.php): Page d'accueil;
- [a_propos.php](./a_propos.php): Page à propos;
- [products.php](./products.php): Liste de tous les produits et moteur de recherche;
- [login.php](./connexion/login.php): Page de connexion;
- [subscribe.php](./inscription/subscribe.php): Page d'inscription;
- [addpanier.php](./panier/addpanier.php): Page du panier;
- [confirmation.php](./confirmation.php): Page de confirmation de commande.

## Configuration

Pour installer Mon Projet, suivez ces étapes :

1. Dupliquez le fichier [db.ini.template](./config/db.ini);
2. Renommez-le [db.ini](./config/db.ini);
3. Remplissez-le avec vos propres informations.

Sinon, créez un fichier dans le dossier `config` que vous nommerez `db.ini` avec ces données à modifier :

```ini
DB_HOST="127.0.0.1"
DB_PORT=3306
DB_NAME="db_name"
DB_CHARSET="utf8mb4"
DB_USER="user"
DB_PASSWORD="password"
```


## Fonctionnalités

- Connexion
- Création de compte
- Moteur de recherche
- Un panier visible lorsqu'on est connecté uniquement

## Contenu 

### La page d'accueil

Pour commencer, j'ai créé [header.php](./layout/header.php) avec toutes les données dont j'avais besoin, puis j'ai créé un [_header.php](./layout/_header.php) car j'avais besoin d'externaliser des pages qui n'avaient pas besoin de navbar et d'autres choses. Cependant, je me suis rendu compte que je les avais requises l'une dans l'autre, et je pense que ce n'est pas bon, car cela peut peut-être causer des erreurs. Pour ma défense, l'arborescence des fichiers m'a vraiment perdu; heureusement que Symfony existe. Ensuite, j'ai repris la fonction qui se connecte à la base de données, la base du code pour récupérer ou stocker les données. Par la suite, j'ai fait une page d'accueil simple (je voulais faire un carrousel des produits de la base de données directement, mais j'ai eu une erreur que je n'ai pas réussi à corriger, mais je compte bien revenir dessus après Symfony, bien sûr, pour ne pas confondre les deux) avec une navbar qui contient les liens des différentes pages, notamment le panier qui, lorsqu'on clique dessus, redirige vers la page de connexion avec un message d'erreur informant qu'il faut être connecté pour accéder à cette page.

### La page d'inscription

Pour la page d'inscription qui se trouve dans la page de connexion dans le lien en bas de page sur le 'je m'inscris', j'ai fait deux pages (comme la plupart de mes pages d'ailleurs, j'ai essayé de factoriser au maximum) : la page du front et puis la page process. J'ai récupéré les infos d'inscription en méthode post pour éviter qu'elles ne soient visibles dans l'URL, renvoyant des erreurs si l'une des cases est vide ou si les mots de passe ne sont pas identiques. Et pour enregistrer les données, j'ai fait une requête préparée pour plus de sécurité et j'ai hashé le mot de passe grâce à la fonction `password_hash` qui permet d'enregistrer le mot de passe selon un algorithme. Pour finir, lorsque la personne s'est inscrite, elle est redirigée vers la page de connexion afin qu'elle se connecte. Je n'ai pas créée de compte pour te connecter tu peux donc le faire de toi même puis ensuite te connecter.

### La page de connexion

Pour la page de connexion, j'ai récupéré les infos de connexion en méthode post également et utilisé la fonction `password_verify` pour déchiffrer le mot de passe afin de comparer les données entrées avec celles qui sont dans la base de données. Cela renvoie des erreurs si l'email ou le mot de passe sont null ou inconnus dans la base de données. Si les informations sont bonnes, la personne est connectée et du coup l'id de celle-ci est stockée dans la session et est redirigée vers la page panier qui maintenant est visible par l'utilisateur.

### La page panier

La page de panier, j'ai vraiment eu du mal à la faire, je ne savais pas par où commencer. J'ai donc regardé des tutos, mais il n'y en avait pas beaucoup malheureusement ou des tutos sans explications juste à suivre, et moi je n'aime pas trop suivre sans comprendre. J'étais donc pas très emballée, mais je n'avais pas le choix. J'ai donc suivi le tuto tout en essayant de comprendre en même temps en recherchant sur Google ou en demandant à ChatGPT (je sais que tu n'aimes pas trop qu'on utilise ChatGPT, mais parfois pour des petits débogages ou des explications de code ça ne fait pas de mal. En tout cas, il m'a permis de comprendre certain code donc je ne vais pas lui cracher dessus, il fait l'affaire pour des petits problèmes d'incompréhension). Du coup, pour commencer, j'ai fait deux fonctions, [getUtilisateurById.php](./function/getUtilisateurById.php)qui récupère le produit par l'id en méthode get et qui l'ajoute au panier tout en le stockant dans la session qui est initialisée dans la page panier.php. Il me semble que tu avais stocké les données dans la base de données, mais moi j'ai voulu les stocker dans la session pour diminuer le stockage, mais aussi par pure méthode de marketing car lorsque l'on met le produit dans le panier, celui-ci est réservé et donc plus disponible à la vente. Pour moi, si une personne n'a pas validé son panier directement, il est peu probable qu'elle revienne le payer. Autant vider le panier quand la session n'est plus valide car d'autres personnes voudront acheter le produit. Après, je ne sais pas s'il y a une méthode qui permet de garder les articles dans le panier sans pour autant les réserver, je ne me suis pas renseignée. La deuxième fonction [getUtilisateurById.php](./function/getUtilisateurById.php) stocke l'id de connexion des utilisateurs dans un tableau car lors de la validation du panier je voulais afficher le nom de la personne et les produits qu'elle a achetés. Au début, j'avais réussi à afficher le nom et le prénom mais pas les produits et par la suite j'ai réussi à afficher les produits mais plus le nom et prénoms et là j'ai toujours une erreur que je n'ai pas réussi à régler.

### Le clear_panier

Lorsque l'on appuie sur la petite poubelle à droite, le produit est supprimé du panier. Pour ce faire, je récupère l'id du produit et vérifie que le panier n'est pas vide et supprime la ligne avec un unset, puis redirige vers le panier.

### La page produit 

Elle compte plusieurs fichiers :

- le fichier [card_product.php](./card_product.php)  = template d'une carte produit
- le fichier [products.php](./card_product.php)  = affiche tout les produits grâce à une boucle foreach
- les fichiers [product_details.php](./product_details.php) et [product_details_back.php](./product_details_back.php) = la mise en page et affichage du produit sélectionné via l'ID.

J'ai partagé le code en plusieurs fichiers afin que la lecture du code soit plus facile à lire et à comprendre. Je récupère les données du produit dans ma fonction [getProductById.php](./function/getProductById.php), puis je fais des echo là où je veux les afficher et une boucle foreach pour la page produit qui liste tout les produits.

### Le moteur de recherche

Le moteur de recherche se trouve dans la page produit, il ne fonctionne qu'avec le nom complet des produits. Quand on recherche un produit, nous sommes redirigés vers sa page détail. J'ai fait une fonction [getProductByName.php](./function/getProductByName.php) qui récupère le nom par une requête préparée, je reçois le produit recherché dans la page [search_results.php](./search_results.php) par une méthode get qui elle est stockée dans un paramètre search et si le produit existe je l'affiche sinon je fais un echo 'Pas de produit sélectionné'.

## Problèmes rencontrés

L'un des problèmes le plus souvent revenu est l'arborescence de mes fichiers, j'ai voulu mettre mes fichiers dans des dossiers afin que tout soit organisé et que je puisse mieux me retrouver mais lorsque je voulais lier les pages rien ne marchait j'ai donc dû sortir des fichiers de mes dossiers et finir le reste sans faire de dossiers. 
J'ai dû lister les tâches à faire pour avancer et voir le problème moins gros, j'étais perdu mais à force de discuter avec les autres et moi-même j'ai réussi à m'en sortir.

J'avais plusieurs fois eu une erreur (pour mon [clear_panier.php](./clear_panier.php) et la page [addpanier.php](./panier/addpanier.php)) qui me disait que les données de l'en-tête HTTP étaient déjà envoyées j'ai donc dû ajouter une fonction qui est `ob_start` elle permet d'avoir une mémoire tampon et envoie les entête au navigateur en priorité. Et puis j'ai aussi eu d'autres erreurs mais c'était des choses moins compliquées à gérer.

## Conclusion

J'ai noté certaine choses que j'aimerais continuer ou finalisé comme la page [profile.php](./profile.php) qui n'est pas encore fonctionnelle mais que je compte réaliser prochainement, la page de confirmation de commande, le caroussel de ma page d'accueil, le moteur de recherche, le fait de rester connecter après s'être inscrit et pleins d'autres choses.

J'ai bien aimé le projet même si au début j'ai eu beaucoup de mal à le faire. Après m'être prise la tête, m'être documentée ou demandée de l'aide aux personnes de la promo, j'ai réussi mon projet. Même s'il y a encore des défauts, je suis fière du site que j'ai fait, il m'a permis d'apprendre la patience, la persévérance et surtout de mieux comprendre le PHP. 
En ayant une meilleure compréhension du PHP, il m'est plus facile de comprendre Symfony. 

Je te remercie pour les cours que tu nous donnes, tu es un très bon formateur qui est patient et surtout à l'écoute de chacun de nous. 
