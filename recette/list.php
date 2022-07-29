<?php

include('../db_connect.php');

try {


    $reponses = $spdo->query('SELECT id,nom,description FROM liste_des_recettes');


    echo '<table>';
    echo '<thead><td>nom recette</td><td>description</td></thead>';

    foreach ($reponses as $row)
        echo '<tr>';
    echo '<td>' . $row['nom'] . '</td>';
    echo '<td>' . $row['description'] . '</td>';
    echo '<td><a href="form_update.php?id=' . $row['id'] . '">modifier</a></td>';
    echo '</tr>';

    echo '</table>';
}


catch (\PDOException $e)
{
    throw new PDOException($e->getMessage()); // voir  les erreur ok
}






