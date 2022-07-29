<?php


catch(Exception $e)
{
    //les erreur

    die('Erreur : '.$e->getMessage());
}

/// trou du cul  requete jointure pour aller sur les table recuperer  je t'en mets

$reponse = $bdd->query('SELECT liste_des_recettes, password 
FROM  liste_des_recettes // le nom du  truc  
INNER JOIN recettes ON liste_des_recettes.id = recettes.id // jointure 
WHERE recettes = \'USA\''); // c'est quoi ? ????

while ($donnees = $reponse->fetch())
{
    echo $donnees['recettes'] . '<br />';
}

$reponse->closeCursor();


?>

// je t'aime pour l'éternité mon amour et je t'en mets



