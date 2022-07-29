



<form name="insertion" action="recette/insert.php" method="POST" class="form-horizontal" >
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">nom</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="nom" name="nom">
        </div>
    </div>
    <br>
    <div class="form-group">
        <textarea class="form-control" rows="3" name="description"></textarea>

    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">

            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">envoi</button>
        </div>
    </div>
</form>

<?php include 'list.php'; ?>