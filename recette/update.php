<?php

include('../db_connect.php'); // on inclus le fichier qui permet de nous connecter à la base de données.

try {

    $id = $_POST['id'];                // les variables que l'on récupère du formulaire en methode POST
    $nom = $_POST['nom'];
    $description = $_POST['description'];


    $sql= "UPDATE liste_des_recettes SET nom='$nom', description='$description' WHERE id= '$id'" ; // la requête pour modifier

    $res = $spdo->query($sql); // execute

    header("Location: http://localhost:8888/recette/index.php");  // une redirection vers le lien des fiches de  mysql

}
catch (\PDOException $e)
{
    throw new PDOException($e->getMessage()); // voir  les erreur ok
}




