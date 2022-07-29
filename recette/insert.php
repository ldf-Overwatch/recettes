<?php

include('../db_connect.php');

try {

    $nom = $_POST['nom'];
    $description = $_POST['description'];

    $sql="INSERT INTO liste_des_recettes ( nom, description, date_creation) values ('".$nom."','".$description."', NOW())" ;

    $res = $spdo->query($sql);

    header("Location: http://localhost:8888/recette/index.php");

}
catch (\PDOException $e)
{
    throw new PDOException($e->getMessage());
}

