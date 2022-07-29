<?php

//hier

// les variables
    $passe_valid="david1412";
    $login_valid="david@traceweb.fr";

//verifie

if ( isset( $_POST [ 'login']) && isset( $_POST ['motsdepasse']) )
{

    if ($login_valid == $_POST[ 'login'])
    {
        if($passe_valid == $_POST[ 'motsdepasse'])
        {
            //select * from utilisateurs where login = $_POST[ 'login'] AND password = $_POST[ 'motsdepasse'];

            session_start();
            // enregistre  les paramètre des visiteur

            $_SESSION [ "login"] = $_POST [ "login"] ;
            $_SESSION [ "motsdepasse"] = $_POST [ "motsdepasse"];
            $_SESSION [ 'utilisateur_id'] = '1';
            echo session_id();
        }else{
            echo 'mauvaise password';
        }
    }
    else{
        echo "tes qui toi ?";
    }
}
else{
    echo "tes qui toi ?";
}

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['motsdepasse'])) {

    // On teste pour voir si nos variables ont bien été enregistrées
    echo '<html>';
    echo '<head>';
    echo '<title>Page de notre section membre</title>';
    echo '</head>';

    echo '<body>';
    echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['motsdepasse'].'.';
    echo '<br />';

    // On affiche un lien pour fermer notre session
    echo '<a href="./html.php">Déconnection</a>';
}
else {
    ?>

    <form action="" method="post">
        Votre login : <input type="text" name="login">
        <br />
        Votre mot de passé : <input type="password" name="motsdepasse"><br />
        <input type="submit" value="Connexion">
    </form>
<?
}


// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();





