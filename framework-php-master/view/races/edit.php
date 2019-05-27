<div class="container">
    <form action="<?=URL?>races/updateRace/<?php echo $race['id']; ?>" method="post">
        <div class="form-group">
            <label class="lead" for="">Rasnaam</label>
            <input name="raceName" class="form-control" type="text" required value="<?php echo $race['naam']; ?>">
        </div>
        <div class="form-group">
            <label class="lead" for="">Paardhoogte(cm)</label>
            <input name="raceHeight" class="form-control" type="number" min="0" max="200" required value="<?php echo $race['hoogte']; ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Update">
    </form>
</div>