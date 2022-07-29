<?php
//modifier
try {

    $id = $_POST['id'];
    $mail = $_POST['mail'];
    $motsdepasse = $_POST['motsdepasse'];


    $sql= "UPDATE Password SET mail='$mail', motsdepasse='$motsdepasse' WHERE id= '$id'" ;

    $res = $spdo->query($sql);

    header("Location:http://localhost:8889/recette/user/index.php");

}
catch (\PDOException $e)
{
    throw new PDOException($e->getMessage());
}

