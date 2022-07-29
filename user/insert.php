<?php
include '../db_connect.php';

try {

    $mail = $_POST['mail'];
    $motsdepasse = $_POST['motsdepasse'];


    $sql="INSERT INTO Password (mail,motsdepasse) values ('".$mail."','".$motsdepasse."') ";

    $res = $spdo->query($sql);

    header("Location:http://localhost:8888/recette/user/index.php");

}
catch (\PDOException $e)
{
    throw new PDOException($e->getMessage());
}

