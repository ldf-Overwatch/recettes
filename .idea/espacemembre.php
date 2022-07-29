<?php

//chapitre 1
session_start();

if (empty($_SESSION['utilisateurs']))
{

    if(isset($_POST['utilisateurs']) && isset($_POST['']) && isset($_POST['membre_mail']))
    {
        /*il faut que tous les champs soient renseignes*/
        if($_POST['utilisateurs']!="" && $_POST['Password']!="" && $_POST['email']!="")
        {
            require_once("espace.php");


                $req = $bdd->prepare('SELECT utilisation  FROM membres WHERE password  = :password ');
                $req->execute(array('password '=> $_POST['password ']));
                $nb_resultats_recherche_membre=$req->fetch();



                if(!$nb_resultats_recherche_membre) /*si il n'y a pas de resultat*/ {
                    /*on crypte le mot de passe*/
                    $membre_mdp = sha1($_POST['membre_mdp']);


                    $req = $bdd->prepare('INSERT INTO utilisateurs ( passeword,email,) VALUES(:membre, Password CURDATE())');
                    $req->execute(array('utilisateurs' => $_POST['Password'], 'Password' => $password, 'email' => $_POST['email']));


                }









?>






