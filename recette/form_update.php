<?php

include '../db_connect.php';

$id = $_GET['id'];

$reponses = $spdo->query('SELECT id,nom,description FROM liste_des_recettes WHERE id = '.$id);

foreach ($reponses as $row) {

    ?>
    <form name="insertion" action="update.php" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">nom</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="nom" name="nom" value="<?=$row['nom']?>">
            </div>
        </div>
        <br>
        <div class="form-group">
            <textarea class="form-control" rows="3" name="description"><?=$row['description']?></textarea>

        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">

                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name="id" value="<?=$row['id']?>">
                <button type="submit" class="btn btn-default">modifier</button>
            </div>
        </div>
    </form>
    <?php
}

?>
